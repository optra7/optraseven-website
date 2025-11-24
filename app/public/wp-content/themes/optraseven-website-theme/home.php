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

<main id="primary" class="main inner-page-main site-main archive-blog">

    <!-- ====== Banner Section ====== -->
    <?php get_template_part('template-parts/archive/blog/page-banner', null, ['post_id' => get_the_ID()]); ?>
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
                            $subtitle = get_field('subtitle', $post_id);
                            $platform = get_field('platform', $post_id);
                            $all_tags = wp_get_post_terms($post_id, 'post_tag', ['fields' => 'names']);
                            $featured_img = get_the_post_thumbnail_url($post_id, 'large');
                            $categories = wp_get_post_terms($post_id, $taxonomy, ['fields' => 'slugs']);
                            $category_classes = !empty($categories) ? implode(' ', $categories) : '';
                            ?>
                            <article class="o7-list-page-filter__card <?php echo esc_attr($category_classes); ?>" data-category="<?php echo esc_attr($category_classes); ?>">
                                
                                    <!-- Featured Image -->
                                    <div class="o7-list-page-filter__card-image-wrapper o7-card__image-wrapper o7-card__image-wrapper--rounded o7-card__image-wrapper--with-bg">
                                        <div class="o7-content-card__image-frame o7-card__image-frame">
                                            <a href="<?php echo get_permalink($post_id); ?>">
                                                <?php if ($featured_img): ?>
                                                <img src="<?php echo esc_url($featured_img); ?>"
                                                    alt="<?php echo esc_attr(get_the_title($post_id)); ?>"
                                                    width="780" height="680"
                                                    loading="lazy" decoding="async"
                                                    class="o7-card__image">
                                                <?php endif; ?>
                                            </a>

                                        </div>
                                        
                                        <?php if (!empty($all_tags)) : ?>
                                            <div class="o7-hover-chip">
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

                                            <div class="o7-hover-icon o7-hover-icon--<?php echo strtolower($platform); ?> o7-hover-icon--bottom-left">
                                                <div class="o7-hover-icon__bg">
                                                    <svg class="o7-hover-icon__icon" aria-hidden="true" focusable="false">
                                                        <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#card-curve-img-1"></use>
                                                    </svg>
                                                    <div class="o7-hover-icon__bg-span-wrapper">
                                                        <span class="o7-hover-icon__bg-span"></span>
                                                        <svg class="o7-hover-icon__bg-span-icon" aria-hidden="true"
                                                            focusable="false">
                                                                <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#card-curve-img-2"></use>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="o7-hover-icon__inner">
                                                    <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/archive/hover-icon-<?php echo strtolower($platform); ?>.webp"
                                                        alt="<?php echo esc_attr($platform); ?>" loading="lazy" decoding="async" width="80px"
                                                        height="80px" />
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Title & Subtitle -->

                                    <div class="o7-card__info-block">
                                        <div class="o7-card__title-wrapper">
                                            <p class="o7-card__title-decorative-dot o7-card__title"><?php echo esc_html($platform); ?></p>
                                        </div>

                                        <h3 class="o7-content-card__header">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a> 
                                        </h3>
                                        <?php if ($subtitle): ?>
                                        <p class="o7-content-card__blog-para">
                                           <?php echo esc_html($subtitle); ?>
                                        </p>
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
