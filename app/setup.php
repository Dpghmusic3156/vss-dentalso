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
 * Remove X-Powered-By header for security.
 */
add_action('wp_headers', function ($headers) {
    unset($headers['X-Powered-By']);
    return $headers;
});

add_action('init', function () {
    header_remove('X-Powered-By');
});

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
        'has_archive' => true, // <-- Cần có
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

/**
 * Shortcode [dentalso_form] - Embed consultation form in any post/page.
 * Usage: [dentalso_form title="Đặt lịch Demo" button="Đăng Ký Demo"]
 */
add_shortcode('dentalso_form', function ($atts) {
    $atts = shortcode_atts([
        'title'  => 'Đăng Ký Tư Vấn',
        'button' => 'Gửi yêu cầu',
        'desc'   => 'Chúng tôi sẽ phản hồi trong vòng 1 ngày làm việc.',
    ], $atts);

    $unique_id = 'dsForm_' . wp_rand(1000, 9999);
    $redirect_url = home_url('/cam-on/');

    ob_start();
    ?>
    <div class="bg-[#f5f5f7] rounded-3xl p-8 lg:p-10 my-8" id="<?php echo $unique_id; ?>_wrapper">
        <div id="<?php echo $unique_id; ?>">
            <h3 class="text-2xl font-semibold mb-2"><?php echo esc_html($atts['title']); ?></h3>
            <p class="text-[#86868b] mb-6"><?php echo esc_html($atts['desc']); ?></p>
            <form action="javascript:void(0);" method="POST" class="space-y-5" autocomplete="off" id="<?php echo $unique_id; ?>_form">
                <div class="grid sm:grid-cols-2 gap-5">
                    <input type="text" class="apple-input" name="name" placeholder="Họ tên" required>
                    <input type="text" class="apple-input" name="company" placeholder="Công ty / Labo" required>
                </div>
                <div class="grid sm:grid-cols-2 gap-5">
                    <input type="text" class="apple-input" name="phone" placeholder="Số điện thoại" required oninput="this.value = this.value.replace(/[^0-9+]/g, '')">
                    <input type="email" class="apple-input" name="email" placeholder="Email">
                </div>
                <select class="apple-input" name="product">
                    <option selected disabled>Chọn sản phẩm</option>
                    <option value="Quản lý Labo nha khoa">Quản lý Labo nha khoa</option>
                    <option value="Quản lý sản xuất (MES)">Quản lý sản xuất (MES)</option>
                    <option value="Kết nối Labo - Nha khoa">Kết nối Labo - Nha khoa</option>
                    <option value="Quản lý bảo hành">Quản lý bảo hành</option>
                </select>
                <textarea class="apple-input" name="message" placeholder="Mô tả nhu cầu của bạn" rows="4" required></textarea>
                <div>
                    <div class="<?php echo $unique_id; ?>_loading hidden text-[#0071e3]">Đang gửi...</div>
                    <div class="<?php echo $unique_id; ?>_error hidden text-[#ff453a]">Không thể gửi. Vui lòng thử lại.</div>
                </div>
                <button class="apple-cta-primary w-full sm:w-auto" type="submit">
                    <?php echo esc_html($atts['button']); ?>
                </button>
            </form>
        </div>
        <div class="<?php echo $unique_id; ?>_success hidden text-center py-12">
            <span class="material-symbols-outlined text-[#30d158] text-5xl mb-4">check_circle</span>
            <p class="text-xl font-semibold text-[#1d1d1f] mb-2">Đã nhận yêu cầu!</p>
            <p class="text-[#86868b]">Chúng tôi sẽ liên hệ bạn sớm nhất.</p>
        </div>
    </div>
    <script>
    (function(){
        var form = document.getElementById('<?php echo $unique_id; ?>_form');
        if (!form) return;
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var name = form.querySelector('[name="name"]').value.trim();
            var phone = form.querySelector('[name="phone"]').value.trim();
            var email = form.querySelector('[name="email"]').value.trim();
            var message = form.querySelector('[name="message"]').value.trim();
            var product = form.querySelector('[name="product"]').value;
            var company = form.querySelector('[name="company"]').value.trim();

            if (!name) { alert('Vui lòng nhập họ tên'); return; }
            if (!phone) { alert('Vui lòng nhập số điện thoại'); return; }
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email && !emailRegex.test(email)) { alert('Vui lòng nhập email hợp lệ'); return; }
            if (!message) { alert('Vui lòng nhập nội dung'); return; }

            var data = { name: name, phone: phone, email: email, message: message, url: window.location.href };
            if (company) data.company = company;
            var note = "Tên: " + name + "\nCông ty: " + company + "\nĐiện thoại: " + phone + "\nEmail: " + email;
            if (product) { data.product = product; note += "\nSản phẩm: " + product; }
            note += "\nTin nhắn:\n" + message;
            data.note = note;
            if (email) data.el = email.length;

            var loading = document.querySelector('.<?php echo $unique_id; ?>_loading');
            var error = document.querySelector('.<?php echo $unique_id; ?>_error');
            var success = document.querySelector('.<?php echo $unique_id; ?>_success');
            loading.classList.remove('hidden');
            error.classList.add('hidden');

            fetch('https://sapi.dentalso.com/api/v1/public/callme', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            })
            .then(function(res) { return res.json(); })
            .then(function() {
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({ 'event': 'form_submission_success', 'form_type': 'shortcode_form', 'page_language': 'vi' });
                loading.classList.add('hidden');
                document.getElementById('<?php echo $unique_id; ?>').classList.add('hidden');
                success.classList.remove('hidden');
            })
            .catch(function() {
                loading.classList.add('hidden');
                error.classList.remove('hidden');
            });
        });
    })();
    </script>
    <?php
    return ob_get_clean();
});
