<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;
use WP_REST_Request;
use \WP_Query;

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
    bundle('editor')->enqueue();
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
        'warranty_navigation' => __('Warranty Navigation', 'sage'),
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
    register_extended_post_type('warranty', [
        'show_in_feed' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'has_archive'   => true,
        'archive' => [
            'nopaging' => true,
        ],
        'supports' => ['title', 'editor', 'excerpt', 'custom-fields'],
    ], [
        'singular' => 'Warranty',
        'plural'   => 'Warranties',
        'slug'     => 'warranty',
    ]);
    register_extended_post_type('price', [
        'show_in_feed' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'has_archive'   => true,
        'archive' => [
            'nopaging' => true,
        ],
        'supports' => ['title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'],
    ], [
        'singular' => 'Bảng giá',
        'plural'   => 'Price',
        'slug'     => 'price',
    ]);
      register_post_type('docs', [
        'show_in_feed' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'label' => 'Tài liệu',
        'public' => true,
        'has_archive' => true,// <-- Cần có
         'archive' => [
            'nopaging' => true,
        ], 
        'supports' => ['title', 'editor', 'excerpt'],
        'taxonomies' => ['doc_category'],
    ], [
        'singular' => 'Tài liệu',
        'plural'   => 'Tài liệu',
        'slug'     => 'tai-lieu',
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
     register_taxonomy('doc_category', 'docs', [
        'labels' => [
            'name'              => 'Chuyên mục tài liệu',
            'singular_name'     => 'Chuyên mục',
            'search_items'      => 'Tìm chuyên mục',
            'all_items'         => 'Tất cả',
            'edit_item'         => 'Chỉnh sửa',
            'update_item'       => 'Cập nhật',
            'add_new_item'      => 'Thêm mới',
            'new_item_name'     => 'Tên mới',
            'menu_name'         => 'Chuyên mục tài liệu',
        ],
        'hierarchical' => true, // như category
        'show_ui'      => true,
        'show_in_rest' => true,
        'rewrite'      => ['slug' => 'chuyen-muc-tai-lieu'],
    ]);
  
});
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/filter-docs', [
        'methods' => 'GET',
        'callback' => function (WP_REST_Request $req) {
            $cat   = sanitize_text_field($req->get_param('category'));
            $q     = sanitize_text_field($req->get_param('query'));
            $paged = max(1, intval($req->get_param('paged')));
 
            $args = [
                'post_type'      => 'docs',
                'posts_per_page' => 20,
                'paged'          => $paged,
                's'              => $q,
            ];
 
            if ($cat && $cat !== 'all') {
                $args['tax_query'] = [[
                    'taxonomy' => 'doc_category',
                    'field'    => 'slug',
                    'terms'    => $cat,
                ]];
            }
 
            $query = new WP_Query($args);
            $results = [];
 
            while ($query->have_posts()) {
                $query->the_post();
                $results[] = [
                    'title' => get_the_title(),
                    'link' => get_permalink(),
                    'excerpt' => get_the_excerpt(),
                ];
            }
 
            wp_reset_postdata();
 
            return [
                'items' => $results,
                'has_more' => $query->max_num_pages > $paged,
            ];
        },
        'permission_callback' => '__return_true',
    ]);
    register_rest_route('custom/v1', '/recent-docs', [
        'methods' => 'GET',
        'callback' => 'get_recent_docs_by_category',
        'permission_callback' => '__return_true',
    ]);
});
 
function get_recent_docs_by_category(WP_REST_Request $request)
{
    $slug = sanitize_text_field($request->get_param('category'));
 
    $args = [
        'post_type' => 'docs',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => [[
            'taxonomy' => 'doc_category',
            'field' => 'slug',
            'terms' => $slug,
        ]]
    ];
 
    $query = new WP_Query($args);
    $results = [];
 
    while ($query->have_posts()) {
        $query->the_post();
        $results[] = [
            'title' => get_the_title(),
            'link' => get_permalink(),
        ];
    }
 
    wp_reset_postdata();
    return $results;
}

add_action('save_post_lab_logo', function () {
    delete_transient('lab_logo_html');
});