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
 * Filter the document title for the front page to be exact and clean.
 */
add_filter('pre_get_document_title', function ($title) {
    if (is_front_page()) {
        return 'DentalSO: The Complete Dental Lab Software Ecosystem for Streamlined Operations';
    }
    return $title;
});
