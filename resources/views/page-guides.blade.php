@extends('layouts.app')

@section('content')

@php
$all_videos = \App\vhd_get_videos_with_overrides();
$hidden_ids = \App\vhd_get_hidden_videos();

// Lọc bỏ video bị ẩn
$videos = array_filter($all_videos, fn($v) => !($v['hidden'] ?? false));
$videos = array_values($videos);

// Đọc URL params
$active_category = get_query_var('vhd_category', '');
$active_video_slug = get_query_var('vhd_video', '');

// Trang gốc video-huong-dan
$base_url = home_url('video-huong-dan');

// Lấy danh mục từ admin (chỉ hiện các danh mục visible)
$all_categories = \App\vhd_get_categories();
$categories = array_filter($all_categories, fn($c) => ($c['visible'] ?? true));
uasort($categories, fn($a,$b) => ($a['order']??0) - ($b['order']??0));

// Đếm video theo danh mục + tạo slug map
$category_counts = [];
$video_slugs = [];
foreach ($videos as &$v) {
    $cat = $v['category'] ?? 'quan-ly-chung';
    if (!isset($categories[$cat])) continue; // Bỏ video thuộc danh mục bị ẩn
    $category_counts[$cat] = ($category_counts[$cat] ?? 0) + 1;
    $slug = \App\dentalso_vn_slug($v['title']);
    $v['slug'] = $slug;
    $v['url'] = $base_url . '/' . $cat . '/' . $slug . '/';
    $video_slugs[$slug] = $v;
}
unset($v);

// Tìm video đang active (nếu có)
$active_video = null;
$is_category_view = !empty($active_category) && isset($categories[$active_category]);
$is_video_view = $is_category_view && !empty($active_video_slug) && isset($video_slugs[$active_video_slug]);
if ($is_video_view) {
    $active_video = $video_slugs[$active_video_slug];
}
@endphp

@if(!$is_category_view)
{{-- ============ TRANG CHÍNH: CATEGORY CARDS ============ --}}

<section class="vhd-hero">
    <div class="apple-container">
        <div class="fade-in-up">
            <h1 class="vhd-hero__title">Video Hướng Dẫn</h1>
            <p class="vhd-hero__subtitle">Tổng hợp các video hướng dẫn sử dụng DentalSO — từ cài đặt ban đầu đến vận hành nâng cao.</p>
        </div>
    </div>
</section>

<section class="vhd-categories">
    <div class="apple-container">
        <div class="vhd-categories__grid">
            @foreach($categories as $slug => $cat)
            @if(($category_counts[$slug] ?? 0) > 0)
            <a href="{{ $base_url }}/{{ $slug }}/" class="vhd-cat-card fade-in-up">
                <div class="vhd-cat-card__visual" style="background: {{ $cat['bg'] }};">
                    <div class="vhd-cat-card__decor" style="background: {{ $cat['color'] }}20;"></div>
                    <div class="vhd-cat-card__icon-wrap" style="background: {{ $cat['color'] }};">
                        <span class="material-symbols-outlined">{{ $cat['icon'] }}</span>
                    </div>
                    <span class="vhd-cat-card__count" style="color: {{ $cat['color'] }};">{{ $category_counts[$slug] ?? 0 }} video</span>
                </div>
                <div class="vhd-cat-card__body">
                    <h3 class="vhd-cat-card__title">{{ $cat['title'] }}</h3>
                    <p class="vhd-cat-card__desc">{{ $cat['desc'] }}</p>
                </div>
            </a>
            @endif
            @endforeach
        </div>
    </div>
</section>

@else
{{-- ============ TRANG DANH MỤC: VIDEO LIST ============ --}}

@php $cat_info = $categories[$active_category]; @endphp

<section class="vhd-videos">
    <div class="apple-container">
        <div class="vhd-videos__header fade-in-up">
            <a href="{{ $base_url }}/" class="vhd-back-btn">
                <span class="material-symbols-outlined">arrow_back</span>
                All danh mục
            </a>
            <div class="vhd-videos__title-row">
                <div class="vhd-videos__icon" style="background: {{ $cat_info['color'] }};">
                    <span class="material-symbols-outlined">{{ $cat_info['icon'] }}</span>
                </div>
                <div>
                    <h1 class="vhd-videos__title">{{ $cat_info['title'] }}</h1>
                    <p class="vhd-videos__count">{{ $category_counts[$active_category] ?? 0 }} video</p>
                </div>
            </div>
        </div>

        <div class="vhd-videos__list">
            @foreach($videos as $index => $video)
            @if($video['category'] === $active_category)
            <a href="{{ $video['url'] }}" class="vhd-video-item fade-in-up" data-video-id="{{ $video['id'] }}">
                <div class="vhd-video-item__thumb">
                    <img src="https://img.youtube.com/vi/{{ $video['id'] }}/hqdefault.jpg" alt="{{ $video['title'] }}" loading="lazy">
                    <div class="vhd-video-item__play">
                        <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="8,5 19,12 8,19"/></svg>
                    </div>
                </div>
                <div class="vhd-video-item__info">
                    <h3 class="vhd-video-item__title">{{ $video['title'] }}</h3>
                    <p class="vhd-video-item__desc">{{ $video['desc'] }}</p>
                    <span class="vhd-video-item__link">
                        <span class="material-symbols-outlined">link</span>
                        Sao chép link
                    </span>
                </div>
            </a>
            @endif
            @endforeach
        </div>
    </div>
