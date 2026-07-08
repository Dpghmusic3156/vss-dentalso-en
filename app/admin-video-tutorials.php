<?php
/**
 * Admin page: Quản lý Tutorial Videos
 */

namespace App;

// Register admin menu
add_action('admin_menu', function () {
    add_menu_page(
        'Tutorial Videos',
        'Tutorial Videos',
        'manage_options',
        'dentalso-guides',
        __NAMESPACE__ . '\\vhd_admin_page',
        'dashicons-video-alt3',
        30
    );
});

// Get saved categories (with defaults)
function vhd_get_categories()
{
    $defaults = [
        'gioi-thieu' => ['title'=>'Introduction','desc'=>'Overview of DentalSO and versions.','icon'=>'play_circle','color'=>'#3b82f6','bg'=>'#eff6ff','visible'=>true,'order'=>0],
        'phien-ban-linh-hoat' => ['title'=>'Flexible Version','desc'=>'Flexible version guide.','icon'=>'devices','color'=>'#06b6d4','bg'=>'#ecfeff','visible'=>true,'order'=>1],
        'don-hang' => ['title'=>'Orders & Production','desc'=>'Manage orders and production.','icon'=>'inventory_2','color'=>'#10b981','bg'=>'#ecfdf5','visible'=>true,'order'=>2],
        'hoa-don' => ['title'=>'Invoices & Debts','desc'=>'Issue invoices and manage debts.','icon'=>'receipt_long','color'=>'#f59e0b','bg'=>'#fffbeb','visible'=>true,'order'=>3],
        'bao-hanh' => ['title'=>'Warranty','desc'=>'Electronic warranty and QR Code.','icon'=>'verified_user','color'=>'#8b5cf6','bg'=>'#f5f3ff','visible'=>true,'order'=>4],
        'quan-ly-chung' => ['title'=>'General Management','desc'=>'Clinics, pricing, roles.','icon'=>'settings','color'=>'#6b7280','bg'=>'#f9fafb','visible'=>true,'order'=>5],
    ];
    $saved = get_option('dentalso_vhd_categories', []);
    return !empty($saved) ? $saved : $defaults;
}

// Get hidden video IDs
function vhd_get_hidden_videos()
{
    return get_option('dentalso_vhd_hidden_videos', []);
}

// Get video category overrides
function vhd_get_video_overrides()
{
    return get_option('dentalso_vhd_video_overrides', []);
}

// Get video order
function vhd_get_video_order()
{
    return get_option('dentalso_vhd_video_order', []);
}

// Get videos with overrides applied
function vhd_get_videos_with_overrides()
{
    $videos = dentalso_get_youtube_videos();
    $overrides = vhd_get_video_overrides();
    $hidden = vhd_get_hidden_videos();
    $order = vhd_get_video_order();

    foreach ($videos as &$v) {
        $vid = $v['id'];
        $v['hidden'] = in_array($vid, $hidden);
        if (isset($overrides[$vid]['category'])) {
            $v['category'] = $overrides[$vid]['category'];
        }
        $v['order'] = $order[$vid] ?? 999;
    }

    // Sort by order
    usort($videos, fn($a, $b) => ($a['order'] ?? 999) - ($b['order'] ?? 999));
    return $videos;
}

// AJAX: Save categories
add_action('wp_ajax_vhd_save_categories', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $cats = json_decode(stripslashes($_POST['categories'] ?? '{}'), true);
    if ($cats) update_option('dentalso_vhd_categories', $cats);
    wp_send_json_success();
});

// AJAX: Toggle video visibility
add_action('wp_ajax_vhd_toggle_video', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $vid = sanitize_text_field($_POST['video_id'] ?? '');
    $hide = $_POST['hide'] === '1';
    $hidden = vhd_get_hidden_videos();
    if ($hide && !in_array($vid, $hidden)) $hidden[] = $vid;
    if (!$hide) $hidden = array_values(array_diff($hidden, [$vid]));
    update_option('dentalso_vhd_hidden_videos', $hidden);
    wp_send_json_success();
});

// AJAX: Move video to category
add_action('wp_ajax_vhd_move_video', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $vid = sanitize_text_field($_POST['video_id'] ?? '');
    $cat = sanitize_text_field($_POST['category'] ?? '');
    $overrides = vhd_get_video_overrides();
    $overrides[$vid] = ['category' => $cat];
    update_option('dentalso_vhd_video_overrides', $overrides);
    wp_send_json_success();
});

