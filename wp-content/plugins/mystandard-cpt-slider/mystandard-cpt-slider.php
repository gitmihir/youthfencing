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
function standard_post_type_for_slider()
{
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

function standard_post_type_for_team()
{
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
        'name' => _x('Team Member', 'plural'),
        'singular_name' => _x('Team Member', 'singular'),
        'menu_name' => _x('Team Member', 'admin menu'),
        'name_admin_bar' => _x('Team Member', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Team Member'),
        'new_item' => __('New Team Member'),
        'edit_item' => __('Edit Team Member'),
        'view_item' => __('View Team Member'),
        'all_items' => __('All Team Member'),
        'search_items' => __('Search Team Member'),
        'not_found' => __('No Team Member found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'menu_position' => 99,
        'menu_icon' => 'dashicons-images-alt2',
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'team-member'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('team-member', $args);
}

add_action('init', 'standard_post_type_for_team');

function standard_post_type_for_pledge_form_data()
{
    $supports = array(
        'title',
        'editor',
        'custom-fields',
    );
    $labels = array(
        'name' => _x('Pledge', 'plural'),
        'singular_name' => _x('Pledge', 'singular'),
        'menu_name' => _x('Pledge', 'admin menu'),
        'name_admin_bar' => _x('Pledge', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Pledge'),
        'new_item' => __('New Pledge'),
        'edit_item' => __('Edit Pledge'),
        'view_item' => __('View Pledge'),
        'all_items' => __('All Pledge'),
        'search_items' => __('Search Pledge'),
        'not_found' => __('No Pledge found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'menu_position' => 99,
        'menu_icon' => 'dashicons-images-alt2',
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'pledge-form-data'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('pledge-form-data', $args);
}

add_action('init', 'standard_post_type_for_pledge_form_data');

add_filter('acf/settings/remove_wp_meta_box', '__return_false');
/* Custom Post type end */