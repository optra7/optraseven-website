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
    'Portfolio'    => get_field('explore_portfolio', $post_id),
    'Blog'       => get_field('explore_blog', $post_id),
];

// Filter out empty ones
$explore_fields = array_filter($explore_fields);
?>

<?php if (!empty($explore_fields)) : ?>
    <section class="section o7-explore-more section-no-space-bottom">
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
                        'decoding' => 'async',
                        'class' => 'o7-card__image'
                    ]);
                    ?>
                    <article class="o7-content-card o7-content-card--<?php echo esc_attr($linked_post->post_type); ?>">
                            <div class="o7-card__image-wrapper o7-card__image-wrapper--rounded">
                                <div class="o7-card__image-frame">
                                    <a href="<?php echo esc_url(get_permalink($linked_post->ID)); ?>">
                                    <?php echo $image ?: '<div class="o7-arrow-card__card-placeholder"></div>'; ?>
                                    </a>
                                </div>
                                <a href="<?php echo esc_url(get_permalink($linked_post->ID)); ?>" class="o7-content-card__circle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-up-right-svgrepo-com.svg"
                                        alt="arrow"
                                        class="o7-content-card__circle-arrow">
                                </a>
                            </div>
                            <div class="o7-card__info-block">
                                <div class="o7-card__title-wrapper">
                                    <p class="o7-card__title"><?php echo esc_html($type_label); ?></p>
                                    <p class="o7-card__title-decorative-dot o7-card__title"><?php echo esc_html($title); ?></p>
                                    <h3 class="o7-content-card__header">
                                        <a href="<?php echo esc_url(get_permalink($linked_post->ID)); ?>">
                                        <?php echo esc_html($subtitle); ?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