// AJAX: Delete category
add_action('wp_ajax_vhd_delete_category', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $slug = sanitize_text_field($_POST['slug'] ?? '');
    $cats = vhd_get_categories();
    unset($cats[$slug]);
    update_option('dentalso_vhd_categories', $cats);
    wp_send_json_success();
});

// AJAX: Save video order
add_action('wp_ajax_vhd_save_video_order', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    $order = json_decode(stripslashes($_POST['order'] ?? '{}'), true);
    if ($order !== null) update_option('dentalso_vhd_video_order', $order);
    wp_send_json_success();
});

// AJAX: Clear YouTube cache
add_action('wp_ajax_vhd_clear_cache', function () {
    check_ajax_referer('vhd_admin_nonce');
    if (!current_user_can('manage_options')) wp_die('Forbidden');
    dentalso_clear_youtube_cache();
    wp_send_json_success();
});

add_action('customize_register', function ($wp_customize) {
    // YouTube API Key
    $wp_customize->add_setting('youtube_api_key');
    $wp_customize->add_control(
        'youtube_api_key',
        array(
            'label' => 'YouTube API Key',
            'description' => 'API key để tự động lấy video từ YouTube',
            'section' => 'title_tagline',
            'settings' => 'youtube_api_key',
            'type' => 'text',
        )
    );
});

/**
 * Lấy danh sách video từ các playlist YouTube của DentalSO
 * Cache 12 giờ bằng WordPress transient
 */
function dentalso_get_youtube_videos()
{
    // Kiểm tra cache
    $cached = get_transient('dentalso_yt_videos');
    if ($cached !== false) {
        return $cached;
    }

    $api_key = get_theme_mod('youtube_api_key', '');
    if (empty($api_key)) {
        return dentalso_get_fallback_videos();
    }

    $all_videos = [];
    $seen_ids = [];

    // Bước 1: Lấy uploads playlist ID từ kênh @DentalSO
    $uploads_playlist = get_transient('dentalso_yt_uploads_id');
    if (!$uploads_playlist) {
        $ch_url = add_query_arg([
            'part' => 'contentDetails',
            'forHandle' => '@DentalSO',
            'key' => $api_key,
        ], 'https://www.googleapis.com/youtube/v3/channels');

        $ch_response = wp_remote_get($ch_url, ['timeout' => 10]);
        if (!is_wp_error($ch_response)) {
            $ch_body = json_decode(wp_remote_retrieve_body($ch_response), true);
            $uploads_playlist = $ch_body['items'][0]['contentDetails']['relatedPlaylists']['uploads'] ?? '';
            if ($uploads_playlist) {
                set_transient('dentalso_yt_uploads_id', $uploads_playlist, 30 * DAY_IN_SECONDS);
            }
        }
    }

    // Bước 2: Lấy tất cả video từ uploads playlist (= tất cả video trên kênh)
    if ($uploads_playlist) {
        $page_token = '';
        do {
            $url = add_query_arg([
                'part' => 'snippet',
                'playlistId' => $uploads_playlist,
                'maxResults' => 50,
                'pageToken' => $page_token,
                'key' => $api_key,
            ], 'https://www.googleapis.com/youtube/v3/playlistItems');

            $response = wp_remote_get($url, ['timeout' => 10]);
            if (is_wp_error($response)) break;

            $body = json_decode(wp_remote_retrieve_body($response), true);
            if (empty($body['items'])) break;

            foreach ($body['items'] as $item) {
                $snippet = $item['snippet'] ?? [];
                $video_id = $snippet['resourceId']['videoId'] ?? '';
                $title = $snippet['title'] ?? '';

                if (empty($video_id) || isset($seen_ids[$video_id]) || $title === 'Private video' || $title === 'Deleted video') {
                    continue;
                }
                $seen_ids[$video_id] = true;

                $category = dentalso_detect_video_category($title, 'quan-ly-chung');

                $all_videos[] = [
                    'id' => $video_id,
                    'title' => $title,
                    'desc' => $snippet['description'] ?? '',
                    'category' => $category,
                ];
            }

            $page_token = $body['nextPageToken'] ?? '';
        } while (!empty($page_token));
    }

    if (empty($all_videos)) {
        return dentalso_get_fallback_videos();
    }

    // Cache 12 giờ
    set_transient('dentalso_yt_videos', $all_videos, 12 * HOUR_IN_SECONDS);
    return $all_videos;
}

/**
 * Tự động phân loại video dựa trên tiêu đề
 */
