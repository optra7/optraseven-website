<?php
// Register Custom Taxonomy for Case Studies
function optraseven_register_case_study_taxonomy() {

    register_taxonomy('case_study_category', 'case-study', [
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
        'hierarchical' => true, // acts like categories (true) vs tags (false)
        'show_ui'      => true,
        'show_admin_column' => true,
        'rewrite' => ['slug' => 'case-study-category'],
        'show_in_rest' => true, // enables Gutenberg and REST API
    ]);
}
add_action('init', 'optraseven_register_case_study_taxonomy');