</section>

@endif

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">Cần hỗ trợ thêm?</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">Đội ngũ DentalSO luôn sẵn sàng hỗ trợ bạn. Đặt lịch demo hoặc liên hệ trực tiếp để được tư vấn.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary apple-cta-primary--light">Đăng ký Demo</a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary apple-cta-secondary--light">Liên hệ<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Video Modal --}}
<div id="video-modal" class="vhd-modal" style="display:none;">
    <div class="vhd-modal__backdrop"></div>
    <div class="vhd-modal__content">
        <button class="vhd-modal__close" id="modal-close">
            <span class="material-symbols-outlined">close</span>
        </button>
        <div class="vhd-modal__player">
            <iframe id="modal-iframe" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>

{{-- Copy toast --}}
<div id="copy-toast" class="vhd-toast">Link đã được sao chép!</div>

<style>
/* ===========================
   VIDEO HUONG DAN - REDESIGN
   =========================== */

/* Hero */
.vhd-hero {
    padding: 80px 0 40px;
    background: #fff;
}
.vhd-hero__title {
    font-size: clamp(2rem, 5vw, 3.2rem);
    font-weight: 700;
    color: #1d1d1f;
    letter-spacing: -0.02em;
    margin-bottom: 12px;
}
.vhd-hero__subtitle {
    font-size: 1.125rem;
    color: #86868b;
    max-width: 560px;
    line-height: 1.6;
}

/* Category Cards Grid */
.vhd-categories {
    padding: 20px 0 80px;
    background: #fff;
}
.vhd-categories__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}
@media (max-width: 960px) {
    .vhd-categories__grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
    .vhd-categories__grid { grid-template-columns: 1fr; }
}

/* Category Card */
.vhd-cat-card {
    display: block;
    border-radius: 16px;
    overflow: hidden;
    background: #fff;
    border: 1px solid #f0f0f0;
    text-decoration: none;
    transition: box-shadow 0.3s ease, transform 0.25s ease;
}
.vhd-cat-card:hover {
    box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    transform: translateY(-3px);
}
.vhd-cat-card__visual {
    position: relative;
    padding: 32px 28px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    min-height: 140px;
    overflow: hidden;
}
.vhd-cat-card__decor {
    position: absolute;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    top: -30px;
    right: -20px;
}
.vhd-cat-card__icon-wrap {
    width: 52px;
    height: 52px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    flex-shrink: 0;
    position: relative;
    z-index: 1;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.vhd-cat-card__icon-wrap .material-symbols-outlined { font-size: 28px; }
.vhd-cat-card__count {
    font-size: 0.8rem;
    font-weight: 600;
    position: relative;
    z-index: 1;
    padding: 4px 12px;
    border-radius: 20px;
    background: #fff;
}
.vhd-cat-card__body { padding: 20px 24px 24px; }
.vhd-cat-card__title {
    font-size: 1.05rem;
    font-weight: 600;
    color: #1d1d1f;
    margin-bottom: 6px;
}
.vhd-cat-card__desc {
    font-size: 0.875rem;
    color: #86868b;
    line-height: 1.55;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Videos Section */
.vhd-videos {
    padding: 40px 0 80px;
    background: #fff;
    min-height: 50vh;
}
.vhd-videos__header { margin-bottom: 40px; }
.vhd-back-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.9rem;
    font-weight: 500;
    color: #0071e3;
    background: none;
    border: none;
    cursor: pointer;
    padding: 0;
    margin-bottom: 20px;
    transition: opacity 0.2s;
    text-decoration: none;
}
.vhd-back-btn:hover { opacity: 0.7; }
.vhd-back-btn .material-symbols-outlined { font-size: 20px; }
.vhd-videos__title-row {
    display: flex;
    align-items: center;
    gap: 16px;
}
.vhd-videos__icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    flex-shrink: 0;
}
.vhd-videos__icon .material-symbols-outlined { font-size: 26px; }
.vhd-videos__title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1d1d1f;
}
.vhd-videos__count {
    font-size: 0.875rem;
    color: #86868b;
    margin-top: 2px;
}

/* Video List */
.vhd-videos__list {
    display: flex;
    flex-direction: column;
    gap: 1px;
    background: #f0f0f0;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #f0f0f0;
}