function dentalso_detect_video_category($title, $default)
{
    $title_lower = mb_strtolower($title);

    if (preg_match('/giới thiệu|tổng quan|phiên bản.*labo nhỏ/u', $title_lower)) {
        return 'gioi-thieu';
    }
    if (preg_match('/bảo hành|thẻ bảo hành|in thẻ/u', $title_lower)) {
        return 'bao-hanh';
    }
    if (preg_match('/hóa đơn|công nợ|chiết khấu|xuất hóa đơn/u', $title_lower)) {
        return 'hoa-don';
    }
    if (preg_match('/người dùng|phân quyền|nha khoa.*bảng giá|bảng giá|cài đặt|màn hình chính/u', $title_lower)) {
        return 'quan-ly-chung';
    }
    if (preg_match('/đơn hàng|sản xuất|công đoạn|hàng thử|hàng gửi|tháo lắp|hình ảnh.*đơn|phiếu chỉ định/u', $title_lower)) {
        return 'don-hang';
    }

    return $default;
}

/**
 * Xóa cache video (gọi khi cần refresh)
 */
function dentalso_clear_youtube_cache()
{
    delete_transient('dentalso_yt_videos');
}

/**
 * Fallback: danh sách video tĩnh khi không có API key hoặc API lỗi
 */
function dentalso_get_fallback_videos()
{
    return [
        ['id' => 'tlw25BpD77M', 'title' => 'Giới thiệu DentalSO', 'desc' => 'Tổng quan về phần mềm quản lý Labo nha khoa DentalSO', 'category' => 'gioi-thieu'],
        ['id' => 'gyeXaXoxltA', 'title' => 'Phiên bản dành cho Labo nhỏ', 'desc' => 'Giới thiệu phiên bản DentalSO tối ưu cho Labo quy mô nhỏ', 'category' => 'gioi-thieu'],
        ['id' => 'HsqAd8dvQWY', 'title' => 'Hướng dẫn tạo đơn hàng', 'desc' => 'Tạo đơn hàng trên phiên bản linh hoạt', 'category' => 'phien-ban-linh-hoat'],
        ['id' => 'Tb-peLSI0PA', 'title' => 'Hướng dẫn in phiếu chỉ định', 'desc' => 'In phiếu chỉ định sản xuất', 'category' => 'phien-ban-linh-hoat'],
        ['id' => 'EeE_MUlhsos', 'title' => 'Hướng dẫn sửa đơn hàng', 'desc' => 'Chỉnh sửa đơn hàng đã tạo', 'category' => 'phien-ban-linh-hoat'],
        ['id' => 'NYrd3atyVJo', 'title' => 'Chọn đơn hàng trước khi xuất hóa đơn', 'desc' => 'Chọn đơn hàng hoàn thành để xuất hóa đơn', 'category' => 'phien-ban-linh-hoat'],
        ['id' => 'UKyG7uziVmg', 'title' => 'Thêm DentalSO vào màn hình chính iOS', 'desc' => 'Thêm shortcut lên iPhone / iPad', 'category' => 'phien-ban-linh-hoat'],
        ['id' => 'Xjw7YmIy-O8', 'title' => 'Quản lý đơn hàng sản xuất', 'desc' => 'Tạo, theo dõi và quản lý đơn hàng', 'category' => 'don-hang'],
        ['id' => '8-v535pFNYU', 'title' => 'Quản lý đơn hàng sản xuất (Cập nhật)', 'desc' => 'Phiên bản cập nhật', 'category' => 'don-hang'],
        ['id' => 'h1TVk4mkXa4', 'title' => 'Hướng dẫn cho sản xuất', 'desc' => 'Quy trình sản xuất trên DentalSO', 'category' => 'don-hang'],
        ['id' => 'MwmSX2xpiLY', 'title' => 'Cập nhật công đoạn trong đơn hàng', 'desc' => 'Cập nhật tiến độ công đoạn sản xuất', 'category' => 'don-hang'],
        ['id' => 'pR5skyAPQZE', 'title' => 'Nhập đơn hàng tháo lắp', 'desc' => 'Nhập đơn hàng tháo lắp trên hệ thống', 'category' => 'don-hang'],
        ['id' => '5pebBX1ZBnA', 'title' => 'Quản lý hàng gửi thử', 'desc' => 'Quản lý quy trình hàng gửi thử', 'category' => 'don-hang'],
        ['id' => 'hddVfQrfIBE', 'title' => 'Quản lý hàng thử', 'desc' => 'Quản lý hàng thử từ tiếp nhận đến hoàn thành', 'category' => 'don-hang'],
        ['id' => 'aCbTgpMw_xk', 'title' => 'Quản lý hình ảnh theo đơn hàng', 'desc' => 'Tải lên và quản lý hình ảnh đơn hàng', 'category' => 'don-hang'],
        ['id' => 'W4eW-YuOoi8', 'title' => 'Quản lý hóa đơn và công nợ', 'desc' => 'Tạo hóa đơn, theo dõi công nợ', 'category' => 'hoa-don'],
        ['id' => 'eJUYaaZG864', 'title' => 'Chiết khấu hoá đơn theo nhóm sản phẩm', 'desc' => 'Thiết lập chiết khấu theo nhóm', 'category' => 'hoa-don'],
        ['id' => 'YbdgRwob3d0', 'title' => 'Nhập chiết khấu hóa đơn', 'desc' => 'Nhập và áp dụng chiết khấu', 'category' => 'hoa-don'],
        ['id' => 'sug84WWNG6k', 'title' => 'Chọn đơn hàng để xuất hóa đơn', 'desc' => 'Chọn đơn hàng hoàn thành để xuất hóa đơn', 'category' => 'hoa-don'],
        ['id' => 'aUUPumcSv0o', 'title' => 'Quản lý mẫu thẻ bảo hành', 'desc' => 'Tạo và tùy chỉnh mẫu thẻ bảo hành', 'category' => 'bao-hanh'],
        ['id' => 'BcXhVJo2WsI', 'title' => 'In thẻ bảo hành', 'desc' => 'In thẻ bảo hành QR Code', 'category' => 'bao-hanh'],
        ['id' => 'Qc9nLVEdolc', 'title' => 'Quản lý Nha khoa và Bảng giá', 'desc' => 'Quản lý danh sách nha khoa và bảng giá', 'category' => 'quan-ly-chung'],
        ['id' => 'PkhZH1zxtY4', 'title' => 'Quản lý người dùng và phân quyền', 'desc' => 'Tạo tài khoản và phân quyền', 'category' => 'quan-ly-chung'],
    ];
}

