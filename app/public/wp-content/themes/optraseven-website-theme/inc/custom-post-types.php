<?php
/**
 * Register Custom Post Types for Optraseven Theme
 */

function optraseven_register_custom_post_types() {

    // ===== Service =====
    register_post_type('service', [
        'labels' => [
            'name'               => __('Services', 'optraseven'),
            'singular_name'      => __('Service', 'optraseven'),
            'menu_name'          => __('Services', 'optraseven'),
            'add_new'            => __('Add New', 'optraseven'),
            'add_new_item'       => __('Add New Service', 'optraseven'),
            'edit_item'          => __('Edit Service', 'optraseven'),
            'new_item'           => __('New Service', 'optraseven'),
            'view_item'          => __('View Service', 'optraseven'),
            'search_items'       => __('Search Services', 'optraseven'),
            'not_found'          => __('No Services Found', 'optraseven'),
            'not_found_in_trash' => __('No Services Found in Trash', 'optraseven'),
        ],
        'description'   => 'For service showcase page',
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-admin-tools',
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'post-formats'],
//        'taxonomies'    => ['category', 'post_tag'],
        'rewrite'       => ['slug' => 'services', 'with_front' => true],
        'show_in_rest'  => true,
        'show_in_nav_menus' => true,
    ]);

    // ===== Portfolio =====
    register_post_type('portfolio', [
        'labels' => [
            'name'               => __('Portfolio', 'optraseven'),
            'singular_name'      => __('Portfolio Item', 'optraseven'),
            'menu_name'          => __('Portfolio', 'optraseven'),
            'add_new'            => __('Add New', 'optraseven'),
            'add_new_item'       => __('Add New Portfolio Item', 'optraseven'),
            'edit_item'          => __('Edit Portfolio Item', 'optraseven'),
            'new_item'           => __('New Portfolio Item', 'optraseven'),
            'view_item'          => __('View Portfolio Item', 'optraseven'),
            'search_items'       => __('Search Portfolio', 'optraseven'),
            'not_found'          => __('No Portfolio Items Found', 'optraseven'),
            'not_found_in_trash' => __('No Portfolio Items Found in Trash', 'optraseven'),
        ],
        'description'   => 'For portfolio showcase page',
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-portfolio',
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'post-formats'],
//        'taxonomies'    => ['category', 'post_tag'],
        'rewrite'       => ['slug' => 'portfolio', 'with_front' => true],
        'show_in_rest'  => true,
        'show_in_nav_menus' => true,
    ]);

    // ===== Case Study =====
    register_post_type('case-study', [
        'labels' => [
            'name'               => __('Case Studies', 'optraseven'),
            'singular_name'      => __('Case Study', 'optraseven'),
            'menu_name'          => __('Case Studies', 'optraseven'),
            'add_new'            => __('Add New', 'optraseven'),
            'add_new_item'       => __('Add New Case Study', 'optraseven'),
            'edit_item'          => __('Edit Case Study', 'optraseven'),
            'new_item'           => __('New Case Study', 'optraseven'),
            'view_item'          => __('View Case Study', 'optraseven'),
            'search_items'       => __('Search Case Studies', 'optraseven'),
            'not_found'          => __('No Case Studies Found', 'optraseven'),
            'not_found_in_trash' => __('No Case Studies Found in Trash', 'optraseven'),
        ],
        'description'   => 'For case study showcase page',
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-lightbulb',
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'post-formats'],
//        'taxonomies'    => ['category', 'post_tag'],
        'rewrite'       => ['slug' => 'case-studies', 'with_front' => true],
        'show_in_rest'  => true,
        'show_in_nav_menus' => true,
    ]);
}
add_action('init', 'optraseven_register_custom_post_types');
