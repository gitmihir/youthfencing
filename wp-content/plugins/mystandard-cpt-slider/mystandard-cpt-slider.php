<?php

/*
  Plugin Name: My Standard Custom Post Type For Slider
  Plugin URI: http://www.imihir.com/
  description: a plugin includes various common custom post types like slider, features and many more
  Version: 1.2
  Author: Mihir
  Author URI: http://www.imihir.com/
  License: GPL2
 */

/**
 * Custom Post Types
 */
function standard_post_type_for_slider() {
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'comments',
        'revisions',
        'post-formats',
    );
    $labels = array(
        'name' => _x('Slide', 'plural'),
        'singular_name' => _x('Slide', 'singular'),
        'menu_name' => _x('Slide', 'admin menu'),
        'name_admin_bar' => _x('Slide', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Slide'),
        'new_item' => __('New Slide'),
        'edit_item' => __('Edit Slide'),
        'view_item' => __('View Slide'),
        'all_items' => __('All Slide'),
        'search_items' => __('Search Slide'),
        'not_found' => __('No Slide found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'menu_position' => 99,
        'menu_icon' => 'dashicons-images-alt2',
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'standard_slider'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('standard_slider', $args);
}

add_action('init', 'standard_post_type_for_slider');




/* Custom Post type end */