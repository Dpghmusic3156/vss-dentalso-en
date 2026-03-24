<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    try {
        bundle('editor')->enqueue();
    } catch (\Throwable $th) {
        // Ignored
    }
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'dentallab_navigation' => __('Dental Lab Navigation', 'sage'),
        'dentalclinic_navigation' => __('Dental Clinic Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});

/*** Customizer */
add_action('customize_register', function ($wp_customize) {
    $wp_customize->add_setting('logo');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label' => 'Logo',
                'section' => 'title_tagline',
                'settings' => 'logo'
            )
        )
    );
    $wp_customize->add_setting('logo_full');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'logo_full',
            array(
                'label' => 'Logo Full',
                'section' => 'title_tagline',
                'settings' => 'logo_full'
            )
        )
    );

    $wp_customize->add_setting('address');
    $wp_customize->add_control(
        'address',
        array(
            'label' => 'Địa chỉ',
            'section' => 'title_tagline',
            'settings' => 'address',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('address_us');
    $wp_customize->add_control(
        'address_us',
        array(
            'label' => 'Địa chỉ (US)',
            'section' => 'title_tagline',
            'settings' => 'address_us',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('phone');
    $wp_customize->add_control(
        'phone',
        array(
            'label' => 'Điện thoại',
            'section' => 'title_tagline',
            'settings' => 'phone',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('phoneus');
    $wp_customize->add_control(
        'phoneus',
        array(
            'label' => 'Điện thoại Mỹ',
            'section' => 'title_tagline',
            'settings' => 'phoneus',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('email1');
    $wp_customize->add_control(
        'email1',
        array(
            'label' => 'Email 1',
            'section' => 'title_tagline',
            'settings' => 'email1',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('email2');
    $wp_customize->add_control(
        'email2',
        array(
            'label' => 'Email 2',
            'section' => 'title_tagline',
            'settings' => 'email2',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('facebook');
    $wp_customize->add_control(
        'facebook',
        array(
            'label' => 'Facebook',
            'section' => 'title_tagline',
            'settings' => 'facebook',
            'type' => 'text',
        )
    );

    $wp_customize->add_panel('panel_trang_chu', array(
        'capability'     => 'edit_theme_options',
        'title'          => 'Trang chủ',
    ));
    $wp_customize->add_section('banner', array(
        'title' => __('Banner', 'customizer_homepage_options_section'),
        'panel' => 'panel_trang_chu',
    ));
    $wp_customize->add_setting('trang_chu.banner.hinh_1');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'trang_chu.banner.hinh_1',
            array(
                'label' => 'Hình banner 1',
                'section' => 'banner',
                'settings' => 'trang_chu.banner.hinh_1'
            )
        )
    );
    $wp_customize->add_setting('trang_chu.banner.hinhnen_1');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'trang_chu.banner.hinhnen_1',
            array(
                'label' => 'Hình nền 1',
                'section' => 'banner',
                'settings' => 'trang_chu.banner.hinhnen_1'
            )
        )
    );
    $wp_customize->add_setting('trang_chu.banner.title1');
    $wp_customize->add_control(
        'trang_chu.banner.title1',
        array(
            'label' => 'Tiêu đề 1',
            'section' => 'banner',
            'settings' => 'trang_chu.banner.title1',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('trang_chu.banner.content1');
    $wp_customize->add_control(
        'trang_chu.banner.content1',
        array(
            'label' => 'Nội dung 1',
            'section' => 'banner',
            'settings' => 'trang_chu.banner.content1',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('trang_chu.banner.hinh_2');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'trang_chu.banner.hinh_2',
            array(
                'label' => 'Hình banner 2',
                'section' => 'banner',
                'settings' => 'trang_chu.banner.hinh_2'
            )
        )
    );
    $wp_customize->add_setting('trang_chu.banner.hinhnen_2');
    $wp_customize->add_control(
        new \WP_Customize_Image_Control(
            $wp_customize,
            'trang_chu.banner.hinhnen_2',
            array(
                'label' => 'Hình nền 2',
                'section' => 'banner',
                'settings' => 'trang_chu.banner.hinhnen_2'
            )
        )
    );
    $wp_customize->add_setting('trang_chu.banner.title2');
    $wp_customize->add_control(
        'trang_chu.banner.title2',
        array(
            'label' => 'Tiêu đề 2',
            'section' => 'banner',
            'settings' => 'trang_chu.banner.title2',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting('trang_chu.banner.content2');
    $wp_customize->add_control(
        'trang_chu.banner.content2',
        array(
            'label' => 'Nội dung 2',
            'section' => 'banner',
            'settings' => 'trang_chu.banner.content2',
            'type' => 'text',
        )
    );
});

add_action('init', function () {
    register_extended_post_type('lab_logo', [
        'show_in_feed' => true,
        'archive' => [
            'nopaging' => true,
        ],
        'supports' => ['title', 'thumbnail', 'custom-fields'],
    ], [
        'singular' => 'Lab Logo',
        'plural'   => 'Labs Logo',
        'slug'     => 'labs-logo',

    ]);
    register_extended_post_type('customer', [
        'show_in_feed' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'has_archive'   => true,
        'archive' => [
            'nopaging' => true,
        ],
        'supports' => ['title', 'thumbnail', 'custom-fields'],
    ], [
        'singular' => 'Customer',
        'plural'   => 'Customers',
        'slug'     => 'customer',

    ]);
    register_extended_taxonomy('genre', 'story', [

        # Use radio buttons in the meta box for this taxonomy on the post editing screen:
        'meta_box' => 'radio',
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        # Add a custom column to the admin screen:
        'admin_cols' => [
            'updated' => [
                'title_cb'    => function () {
                    return '<em>Last</em> Updated';
                },
                'meta_key'    => 'updated_date',
                'date_format' => 'd/m/Y'
            ],
        ],

    ]);
});