/* Video List Item */
.vhd-video-item {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 16px 20px;
    background: #fff;
    text-decoration: none;
    transition: background 0.2s;
}
.vhd-video-item:hover {
    background: #f9f9fb;
}
.vhd-video-item__thumb {
    position: relative;
    width: 180px;
    min-width: 180px;
    aspect-ratio: 16/9;
    border-radius: 10px;
    overflow: hidden;
}
.vhd-video-item__thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}
.vhd-video-item:hover .vhd-video-item__thumb img {
    transform: scale(1.05);
}
.vhd-video-item__play {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0,0,0,0.1);
    opacity: 0;
    transition: opacity 0.25s;
}
.vhd-video-item:hover .vhd-video-item__play {
    opacity: 1;
}
.vhd-video-item__play svg {
    width: 22px;
    height: 22px;
    color: #fff;
    padding: 10px;
    background: rgba(0,0,0,0.65);
    border-radius: 50%;
    box-sizing: content-box;
}
.vhd-video-item__info {
    flex: 1;
    min-width: 0;
}
.vhd-video-item__title {
    font-size: 0.95rem;
    font-weight: 600;
    color: #1d1d1f;
    margin-bottom: 4px;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.vhd-video-item__desc {
    font-size: 0.82rem;
    color: #86868b;
    line-height: 1.45;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.vhd-video-item__link {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    margin-top: 6px;
    font-size: 0.78rem;
    font-weight: 500;
    color: #0071e3;
    cursor: pointer;
    transition: opacity 0.2s;
}
.vhd-video-item__link:hover { opacity: 0.7; }
.vhd-video-item__link .material-symbols-outlined { font-size: 16px; }
@media (max-width: 600px) {
    .vhd-video-item { gap: 14px; padding: 12px 14px; }
    .vhd-video-item__thumb { width: 120px; min-width: 120px; }
    .vhd-video-item__title { font-size: 0.88rem; }
    .vhd-video-item__desc { display: none; }
}

/* Modal */
.vhd-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 16px;
}
.vhd-modal__backdrop {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.8);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}
.vhd-modal__content {
    position: relative;
    width: 100%;
    max-width: 900px;
}
.vhd-modal__close {
    position: absolute;
    top: -48px;
    right: 0;
    color: rgba(255,255,255,0.7);
    background: none;
    border: none;
    cursor: pointer;
    padding: 4px;
    transition: color 0.2s;
}
.vhd-modal__close:hover { color: #fff; }
.vhd-modal__close .material-symbols-outlined { font-size: 32px; }
.vhd-modal__player {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    background: #000;
    aspect-ratio: 16/9;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5);
}
.vhd-modal__player iframe {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
}

/* Toast */
.vhd-toast {
    position: fixed;
    bottom: 32px;
    left: 50%;
    transform: translateX(-50%) translateY(80px);
    background: #1d1d1f;
    color: #fff;
    padding: 12px 24px;
    border-radius: 12px;
    font-size: 0.875rem;
    font-weight: 500;
    z-index: 10000;
    opacity: 0;
    transition: transform 0.3s ease, opacity 0.3s ease;
    pointer-events: none;
}
.vhd-toast.is-visible {
    transform: translateX(-50%) translateY(0);
    opacity: 1;
}

/* Animations */
.fade-in-up {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}
.fade-in-up.is-visible {
    opacity: 1;
    transform: translateY(0);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('is-visible'); observer.unobserve(e.target); }
        });
    }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));

    // Video modal
    const modal = document.getElementById('video-modal');
    const modalIframe = document.getElementById('modal-iframe');
    const modalClose = document.getElementById('modal-close');
    const toast = document.getElementById('copy-toast');

    function openModal(videoId) {
        modalIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.style.display = 'none';
        modalIframe.src = '';
        document.body.style.overflow = '';
    }

    // Video item click: play video, copy link
    document.querySelectorAll('.vhd-video-item').forEach(item => {
        // Click thumbnail → open modal
        const thumb = item.querySelector('.vhd-video-item__thumb');
        if (thumb) {
            thumb.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                openModal(item.dataset.videoId);
            });
        }

        // Click "Sao chép link"
        const linkBtn = item.querySelector('.vhd-video-item__link');
        if (linkBtn) {
            linkBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const url = item.getAttribute('href');
                navigator.clipboard.writeText(url).then(() => {
                    toast.classList.add('is-visible');
                    setTimeout(() => toast.classList.remove('is-visible'), 2000);
                });
            });
        }
    });

    // Auto-open video if URL has video slug
    @if($is_video_view && $active_video)
    openModal('{{ $active_video['id'] }}');
    @endif

    // Modal close
    if (modalClose) modalClose.addEventListener('click', closeModal);
    const backdrop = document.querySelector('.vhd-modal__backdrop');
    if (backdrop) backdrop.addEventListener('click', closeModal);
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeModal(); });
});
</script>

@endsection
