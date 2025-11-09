<?php
/**
 * Explore More Section
 * Variables: $post_id, $post_type ('portfolio' or 'case_study')
 */
$args = $args ?? [];
$args = wp_parse_args($args, ['post_id' => get_the_ID()]);
$post_id = $args['post_id'];
?>

<?php if (have_rows('explore_more', $post_id)) : ?>
    <section class="section">
        <div class="container o7-arrow-card">
            <h2 class="o7-arrow-card__title">Explore More</h2>
            <div class="o7-arrow-card__card-wrapper">
                <?php while (have_rows('explore_more', $post_id)) : the_row();
                    $link = get_sub_field('link');
                    $image = get_sub_field('image');
                    $type = get_sub_field('type');
                    $category = get_sub_field('category');
                    $tagline = get_sub_field('tagline');
                    ?>
                    <article class="o7-arrow-card__card o7-arrow-card__card--<?php echo esc_attr($type); ?>">
                        <a href="<?php echo esc_url($link['url']); ?>">
                            <div class="o7-arrow-card__card-image-wrapper">
                                <?php if ($image) echo wp_get_attachment_image($image['ID'], 'medium_large', false, ['alt' => $image['alt'], 'loading' => 'lazy', 'decoding' => 'async']); ?>
                                <div class="o7-arrow-card__card-hover-chip">
                                    <svg class="o7-arrow-card__card-hover-icon" aria-hidden="true"><use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#arrow-up-right"></use></svg>
                                </div>
                            </div>
                            <div class="o7-arrow-card__card-title-wrapper">
                                <div class="o7-arrow-card__card-category-wrapper">
                                    <span class="o7-arrow-card__card-decorative-dot"></span>
                                    <p class="o7-arrow-card__card-catagory-title"><?php echo esc_html($category); ?></p>
                                </div>
                                <h3 class="o7-arrow-card__card-tagline"><?php echo esc_html($tagline); ?></h3>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
