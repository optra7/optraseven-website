<?php
get_header();
?>

<main id="primary" class="site-main archive-portfolio">

    <!-- 🔹 Hero / Banner Section -->
    <section class="section">
        <div class="container o7-page-banner">
            <div class="o7-page-banner__heading">
                <h1 class="o7-page-banner__title">
                    <span class="o7-page-banner__decorative-dot"></span>
                    <?php echo esc_html(get_field('portfolio_banner_title', 'option') ?: 'Our Works'); ?>
                </h1>
                <h2 class="o7-page-banner__sub-title">
                    <?php echo esc_html(get_field('portfolio_banner_subtitle', 'option') ?: 'Digital success stories crafted with design & technology'); ?>
                </h2>
            </div>

            <div class="o7-page-banner__image-wrapper">
                <?php
                $banner_img = get_field('portfolio_banner_image', 'option');
                if ($banner_img): ?>
                    <div class="o7-page-banner__image">
                        <img src="<?php echo esc_url($banner_img['url']); ?>" alt="<?php echo esc_attr($banner_img['alt']); ?>" width="1520" height="506" />
                    </div>
                <?php else: ?>
                    <div class="o7-page-banner__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio-pages/portfolio-list-images/portfolio-banner-image.webp" alt="portfolio-banner" width="1520" height="506" />
                    </div>
                <?php endif; ?>
                <div class="o7-page-banner__image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- 🔹 Filter Section -->
    <section class="section">
        <div class="container">
            <div class="o7-list-page-filter">

                <!-- Filter List -->
                <div class="o7-list-page-filter__list-wrapper">
                    <ul class="o7-list-page-filter__list">
                        <li class="o7-list-page-filter__filter-item active" data-filter="all">All</li>
                        <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'portfolio-category',
                            'hide_empty' => true,
                        ));
                        foreach ($terms as $term): ?>
                            <li class="o7-list-page-filter__filter-item" data-filter="<?php echo esc_attr($term->slug); ?>">
                                <?php echo esc_html($term->name); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Portfolio Cards Grid -->
                <div class="o7-list-page-filter__data-list">
                    <div class="o7-list-page-filter__column-left">

                        <?php
                        $args = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                        );
                        $portfolio_query = new WP_Query($args);

                        if ($portfolio_query->have_posts()):
                            $i = 0;
                            while ($portfolio_query->have_posts()): $portfolio_query->the_post();
                                $i++;
                                $categories = wp_get_post_terms(get_the_ID(), 'portfolio-category');
                                $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                $platform_icon = get_field('platform_icon');
                                $tagline = get_field('tagline');
                                $brand_name = get_field('brand_name');
                                ?>
                                <article class="o7-list-page-filter__card <?php echo ($i % 2 == 0) ? 'right' : 'left'; ?>">
                                    <a href="<?php the_permalink(); ?>">

                                        <div class="o7-list-page-filter__card-image-wrapper">
                                            <?php if ($featured_img): ?>
                                                <img src="<?php echo esc_url($featured_img); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async" width="780" height="680" />
                                            <?php endif; ?>

                                            <!-- platform icon -->
                                            <?php if ($platform_icon): ?>
                                                <div class="o7-hover-icon o7-hover-icon--left-icon-box">
                                                    <div class="o7-hover-icon__inner">
                                                        <img src="<?php echo esc_url($platform_icon['url']); ?>" alt="<?php echo esc_attr($platform_icon['alt']); ?>" width="80" height="80" loading="lazy" decoding="async" />
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="o7-list-page-filter__card-title-wrapper">
                                            <div class="o7-card-category">
                                                <?php if (!empty($categories)): ?>
                                                    <p class="o7-card-catagory__title"><?php echo esc_html($categories[0]->name); ?></p>
                                                <?php endif; ?>

                                                <span class="o7-card-catagory__decorative-dot"></span>
                                                <?php if ($brand_name): ?>
                                                    <p class="o7-card-catagory__title"><?php echo esc_html($brand_name); ?></p>
                                                <?php else: ?>
                                                    <p class="o7-card-catagory__title"><?php the_title(); ?></p>
                                                <?php endif; ?>
                                            </div>

                                            <?php if ($tagline): ?>
                                                <h3 class="o7-list-page-filter__card-tagline"><?php echo esc_html($tagline); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            echo '<p>No portfolio items found.</p>';
                        endif;
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