/**
 * Rewrite rules for Tutorial Videos page
 * URL: /guides/{category}/{video-slug}/
 */
add_action('init', function () {
    add_rewrite_rule(
        'guide-videos/([^/]+)/([^/]+)/?$',
        'index.php?pagename=guide-videos&vhd_category=$matches[1]&vhd_video=$matches[2]',
        'top'
    );
    add_rewrite_rule(
        'guide-videos/([^/]+)/?$',
        'index.php?pagename=guide-videos&vhd_category=$matches[1]',
        'top'
    );
});

add_filter('query_vars', function ($vars) {
    $vars[] = 'vhd_category';
    $vars[] = 'vhd_video';
    return $vars;
});

/**
 * Create URL-friendly slug from Vietnamese title
 */
function dentalso_vn_slug($str)
{
    $str = mb_strtolower(trim($str));
    $map = [
        'à'=>'a','á'=>'a','ả'=>'a','ã'=>'a','ạ'=>'a','ă'=>'a','ắ'=>'a','ằ'=>'a','ẳ'=>'a','ẵ'=>'a','ặ'=>'a',
        'â'=>'a','ấ'=>'a','ầ'=>'a','ẩ'=>'a','ẫ'=>'a','ậ'=>'a','đ'=>'d',
        'è'=>'e','é'=>'e','ẻ'=>'e','ẽ'=>'e','ẹ'=>'e','ê'=>'e','ế'=>'e','ề'=>'e','ể'=>'e','ễ'=>'e','ệ'=>'e',
        'ì'=>'i','í'=>'i','ỉ'=>'i','ĩ'=>'i','ị'=>'i',
        'ò'=>'o','ó'=>'o','ỏ'=>'o','õ'=>'o','ọ'=>'o','ô'=>'o','ố'=>'o','ồ'=>'o','ổ'=>'o','ỗ'=>'o','ộ'=>'o',
        'ơ'=>'o','ớ'=>'o','ờ'=>'o','ở'=>'o','ỡ'=>'o','ợ'=>'o',
        'ù'=>'u','ú'=>'u','ủ'=>'u','ũ'=>'u','ụ'=>'u','ư'=>'u','ứ'=>'u','ừ'=>'u','ử'=>'u','ữ'=>'u','ự'=>'u',
        'ỳ'=>'y','ý'=>'y','ỷ'=>'y','ỹ'=>'y','ỵ'=>'y',
    ];
    $str = strtr($str, $map);
    $str = preg_replace('/[^a-z0-9\s-]/', '', $str);
    $str = preg_replace('/[\s-]+/', '-', $str);
    return trim($str, '-');
}

