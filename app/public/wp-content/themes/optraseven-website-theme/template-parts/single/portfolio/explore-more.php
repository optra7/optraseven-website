<?php
/**
 * Explore More Section for Portfolio
 * Dynamically pulls data from ACF Explore URLs (Case Study, Service, Blog)
 */

$args = $args ?? [];
$args = wp_parse_args($args, ['post_id' => get_the_ID()]);
$post_id = $args['post_id'];

// Get field values
$explore_fields = [
    'Case Study' => get_field('explore_case_study', $post_id),
    'Service'    => get_field('explore_service', $post_id),
    'Blog'       => get_field('explore_blog', $post_id),
];

// Filter out empty ones
$explore_fields = array_filter($explore_fields);
?>

<?php if (!empty($explore_fields)) : ?>
    <section class="section o7-explore-more">
        <div class="container o7-arrow-card">
            <h2 class="o7-arrow-card__title">Explore More</h2>

            <div class="o7-arrow-card__card-wrapper">
                <?php foreach ($explore_fields as $label => $url) :
                    $post_id_linked = url_to_postid($url);
                    if (!$post_id_linked) continue;

                    $linked_post = get_post($post_id_linked);
                    if (!$linked_post) continue;

                    // Detect post type label
                    $type_label = get_post_type_object($linked_post->post_type)->labels->singular_name ?? ucfirst($linked_post->post_type);

                    // Get post title and thumbnail
                    $title = get_the_title($linked_post->ID);
                    $subtitle = get_field('subtitle', $linked_post->ID);
                    $image = get_the_post_thumbnail($linked_post->ID, 'medium_large', [
                        'alt' => esc_attr($title),
                        'loading' => 'lazy',
                        'decoding' => 'async'
                    ]);
                    ?>
                    <article class="o7-arrow-card__card o7-arrow-card__card--<?php echo esc_attr($linked_post->post_type); ?>">
                        <a href="<?php echo esc_url(get_permalink($linked_post->ID)); ?>" class="o7-arrow-card__card-link">
                            <div class="o7-arrow-card__card-image-wrapper">
                                <?php echo $image ?: '<div class="o7-arrow-card__card-placeholder"></div>'; ?>
                                <div class="o7-arrow-card__card-hover-chip">
                                    <svg class="o7-arrow-card__card-hover-icon" aria-hidden="true">
                                        <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right" ?>></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="o7-arrow-card__card-title-wrapper">
                                <div class="o7-arrow-card__card-category-wrapper">
                                    <span class="o7-arrow-card__card-decorative-dot"></span>
                                    <p class="o7-arrow-card__card-catagory-title"><?php echo esc_html($type_label); ?></p>
                                    <span class="o7-arrow-card__card-decorative-dot"></span>
                                    <p class="o7-arrow-card__card-catagory-title"><?php echo esc_html($title); ?></p>
                                </div>
                                <h3 class="o7-arrow-card__card-tagline"><?php echo esc_html($subtitle); ?></h3>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
