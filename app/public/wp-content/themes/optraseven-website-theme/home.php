<?php
/**
 * Universal Archive Template (for filtering)
 */
get_header();

$post_type = 'post';
$taxonomy  = 'category';

$current_filter = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : 'all';
wp_localize_script('o7-archive-filter', 'archiveFilterData', [
    'current_filter' => $current_filter,
]);
?>

<main id="primary" class="site-main archive-blog">

    <!-- ====== Banner Section ====== -->
    <?php get_template_part('template-parts/archive/blog/page-banner', null, ['post_id' => get_the_ID()]); ?>
    <!-- ====== Filter Section ====== -->
    <section class="section">
        <div class="container">
            <div class="o7-list-page-filter">

                <!-- Filter Tabs -->
                <div class="o7-list-page-filter__list-wrapper">
                    <ul class="o7-list-page-filter__list">
                        <li class="o7-list-page-filter__filter-item active" data-filter="all">All</li>
                        <?php
                        $terms = get_terms([
                            'taxonomy'   => $taxonomy,
                            'hide_empty' => true,
                        ]);

                        if (!empty($terms) && !is_wp_error($terms)) :
                            foreach ($terms as $term) : ?>
                                <li class="o7-list-page-filter__filter-item"
                                    data-filter="<?php echo esc_attr($term->slug); ?>">
                                    <?php echo esc_html($term->name); ?>
                                </li>
                            <?php endforeach;
                        endif;
                        ?>
                    </ul>
                </div>

                <!-- Data List -->
                <div class="o7-list-page-filter__data-list">
                    <div class="o7-list-page-filter__column-left"></div>
                    <div class="o7-list-page-filter__column-right"></div>

                    <?php
                    $query = new WP_Query([
                        'post_type'      => $post_type,
                        'posts_per_page' => -1,
                    ]);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            $post_id = get_the_ID();
                            $subtitle = get_field('subtitle', $post_id);
                            $platform = get_field('platform', $post_id);
                            $featured_img = get_the_post_thumbnail_url($post_id, 'large');
                            $categories = wp_get_post_terms($post_id, $taxonomy, ['fields' => 'slugs']);
                            $category_classes = !empty($categories) ? implode(' ', $categories) : '';
                            ?>
                            <article class="o7-list-page-filter__card <?php echo esc_attr($category_classes); ?>" data-category="<?php echo esc_attr($category_classes); ?>">
                                <a href="<?php echo get_permalink($post_id); ?>">
                                    <!-- Featured Image -->
                                    <div class="o7-list-page-filter__card-image-wrapper">
                                        <?php if ($featured_img): ?>
                                            <img src="<?php echo esc_url($featured_img); ?>"
                                                 alt="<?php echo esc_attr(get_the_title($post_id)); ?>"
                                                 width="780" height="680"
                                                 loading="lazy" decoding="async">
                                        <?php endif; ?>

                                        <!-- Platform Icon -->
                                        <?php if ($platform): ?>
                                            <div class="o7-hover-icon o7-hover-icon--<?php echo strtolower($platform); ?> o7-hover-icon--left-icon-box">
                                                <div class="o7-hover-icon__inner o7-hover-icon__inner--left-icon-box">
                                                    <picture>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/case-study-pages/case-study-list/hover-icon-<?php echo strtolower($platform); ?>.webp"
                                                             alt="<?php echo esc_attr($platform); ?>"
                                                             width="80" height="80">
                                                    </picture>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Title & Subtitle -->
                                    <div class="o7-list-page-filter__card-title-wrapper">
                                        <h3 class="o7-list-page-filter__card-title"><?php echo esc_html(get_the_title($post_id)); ?></h3>
                                        <?php if ($subtitle): ?>
                                            <p class="o7-list-page-filter__card-subtitle"><?php echo esc_html($subtitle); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
