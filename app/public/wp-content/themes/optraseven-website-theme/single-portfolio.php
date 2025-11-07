<?php
/**
 * Template for single Portfolio items
 */
get_header();
?>

<main id="primary" class="site-main single-portfolio">

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

            // Get custom fields
            $brand_name = get_field('brand_name');
            $sub_title = get_field('sub_title');
            $services = get_field('services'); // repeater or text array
            $industries = get_field('industries'); // repeater or text array
            $apps = get_field('apps'); // repeater or text array
            $themes = get_field('themes'); // repeater or text array
            $platform = get_field('platform');
            $external_link = get_field('external_link');
            $portfolio_images = get_field('portfolio_images'); // gallery field
            ?>

            <body <?php body_class('page-portfolio-details'); ?>>

            <section class="section">
                <div class="container">

                    <!-- Title -->
                    <h1 class="o7-details-page-post__title o7-details-page-post__title--mobile">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Hero Image -->
                    <div class="o7-details-page-hero">
                        <div class="o7-details-page-hero__image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Sidebar + Content -->
                    <div class="o7-details-page-post-wrapper">

                        <!-- Sidebar -->
                        <aside class="o7-details-page-sidebar">
                            <?php if ($services) : ?>
                                <div class="o7-details-page-sidebar__item-wrapper">
                                    <div class="o7-details-page-sidebar__title">Services</div>
                                    <?php foreach ($services as $service) : ?>
                                        <div class="o7-details-page-sidebar__item"><?php echo esc_html($service); ?></div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($industries) : ?>
                                <div class="o7-details-page-sidebar__item-wrapper">
                                    <div class="o7-details-page-sidebar__title">Industries</div>
                                    <?php foreach ($industries as $industry) : ?>
                                        <div class="o7-details-page-sidebar__item"><?php echo esc_html($industry); ?></div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($apps) : ?>
                                <div class="o7-details-page-sidebar__item-wrapper">
                                    <div class="o7-details-page-sidebar__title">Apps</div>
                                    <?php foreach ($apps as $app) : ?>
                                        <div class="o7-details-page-sidebar__item"><?php echo esc_html($app); ?></div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($themes) : ?>
                                <div class="o7-details-page-sidebar__item-wrapper">
                                    <div class="o7-details-page-sidebar__title">Themes</div>
                                    <?php foreach ($themes as $theme) : ?>
                                        <div class="o7-details-page-sidebar__item"><?php echo esc_html($theme); ?></div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($platform) : ?>
                                <div class="o7-details-page-sidebar__item-wrapper">
                                    <div class="o7-details-page-sidebar__title">Platform</div>
                                    <div class="o7-details-page-sidebar__item"><?php echo esc_html($platform); ?></div>
                                </div>
                            <?php endif; ?>

                            <?php if ($external_link) : ?>
                                <div class="o7-details-page-sidebar__btn-wrapper">
                                    <a href="<?php echo esc_url($external_link); ?>" class="btn btn--secondary btn--medium" target="_blank" rel="noopener">
                                        View Site
                                        <svg class="fee-icon" aria-hidden="true" focusable="false">
                                            <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#arrow-up-right"></use>
                                        </svg>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </aside>

                        <!-- Main Content -->
                        <article class="o7-details-page-post">

                            <!-- Title -->
                            <h1 class="o7-details-page-post__title o7-details-page-post__title--pc"><?php the_title(); ?></h1>

                            <!-- Sub-title -->
                            <?php if ($sub_title) : ?>
                                <h2 class="o7-details-page-post__sub-title"><?php echo esc_html($sub_title); ?></h2>
                            <?php endif; ?>

                            <!-- Portfolio Images -->
                            <?php if ($portfolio_images) : ?>
                                <?php foreach ($portfolio_images as $image) : ?>
                                    <div class="o7-details-page-post__image">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async" width="1200" height="800" />
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <!-- Post Content -->
                            <div class="o7-details-page-post__details-wrapper">
                                <?php the_content(); ?>
                            </div>

                        </article>
                    </div>

                </div>
            </section>

            <!-- Explore More Section -->
            <section class="section o7-arrow-card-section">
                <div class="container">
                    <h2 class="o7-arrow-card__title">Explore More</h2>
                    <div class="o7-arrow-card__card-wrapper">

                        <?php
                        // Example: Show 2 related posts (can be case-studies or other portfolio items)
                        $related_args = [
                            'post_type' => 'portfolio',
                            'posts_per_page' => 2,
                            'post__not_in' => [get_the_ID()]
                        ];
                        $related = new WP_Query($related_args);
                        if ($related->have_posts()) :
                            while ($related->have_posts()) : $related->the_post(); ?>
                                <article class="o7-arrow-card__card">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="o7-arrow-card__card-image-wrapper">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                                            <?php endif; ?>
                                            <div class="o7-arrow-card__card-hover-chip">
                                                <svg class="o7-arrow-card__card-hover-icon" aria-hidden="true" focusable="false">
                                                    <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#arrow-up-right"></use>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="o7-arrow-card__card-title-wrapper">
                                            <div class="o7-arrow-card__card-category-wrapper">
                                                <span class="o7-arrow-card__card-decorative-dot"></span>
                                                <p class="o7-arrow-card__card-catagory-title">
                                                    <?php
                                                    $cats = get_the_terms(get_the_ID(), 'portfolio_category');
                                                    if ($cats) echo esc_html($cats[0]->name);
                                                    ?>
                                                </p>
                                            </div>
                                            <h3 class="o7-arrow-card__card-tagline"><?php the_title(); ?></h3>
                                        </div>
                                    </a>
                                </article>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>

                    </div>
                </div>
            </section>

            </body>

        <?php endwhile;
    endif; ?>

</main>

<?php get_footer(); ?>
