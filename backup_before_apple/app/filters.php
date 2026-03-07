<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter("wp_nav_menu_objects", __NAMESPACE__ . '\\submenu_limit', 10, 2);
add_filter('single_template', function ($template) {
    if (is_singular('doc')) {
        if (\Roots\view()->exists('single-doc')) {
            return \Roots\view('single-doc')->templatePath();
        }
    }
    return $template;
});
function submenu_limit($items, $args)
{
    if (empty($args->submenu)) {
        return $items;
    }
    $ids       = wp_filter_object_list($items, array('title' => $args->submenu), 'and', 'ID');
    $parent_id = array_pop($ids);
    $children  = submenu_get_children_ids($parent_id, $items);
    foreach ($items as $key => $item) {
        if (! in_array($item->ID, $children)) {
            unset($items[$key]);
        }
    }
    return $items;
}

function submenu_get_children_ids($id, $items)
{
    $ids = wp_filter_object_list($items, array('menu_item_parent' => $id), 'and', 'ID');
    foreach ($ids as $id) {
        $ids = array_merge($ids, submenu_get_children_ids($id, $items));
    }
    return $ids;
}


/**
 * Render menu có cache (header/footer dùng chung)
 *
 * @param array $args
 * @return string
 */
function get_cached_menu($args = []) {
    // Tạo key cache dựa vào theme_location
    $location = isset($args['theme_location']) ? $args['theme_location'] : 'default';
    $cache_key = 'menu_cache_' . $location;

    // Thử lấy menu từ cache
    $menu_html = wp_cache_get($cache_key, 'menus');

    if ($menu_html === false) {
        ob_start();
        wp_nav_menu($args);
        $menu_html = ob_get_clean();

        // Lưu vào cache 1 giờ (3600s)
        wp_cache_set($cache_key, $menu_html, 'menus', 3600);
    }

    return $menu_html;
}
// Hàm lấy menu HTML từ cache
function get_cached_nav_menu($location) {
    $cache_key = 'nav_menu_html_' . $location;
    $menu_html = get_transient($cache_key);

    if ($menu_html === false) {
        // Build menu HTML lần đầu
        $menu_html = wp_nav_menu([
            'theme_location' => $location,
            'echo'           => false,
            'container'      => false,
            'items_wrap'     => '<ul id="%1$s" class="%2$s items-center text-sm xl:text-base xl:space-x-8 h-12 px-8">%3$s</ul>',
        ]);

        // Cache 12 tiếng
        set_transient($cache_key, $menu_html, 12 * HOUR_IN_SECONDS);
    }

    return $menu_html;
}