<?php
/**
 * Universal Archive Template (for filtering)
 */
get_header();

$post_type = get_post_type();
$taxonomy  = 'category'; // default for blog

if ($post_type === 'case-study') {
    $taxonomy = 'case_study_category';
} elseif ($post_type === 'portfolio') {
    $taxonomy = 'portfolio_category';
} elseif ($post_type === 'service') {
    $taxonomy = 'service_category';
}

// Pass current filter to JS
$current_filter = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : 'all';
wp_localize_script('o7-archive-filter', 'archiveFilterData', [
    'current_filter' => $current_filter,
]);
?>

<main id="primary" class="site-main archive-portfolio">

    <!-- ====== Banner Section ====== -->
    <?php get_template_part('template-parts/archive/portfolio/page-banner', null, ['post_id' => get_the_ID()]); ?>
    <!-- ====== Filter Section ====== -->

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