// Admin page renderer
function vhd_admin_page()
{
    $categories = vhd_get_categories();
    $videos = vhd_get_videos_with_overrides();
    $nonce = wp_create_nonce('vhd_admin_nonce');

    // Group videos by category
    $grouped = [];
    foreach ($videos as $v) {
        $grouped[$v['category']][] = $v;
    }
    ?>
    <div class="wrap" id="vhd-admin">
        <h1>Quản lý Tutorial Videos</h1>
        <p class="description">Quản lý danh mục và video hiển thị trên trang Tutorial Videos.</p>

        <div class="vhd-admin-actions" style="margin:16px 0;">
            <button class="button" onclick="vhdClearCache()">🔄 Refresh video cache</button>
            <a href="<?= home_url('guide-videos/') ?>" target="_blank" class="button">👁 View page</a>
        </div>

        <h2 class="nav-tab-wrapper">
            <a href="#" class="nav-tab nav-tab-active" data-tab="categories">Categories</a>
            <a href="#" class="nav-tab" data-tab="videos">Video</a>
        </h2>

        <!-- TAB: Categories -->
        <div class="vhd-tab" id="tab-categories">
            <div style="margin:16px 0;">
                <button class="button button-primary" onclick="vhdAddCategory()">+ Add category</button>
            </div>
            <table class="wp-list-table widefat fixed striped" id="cat-table">
                <thead><tr>
                    <th style="width:30px"></th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>Color</th>
                    <th style="width:80px">Visibility</th>
                    <th style="width:120px">Actions</th>
                </tr></thead>
                <tbody>
                <?php
                uasort($categories, fn($a,$b) => ($a['order']??0) - ($b['order']??0));
                foreach ($categories as $slug => $cat): ?>
                <tr data-slug="<?= esc_attr($slug) ?>" draggable="true">
                    <td class="vhd-drag-handle" style="color:#999;cursor:grab;user-select:none">☰</td>
                    <td><strong><?= esc_html($cat['title']) ?></strong></td>
                    <td><code><?= esc_html($slug) ?></code></td>
                    <td><?= esc_html($cat['desc'] ?? '') ?></td>
                    <td><span class="material-symbols-outlined" style="font-size:20px"><?= esc_html($cat['icon'] ?? 'folder') ?></span></td>
                    <td><span style="display:inline-block;width:24px;height:24px;border-radius:6px;background:<?= esc_attr($cat['color'] ?? '#999') ?>;vertical-align:middle"></span></td>
                    <td>
                        <label class="vhd-toggle">
                            <input type="checkbox" <?= ($cat['visible'] ?? true) ? 'checked' : '' ?> onchange="vhdToggleCat('<?= esc_attr($slug) ?>', this.checked)">
                            <span class="vhd-toggle-slider"></span>
                        </label>
                    </td>
                    <td>
                        <button class="button button-small" onclick="vhdEditCategory('<?= esc_attr($slug) ?>')">Edit</button>
                        <button class="button button-small button-link-delete" onclick="vhdDeleteCategory('<?= esc_attr($slug) ?>')">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- TAB: Videos -->
        <div class="vhd-tab" id="tab-videos" style="display:none">
            <div style="margin:16px 0;display:flex;gap:8px;align-items:center">
                <label>Filter category:</label>
                <select id="video-filter" onchange="vhdFilterVideos()">
                    <option value="all">All</option>
                    <?php foreach ($categories as $slug => $cat): ?>
                    <option value="<?= esc_attr($slug) ?>"><?= esc_html($cat['title']) ?></option>
                    <?php endforeach; ?>
                </select>
                <span id="video-count" style="color:#666;margin-left:8px"></span>
            </div>
            <table class="wp-list-table widefat fixed striped" id="video-table">
                <thead><tr>
                    <th style="width:30px"></th>
                    <th style="width:120px">Thumbnail</th>
                    <th>Title</th>
                    <th style="width:180px">Categories</th>
                    <th style="width:80px">Visibility</th>
                </tr></thead>
                <tbody>
                <?php foreach ($videos as $v): ?>
                <tr data-id="<?= esc_attr($v['id']) ?>" data-cat="<?= esc_attr($v['category']) ?>" class="<?= $v['hidden'] ? 'vhd-hidden-row' : '' ?>" draggable="true">
                    <td class="vhd-drag-handle" style="color:#999;cursor:grab;user-select:none">☰</td>
                    <td><img src="https://img.youtube.com/vi/<?= esc_attr($v['id']) ?>/default.jpg" style="width:100%;border-radius:4px"></td>
                    <td>
                        <strong><?= esc_html($v['title']) ?></strong>
                        <div class="row-actions"><span><a href="https://www.youtube.com/watch?v=<?= esc_attr($v['id']) ?>" target="_blank">View on YouTube</a></span></div>
                    </td>
                    <td>
                        <select onchange="vhdMoveVideo('<?= esc_attr($v['id']) ?>', this.value)">
                            <?php foreach ($categories as $slug => $cat): ?>
                            <option value="<?= esc_attr($slug) ?>" <?= $v['category'] === $slug ? 'selected' : '' ?>><?= esc_html($cat['title']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td>
                        <label class="vhd-toggle">
                            <input type="checkbox" <?= !$v['hidden'] ? 'checked' : '' ?> onchange="vhdToggleVideo('<?= esc_attr($v['id']) ?>', !this.checked)">
                            <span class="vhd-toggle-slider"></span>
                        </label>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Edit Category Modal -->
        <div id="cat-modal" style="display:none">
            <div class="vhd-modal-bg" onclick="vhdCloseModal()"></div>
            <div class="vhd-modal-box">
                <h2 id="cat-modal-title">Edit danh mục</h2>
                <input type="hidden" id="cat-edit-slug">
                <table class="form-table">
                    <tr><th>Name</th><td><input type="text" id="cat-edit-title" class="regular-text"></td></tr>
                    <tr><th>Slug</th><td><input type="text" id="cat-edit-slug-input" class="regular-text" placeholder="tu-dong-tao"><p class="description">Leave empty to auto-generate from name</p></td></tr>
                    <tr><th>Description</th><td><textarea id="cat-edit-desc" class="large-text" rows="2"></textarea></td></tr>
                    <tr><th>Icon</th><td><input type="text" id="cat-edit-icon" class="regular-text" placeholder="play_circle"><p class="description"><a href="https://fonts.google.com/icons" target="_blank">Chọn icon →</a></p></td></tr>
                    <tr><th>Color</th><td><input type="color" id="cat-edit-color" value="#3b82f6"></td></tr>
                    <tr><th>Color nền</th><td><input type="color" id="cat-edit-bg" value="#eff6ff"></td></tr>
                </table>
                <p class="submit">
                    <button class="button button-primary" onclick="vhdSaveCategory()">Save</button>
                    <button class="button" onclick="vhdCloseModal()">Cancel</button>
                </p>
            </div>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet">

    <style>
    .vhd-toggle { position:relative;display:inline-block;width:40px;height:22px }
    .vhd-toggle input { opacity:0;width:0;height:0 }
    .vhd-toggle-slider { position:absolute;cursor:pointer;inset:0;background:#ccc;border-radius:22px;transition:.2s }
    .vhd-toggle-slider:before { content:"";position:absolute;width:16px;height:16px;left:3px;bottom:3px;background:#fff;border-radius:50%;transition:.2s }
    .vhd-toggle input:checked + .vhd-toggle-slider { background:#0071e3 }
    .vhd-toggle input:checked + .vhd-toggle-slider:before { transform:translateX(18px) }
    .vhd-hidden-row { opacity:.45 }
    #cat-table tbody tr[draggable] { transition:opacity .2s }
    #cat-table tbody tr.vhd-dragging { opacity:.4;background:#f0f6fc }
    #cat-table tbody tr.vhd-drag-over td { border-top:2px solid #0071e3 }
    #video-table tbody tr[draggable] { transition:opacity .2s }
    #video-table tbody tr.vhd-dragging { opacity:.4;background:#f0f6fc }
    #video-table tbody tr.vhd-drag-over td { border-top:2px solid #0071e3 }
    .vhd-drag-handle { user-select:none;-webkit-user-select:none }
    #cat-modal .vhd-modal-bg { position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:99999 }
    #cat-modal .vhd-modal-box { position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);background:#fff;padding:24px 32px;border-radius:12px;z-index:100000;width:560px;max-width:90vw;max-height:80vh;overflow-y:auto;box-shadow:0 20px 60px rgba(0,0,0,.3) }
    </style>

    <script>
    const VHD = {
        nonce: '<?= $nonce ?>',
        ajaxurl: '<?= admin_url('admin-ajax.php') ?>',
        cats: <?= json_encode($categories) ?>
    };

    // Tabs
    document.querySelectorAll('.nav-tab').forEach(tab => {
        tab.addEventListener('click', e => {
            e.preventDefault();
            document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('nav-tab-active'));
            tab.classList.add('nav-tab-active');
            document.querySelectorAll('.vhd-tab').forEach(p => p.style.display = 'none');
            document.getElementById('tab-' + tab.dataset.tab).style.display = '';
            if (tab.dataset.tab === 'videos') vhdFilterVideos();
        });
    });

    function vhdAjax(action, data, cb) {
        const fd = new FormData();
        fd.append('action', action);
        fd.append('_ajax_nonce', VHD.nonce);
        Object.entries(data).forEach(([k,v]) => fd.append(k, v));
        fetch(VHD.ajaxurl, {method:'POST', body:fd}).then(r=>r.json()).then(r=>{
            if(cb) cb(r);
        });
    }

    // Toggle video
    function vhdToggleVideo(id, hide) {
        vhdAjax('vhd_toggle_video', {video_id:id, hide:hide?'1':'0'}, () => {
            const row = document.querySelector(`tr[data-id="${id}"]`);
            row.classList.toggle('vhd-hidden-row', hide);
        });
    }

    // Move video
    function vhdMoveVideo(id, cat) {
        vhdAjax('vhd_move_video', {video_id:id, category:cat}, () => {
            document.querySelector(`tr[data-id="${id}"]`).dataset.cat = cat;
            vhdFilterVideos();
        });
    }

    // Filter videos
    function vhdFilterVideos() {
        const f = document.getElementById('video-filter').value;
        let count = 0;
        document.querySelectorAll('#video-table tbody tr').forEach(row => {
            const show = f === 'all' || row.dataset.cat === f;
            row.style.display = show ? '' : 'none';
            if (show) count++;
        });
        document.getElementById('video-count').textContent = count + ' video';
    }

    // Toggle category visibility
    function vhdToggleCat(slug, visible) {
        VHD.cats[slug].visible = visible;
        vhdAjax('vhd_save_categories', {categories: JSON.stringify(VHD.cats)});
    }

    // Edit category
    function vhdEditCategory(slug) {
        const c = VHD.cats[slug] || {};
        document.getElementById('cat-modal-title').textContent = 'Edit danh mục';
        document.getElementById('cat-edit-slug').value = slug;
        document.getElementById('cat-edit-slug-input').value = slug;
        document.getElementById('cat-edit-slug-input').readOnly = true;
        document.getElementById('cat-edit-title').value = c.title || '';
        document.getElementById('cat-edit-desc').value = c.desc || '';
        document.getElementById('cat-edit-icon').value = c.icon || '';
        document.getElementById('cat-edit-color').value = c.color || '#3b82f6';
        document.getElementById('cat-edit-bg').value = c.bg || '#eff6ff';
        document.getElementById('cat-modal').style.display = '';
    }

    // Add category
    function vhdAddCategory() {
        document.getElementById('cat-modal-title').textContent = 'Add category';
        document.getElementById('cat-edit-slug').value = '';
        document.getElementById('cat-edit-slug-input').value = '';
        document.getElementById('cat-edit-slug-input').readOnly = false;
        document.getElementById('cat-edit-title').value = '';
        document.getElementById('cat-edit-desc').value = '';
        document.getElementById('cat-edit-icon').value = '';
        document.getElementById('cat-edit-color').value = '#3b82f6';
        document.getElementById('cat-edit-bg').value = '#eff6ff';
        document.getElementById('cat-modal').style.display = '';
    }

    // Save category
    function vhdSaveCategory() {
        let slug = document.getElementById('cat-edit-slug').value;
        const newSlug = document.getElementById('cat-edit-slug-input').value.trim();
        const title = document.getElementById('cat-edit-title').value.trim();
        if (!title) { alert('Please enter category name'); return; }

        if (!slug) {
            // New category
            slug = newSlug || title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            if (VHD.cats[slug]) { alert('Slug already exists!'); return; }
        }

        VHD.cats[slug] = {
            title: title,
            desc: document.getElementById('cat-edit-desc').value.trim(),
            icon: document.getElementById('cat-edit-icon').value.trim() || 'folder',
            color: document.getElementById('cat-edit-color').value,
            bg: document.getElementById('cat-edit-bg').value,
            visible: VHD.cats[slug]?.visible ?? true,
            order: VHD.cats[slug]?.order ?? Object.keys(VHD.cats).length,
        };

        vhdAjax('vhd_save_categories', {categories: JSON.stringify(VHD.cats)}, () => {
            location.reload();
        });
    }

    // Delete category
    function vhdDeleteCategory(slug) {
        if (!confirm('Delete danh mục "' + (VHD.cats[slug]?.title || slug) + '"?\nVideos in this category will not be displayed.')) return;
        vhdAjax('vhd_delete_category', {slug: slug}, () => location.reload());
    }

    // Close modal
    function vhdCloseModal() {
        document.getElementById('cat-modal').style.display = 'none';
    }

    // Clear cache
    function vhdClearCache() {
        vhdAjax('vhd_clear_cache', {}, () => {
            alert('Cache cleared! Page will reload.');
            location.reload();
        });
    }

    // Drag & drop reorder
    (function(){
        const tbody = document.querySelector('#cat-table tbody');
        if (!tbody) return;
        let dragRow = null;

        tbody.addEventListener('dragstart', e => {
            const row = e.target.closest('tr');
            if (!row) return;
            dragRow = row;
            row.classList.add('vhd-dragging');
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/plain', row.dataset.slug);
        });

        tbody.addEventListener('dragend', e => {
            if (dragRow) dragRow.classList.remove('vhd-dragging');
            tbody.querySelectorAll('tr').forEach(r => r.classList.remove('vhd-drag-over'));
            dragRow = null;
        });

        tbody.addEventListener('dragover', e => {
            e.preventDefault();
            e.dataTransfer.dropEffect = 'move';
            const row = e.target.closest('tr');
            tbody.querySelectorAll('tr').forEach(r => r.classList.remove('vhd-drag-over'));
            if (row && row !== dragRow) row.classList.add('vhd-drag-over');
        });

        tbody.addEventListener('drop', e => {
            e.preventDefault();
            const target = e.target.closest('tr');
            if (!target || !dragRow || target === dragRow) return;
            // Insert before or after
            const rows = [...tbody.querySelectorAll('tr')];
            const dragIdx = rows.indexOf(dragRow);
            const targetIdx = rows.indexOf(target);
            if (dragIdx < targetIdx) {
                target.after(dragRow);
            } else {
                target.before(dragRow);
            }
            // Save new order
            tbody.querySelectorAll('tr').forEach((r, i) => {
                const slug = r.dataset.slug;
                if (VHD.cats[slug]) VHD.cats[slug].order = i;
            });
            vhdAjax('vhd_save_categories', {categories: JSON.stringify(VHD.cats)});
        });
    })();

    // Drag & drop reorder videos
    (function(){
        const tbody = document.querySelector('#video-table tbody');
        if (!tbody) return;
        let dragRow = null;

        tbody.addEventListener('dragstart', e => {
            const row = e.target.closest('tr');
            if (!row) return;
            dragRow = row;
            row.classList.add('vhd-dragging');
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/plain', row.dataset.id);
        });

        tbody.addEventListener('dragend', e => {
            if (dragRow) dragRow.classList.remove('vhd-dragging');
            tbody.querySelectorAll('tr').forEach(r => r.classList.remove('vhd-drag-over'));
            dragRow = null;
        });

        tbody.addEventListener('dragover', e => {
            e.preventDefault();
            e.dataTransfer.dropEffect = 'move';
            const row = e.target.closest('tr');
            tbody.querySelectorAll('tr').forEach(r => r.classList.remove('vhd-drag-over'));
            if (row && row !== dragRow) row.classList.add('vhd-drag-over');
        });

        tbody.addEventListener('drop', e => {
            e.preventDefault();
            const target = e.target.closest('tr');
            if (!target || !dragRow || target === dragRow) return;
            const rows = [...tbody.querySelectorAll('tr')];
            const dragIdx = rows.indexOf(dragRow);
            const targetIdx = rows.indexOf(target);
            if (dragIdx < targetIdx) {
                target.after(dragRow);
            } else {
                target.before(dragRow);
            }
            // Save order for visible rows
            const order = {};
            tbody.querySelectorAll('tr').forEach((r, i) => {
                if (r.dataset.id) order[r.dataset.id] = i;
            });
            vhdAjax('vhd_save_video_order', {order: JSON.stringify(order)});
        });
    })();
    </script>
    <?php
}
