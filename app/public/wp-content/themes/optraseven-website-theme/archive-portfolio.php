<?php
/**
 * Universal Archive Template (for filtering)
 */
get_header();

$post_type = get_post_type();
$taxonomy = 'portfolio_category';

$current_filter = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : 'all';
wp_localize_script('o7-archive-filter', 'archiveFilterData', [
    'current_filter' => $current_filter,
]);
?>

<main id="primary" class="main site-main archive-portfolio inner-page-main">

    <!-- ====== Banner Section ====== -->
    <?php get_template_part('template-parts/archive/portfolio/page-banner', null, ['post_id' => get_the_ID()]); ?>
    <!-- ====== Filter Section ====== -->
    <section class="section section-no-space-bottom">
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
                            $subtitle  = get_field('subtitle', $post_id);
                            $platform  = get_field('platform', $post_id);
                            $all_tags = wp_get_post_terms($post_id, 'portfolio_tag', ['fields' => 'names']);
                            $industry  = get_field('industry', $post_id);
                            $featured_img = get_the_post_thumbnail_url($post_id, 'large');
                            $categories = wp_get_post_terms($post_id, 'portfolio_category', ['fields' => 'slugs']);
                            $category_classes = !empty($categories) ? implode(' ', $categories) : '';
                            ?>
                            <article class="o7-list-page-filter__card <?php echo esc_attr($category_classes); ?>" data-category="<?php echo esc_attr($category_classes); ?>">
                                
                                    <div class="o7-list-page-filter__card-image-wrapper o7-card__image-wrapper o7-card__image-wrapper--rounded o7-card__image-wrapper--with-bg">
                                        <div class="o7-list-page-filter__image-frame o7-card__image-frame">
                                            <a href="<?php echo get_permalink($post_id); ?>">
                                            <?php if ($featured_img): ?>
                                                <img src="<?php echo esc_url($featured_img); ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>" width="780" height="680" loading="lazy" decoding="async" class="o7-card__image">
                                            <?php endif; ?>
                                            </a>
                                        </div>
                                        <?php if (!empty($all_tags)) : ?>
                                        <div class="o7-hover-chip">
                                            <svg class="o7-hover-chip__bg-span-icon-top" aria-hidden="true" focusable="false">
                                                <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#chip-radius-2"></use>
                                            </svg>
                                            <svg class="o7-hover-chip__bg-span-icon" aria-hidden="true" focusable="false">
                                                <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#chip-radius-2"></use>
                                            </svg>
                                            <div class="o7-hover-chip__inner">
                                                <?php foreach ($all_tags as $tag): ?>
                                                    <div class="o7-hover-chip__buton">
                                                        <?= esc_html($tag); ?>
                                                    </div>
                                                <?php endforeach; ?>
                                                <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-pc">
                                                    +1
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if ($platform): ?>
                                            <div class="o7-hover-icon o7-hover-icon--<?php echo strtolower($platform); ?>">
                                                <div class="o7-hover-icon__bg">
                                                    <svg class="o7-hover-icon__icon" aria-hidden="true">
                                                        <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#card-curve-img-1"></use>
                                                    </svg>
                                                    <div class="o7-hover-icon__bg-span-wrapper">
                                                        <span class="o7-hover-icon__bg-span"></span>
                                                        <svg class="o7-hover-icon__bg-span-icon" aria-hidden="true">
                                                            <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#card-curve-img-2"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="o7-hover-icon__inner">
                                                    <img
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/hover-icon-<?php echo strtolower($platform); ?>.webp"
                                                            alt="<?php echo esc_attr($platform); ?>"
                                                            width="80" height="80"
                                                    />
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="o7-card__info-block">
                                        <div class="o7-card__title-wrapper">
                                            <?php if ($industry): ?>
                                                <p class="o7-card__title"><?php echo esc_html($industry); ?></p>
                                                <p class="o7-card__title-decorative-dot o7-card__title"><?php echo esc_html(get_the_title($post_id)); ?></p>
                                                <?php else : ?>
                                                <p class="o7-card__title"><?php echo esc_html(get_the_title($post_id)); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($subtitle): ?>
                                            <h3 class="o7-content-card__header">
                                                <a href="<?php the_permalink(); ?>">
                                                <?php echo esc_html($subtitle); ?>
                                                </a>
                                            </h3>
                                        <?php endif; ?>
                                    </div>
                                
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
