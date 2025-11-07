<?php
function optraseven_register_custom_post_types() {

    // Service
    register_post_type('service', [
        'labels' => [
            'name'          => 'Services',
            'singular_name' => 'Service',
            'add_new_item'  => 'Add New Service',
            'edit_item'     => 'Edit Service',
            'view_item'     => 'View Service',
            'all_items'     => 'All Services',
        ],
        'public'       => true,
        'menu_icon'    => 'dashicons-admin-tools',
        'supports'     => ['title', 'editor', 'thumbnail'],
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'services'],
        'show_in_rest' => true,
    ]);

    // Portfolio
    register_post_type('portfolio', [
        'labels' => [
            'name'          => 'Portfolio',
            'singular_name' => 'Portfolio Item',
            'add_new_item'  => 'Add New Portfolio Item',
            'edit_item'     => 'Edit Portfolio Item',
            'view_item'     => 'View Portfolio Item',
            'all_items'     => 'All Portfolio Items',
        ],
        'public'       => true,
        'menu_icon'    => 'dashicons-portfolio',
        'supports'     => ['title', 'editor', 'thumbnail'],
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'portfolio'],
        'show_in_rest' => true,
    ]);

    // Case Study
    register_post_type('case-study', [
        'labels' => [
            'name'          => 'Case Studies',
            'singular_name' => 'Case Study',
            'add_new_item'  => 'Add New Case Study',
            'edit_item'     => 'Edit Case Study',
            'view_item'     => 'View Case Study',
            'all_items'     => 'All Case Studies',
        ],
        'public'       => true,
        'menu_icon'    => 'dashicons-lightbulb',
        'supports'     => ['title', 'editor', 'thumbnail'],
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'case-studies'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'optraseven_register_custom_post_types');
