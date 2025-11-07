<?php
/**
 * Case Study Archive
 */
get_header();
?>

<main id="primary" class="site-main archive-case-study">

    <!-- ====== Banner Section ====== -->
    <section class="section">
        <div class="container o7-page-banner">
            <div class="o7-page-banner__heading">
                <h1 class="o7-page-banner__title">
                    <span class="o7-page-banner__decorative-dot"></span>
                    <?php echo esc_html(get_field('banner_title', 'option') ?: 'Highlights From Our Journey'); ?>
                </h1>
                <h2 class="o7-page-banner__sub-title">
                    <?php echo esc_html(get_field('banner_subtitle', 'option') ?: 'Stories of Collaboration, Strategy, and Results'); ?>
                </h2>
            </div>

            <div class="o7-page-banner__image-wrapper">
                <?php
                $banner_img = get_field('banner_image', 'option');
                if ($banner_img): ?>
                    <div class="o7-page-banner__image">
                        <img src="<?php echo esc_url($banner_img['url']); ?>" alt="<?php echo esc_attr($banner_img['alt']); ?>" width="1520" height="506" />
                    </div>
                <?php endif; ?>
                <div class="o7-page-banner__image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- ====== Filter Section ====== -->
    <section class="section">
        <div class="container">
            <div class="o7-list-page-filter">
                <div class="o7-list-page-filter__list-wrapper">
                    <ul class="o7-list-page-filter__list">
                        <li class="o7-list-page-filter__filter-item active" data-filter="all">All</li>
                        <?php
                        $terms = get_terms(array(
                            'taxonomy' => 'case-study-category',
                            'hide_empty' => true,
                        ));
                        foreach ($terms as $term): ?>
                            <li class="o7-list-page-filter__filter-item" data-filter="<?php echo esc_attr($term->slug); ?>">
                                <?php echo esc_html($term->name); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Case Study Cards Grid -->
                <div class="o7-list-page-filter__data-list">
                    <div class="o7-list-page-filter__column-left">

                        <?php
                        $args = array(
                            'post_type' => 'case-study',
                            'posts_per_page' => -1,
                        );
                        $case_query = new WP_Query($args);

                        if ($case_query->have_posts()):
                            $i = 0;
                            while ($case_query->have_posts()): $case_query->the_post();
                                $i++;
                                $category = wp_get_post_terms(get_the_ID(), 'case-study-category');
                                $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                $platform = get_field('platform');
                                $subtitle = get_field('subtitle');
                                ?>
                                <article class="o7-list-page-filter__card <?php echo ($i % 2 == 0) ? 'right' : 'left'; ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="o7-list-page-filter__card-image-wrapper">
                                            <?php if ($featured_img): ?>
                                                <img src="<?php echo esc_url($featured_img); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async" width="780" height="680" />
                                            <?php endif; ?>

                                            <!-- platform -->
                                            <?php if ($platform): ?>
                                                <div class="o7-hover-icon o7-hover-icon--<?php echo strtolower($platform); ?> o7-hover-icon--left-icon-box">
                                                    <div class="o7-hover-icon__inner">
                                                        <span><?php echo esc_html($platform); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="o7-list-page-filter__card-title-wrapper">
                                            <div class="o7-card-category">
                                                <?php if (!empty($category)): ?>
                                                    <p class="o7-card-catagory__title"><?php echo esc_html($category[0]->name); ?></p>
                                                <?php endif; ?>

                                                <span class="o7-card-catagory__decorative-dot"></span>
                                                <p class="o7-card-catagory__title"><?php the_title(); ?></p>
                                            </div>

                                            <?php if ($subtitle): ?>
                                                <h3 class="o7-list-page-filter__card-tagline"><?php echo esc_html($subtitle); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            echo '<p>No case studies found.</p>';
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
