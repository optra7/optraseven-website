<?php
/**
 * Single Blog Post Template
 */

get_header();
?>

<main id="primary" class="site-main single-blog">
    <?php while (have_posts()) : the_post();

        $post_id = get_the_ID();

        // ACF fields
        $subtitle           = get_field('subtitle', $post_id);
        $platform           = get_field('platform', $post_id);
        $author_name        = get_field('author_name', $post_id);
        $featured_image     = get_the_post_thumbnail_url($post_id, 'large');

        // Explore links
        $explore_service    = get_field('explore_service', $post_id);
        $explore_case_study = get_field('explore_case_study', $post_id);
        $explore_portfolio  = get_field('explore_portfolio', $post_id);

        ?>
    <section class="section">
        <div class="container">
            <article <?php post_class('o7-blog-post'); ?> id="post-<?php the_ID(); ?>">

                <!-- Title & Subtitle -->
                <header class="o7-blog-post__header">
                    <h1 class="o7-blog-post__title"><?php the_title(); ?></h1>
                    <?php if ($subtitle) : ?>
                        <p class="o7-blog-post__subtitle"><?php echo esc_html($subtitle); ?></p>
                    <?php endif; ?>

                    <div class="o7-blog-post__meta">
                        <?php if ($author_name) : ?>
                            <span class="o7-blog-post__author">By <cite><?php echo esc_html($author_name); ?></cite></span> •
                        <?php endif; ?>
                        <span class="o7-blog-post__date"><?php echo get_the_date(); ?></span>
                    </div>
                </header>

                <!-- Featured Image -->
                <?php if ($featured_image) : ?>
                    <div class="o7-blog-post__banner-image">
                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" width="1000" height="500">
                    </div>
                <?php endif; ?>

                <!-- Post Content -->
                <div class="o7-blog-post__content entry-content">
                    <?php the_content(); ?>
                </div>

                <!-- Platform -->
                <?php if ($platform) : ?>
                    <div class="o7-blog-post__platform">
                        <strong>Platform:</strong> <?php echo esc_html($platform); ?>
                    </div>
                <?php endif; ?>

                <!-- Explore More Section -->
                <?php
                // Build explore fields array
                $explore_fields = [
                    'Portfolio'   => $explore_portfolio,
                    'Service'     => $explore_service,
                    'Case Study'  => $explore_case_study,
                ];
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

                                    $type_label = get_post_type_object($linked_post->post_type)->labels->singular_name ?? ucfirst($linked_post->post_type);
                                    $title = get_the_title($linked_post->ID);
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
                                                        <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="o7-arrow-card__card-title-wrapper">
                                                <div class="o7-arrow-card__card-category-wrapper">
                                                    <span class="o7-arrow-card__card-decorative-dot"></span>
                                                    <p class="o7-arrow-card__card-catagory-title"><?php echo esc_html($type_label); ?></p>
                                                </div>
                                                <h3 class="o7-arrow-card__card-tagline"><?php echo esc_html($title); ?></h3>
                                            </div>
                                        </a>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>

                <!-- Comments -->
                <?php comments_template(); ?>

            </article>
        </div>
    </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
