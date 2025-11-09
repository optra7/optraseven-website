<?php
/**
 * Register all custom taxonomies for Optraseven theme
 */

function optraseven_register_custom_taxonomies() {

    // ===== CASE STUDY TAXONOMIES =====
    // Categories
    register_taxonomy('case_study_category', ['case-study'], [
        'labels' => [
            'name'              => 'Case Study Categories',
            'singular_name'     => 'Case Study Category',
            'search_items'      => 'Search Case Study Categories',
            'all_items'         => 'All Case Study Categories',
            'parent_item'       => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'edit_item'         => 'Edit Category',
            'update_item'       => 'Update Category',
            'add_new_item'      => 'Add New Category',
            'new_item_name'     => 'New Category Name',
            'menu_name'         => 'Categories',
        ],
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => ['slug' => 'case-study-category'],
        'show_in_rest'      => true,
    ]);

    // Tags
    register_taxonomy('case_study_tag', ['case-study'], [
        'labels' => [
            'name'                       => 'Case Study Tags',
            'singular_name'              => 'Case Study Tag',
            'search_items'               => 'Search Case Study Tags',
            'popular_items'              => 'Popular Tags',
            'all_items'                  => 'All Tags',
            'edit_item'                  => 'Edit Tag',
            'update_item'                => 'Update Tag',
            'add_new_item'               => 'Add New Tag',
            'new_item_name'              => 'New Tag Name',
            'separate_items_with_commas' => 'Separate tags with commas',
            'add_or_remove_items'        => 'Add or remove tags',
            'choose_from_most_used'      => 'Choose from the most used tags',
            'menu_name'                  => 'Tags',
        ],
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => ['slug' => 'case-study-tag'],
        'show_in_rest'      => true,
    ]);


    // ===== SERVICE TAXONOMIES =====
    // Categories
    register_taxonomy('service_category', ['service'], [
        'labels' => [
            'name'              => 'Service Categories',
            'singular_name'     => 'Service Category',
            'search_items'      => 'Search Service Categories',
            'all_items'         => 'All Service Categories',
            'parent_item'       => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'edit_item'         => 'Edit Category',
            'update_item'       => 'Update Category',
            'add_new_item'      => 'Add New Category',
            'new_item_name'     => 'New Category Name',
            'menu_name'         => 'Categories',
        ],
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => ['slug' => 'service-category'],
        'show_in_rest'      => true,
    ]);

    // Tags
    register_taxonomy('service_tag', ['service'], [
        'labels' => [
            'name'                       => 'Service Tags',
            'singular_name'              => 'Service Tag',
            'search_items'               => 'Search Service Tags',
            'popular_items'              => 'Popular Tags',
            'all_items'                  => 'All Tags',
            'edit_item'                  => 'Edit Tag',
            'update_item'                => 'Update Tag',
            'add_new_item'               => 'Add New Tag',
            'new_item_name'              => 'New Tag Name',
            'separate_items_with_commas' => 'Separate tags with commas',
            'add_or_remove_items'        => 'Add or remove tags',
            'choose_from_most_used'      => 'Choose from the most used tags',
            'menu_name'                  => 'Tags',
        ],
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => ['slug' => 'service-tag'],
        'show_in_rest'      => true,
    ]);


    // ===== PORTFOLIO TAXONOMIES =====
    // Categories
    register_taxonomy('portfolio_category', ['portfolio'], [
        'labels' => [
            'name'              => 'Portfolio Categories',
            'singular_name'     => 'Portfolio Category',
            'search_items'      => 'Search Portfolio Categories',
            'all_items'         => 'All Portfolio Categories',
            'parent_item'       => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'edit_item'         => 'Edit Category',
            'update_item'       => 'Update Category',
            'add_new_item'      => 'Add New Category',
            'new_item_name'     => 'New Category Name',
            'menu_name'         => 'Categories',
        ],
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => ['slug' => 'portfolio-category'],
        'show_in_rest'      => true,
    ]);

    // Tags
    register_taxonomy('portfolio_tag', ['portfolio'], [
        'labels' => [
            'name'                       => 'Portfolio Tags',
            'singular_name'              => 'Portfolio Tag',
            'search_items'               => 'Search Portfolio Tags',
            'popular_items'              => 'Popular Tags',
            'all_items'                  => 'All Tags',
            'edit_item'                  => 'Edit Tag',
            'update_item'                => 'Update Tag',
            'add_new_item'               => 'Add New Tag',
            'new_item_name'              => 'New Tag Name',
            'separate_items_with_commas' => 'Separate tags with commas',
            'add_or_remove_items'        => 'Add or remove tags',
            'choose_from_most_used'      => 'Choose from the most used tags',
            'menu_name'                  => 'Tags',
        ],
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => ['slug' => 'portfolio-tag'],
        'show_in_rest'      => true,
    ]);
}

add_action('init', 'optraseven_register_custom_taxonomies');
