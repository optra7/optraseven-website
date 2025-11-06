function custom_post_types() {
// Service
register_post_type('service', [
'labels' => [
'name' => 'Services',
'singular_name' => 'Service',
],
'public' => true,
'menu_icon' => 'dashicons-admin-tools',
'supports' => ['title', 'editor', 'thumbnail'],
'has_archive' => true,
'rewrite' => ['slug' => 'services'],
'show_in_rest' => true,
]);

// Portfolio
register_post_type('portfolio', [
'labels' => [
'name' => 'Portfolio',
'singular_name' => 'Portfolio Item',
],
'public' => true,
'menu_icon' => 'dashicons-portfolio',
'supports' => ['title', 'editor', 'thumbnail'],
'has_archive' => true,
'rewrite' => ['slug' => 'portfolio'],
'show_in_rest' => true,
]);

// Case Study
register_post_type('case-study', [
'labels' => [
'name' => 'Case Studies',
'singular_name' => 'Case Study',
],
'public' => true,
'menu_icon' => 'dashicons-lightbulb',
'supports' => ['title', 'editor', 'thumbnail'],
'has_archive' => true,
'rewrite' => ['slug' => 'case-studies'],
'show_in_rest' => true,
]);
}
add_action('init', 'custom_post_types');
