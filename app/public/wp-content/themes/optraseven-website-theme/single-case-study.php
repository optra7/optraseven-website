<?php
/**
 * Single Case Study
 */
get_header();
?>

<main id="primary" class="site-main single-case-study">
    <section class="section">
        <div class="container">

            <!-- Title (Mobile) -->
            <h1 class="o7-details-page-post__title o7-details-page-post__title--mobile">
                <?php the_title(); ?>
            </h1>

            <!-- Hero Image -->
            <div class="o7-details-page-hero">
                <div class="o7-details-page-hero__image">
                    <?php
                    $hero_image = get_field('hero_image');
                    if ($hero_image) :
                        echo wp_get_attachment_image($hero_image['ID'], 'full', false, [
                            'alt' => $hero_image['alt'],
                            'decoding' => 'async',
                            'fetchpriority' => 'high',
                            'class' => 'case-study-hero-img'
                        ]);
                    endif;
                    ?>
                </div>
            </div>

            <div class="o7-details-page-post-wrapper">
                <!-- Sidebar -->
                <aside class="o7-details-page-sidebar">
                    <?php if (have_rows('sidebar_sections')) : ?>
                        <?php while (have_rows('sidebar_sections')) : the_row(); ?>
                            <div class="o7-details-page-sidebar__item-wrapper">
                                <div class="o7-details-page-sidebar__title">
                                    <?php the_sub_field('title'); ?>
                                </div>
                                <?php if (have_rows('items')) : ?>
                                    <?php while (have_rows('items')) : the_row(); ?>
                                        <div class="o7-details-page-sidebar__item">
                                            <?php the_sub_field('item'); ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php
                    $view_site_link = get_field('view_site_link');
                    if ($view_site_link) :
                        ?>
                        <div class="o7-details-page-sidebar__btn-wrapper">
                            <a href="<?php echo esc_url($view_site_link['url']); ?>"
                               class="btn btn--secondary btn--medium"
                               target="<?php echo esc_attr($view_site_link['target'] ?: '_self'); ?>">
                                <?php echo esc_html($view_site_link['title']); ?>
                                <svg class="fee-icon">
                                    <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#arrow-up-right"></use>
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </aside>

                <!-- Case Study Content -->
                <article class="o7-details-page-post">
                    <h1 class="o7-details-page-post__title o7-details-page-post__title--pc">
                        <?php the_title(); ?>
                    </h1>

                    <?php if (get_field('subtitle')) : ?>
                        <h2 class="o7-details-page-post__sub-title">
                            <?php the_field('subtitle'); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (get_field('intro_description')) : ?>
                        <p class="o7-details-page-post__description">
                            <?php the_field('intro_description'); ?>
                        </p>
                    <?php endif; ?>

                    <?php if (have_rows('key_sections')) : ?>
                        <?php while (have_rows('key_sections')) : the_row(); ?>
                            <div class="o7-details-page-post__key-point-wrapper">
                                <h3 class="o7-details-page-post__key-point-title">
                                    <?php the_sub_field('section_title'); ?>
                                </h3>

                                <?php if (get_sub_field('section_text')) : ?>
                                    <p class="o7-details-page-post__key-point">
                                        <?php the_sub_field('section_text'); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (get_sub_field('section_list')) : ?>
                                    <ul>
                                        <?php foreach (get_sub_field('section_list') as $item) : ?>
                                            <li class="o7-details-page-post__key-point o7-details-page-post__key-point--list">
                                                <?php echo esc_html($item['list_item']); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <?php
                                $section_image = get_sub_field('section_image');
                                if ($section_image) :
                                    echo '<div class="o7-details-page-post__image">';
                                    echo wp_get_attachment_image($section_image['ID'], 'large', false, [
                                        'alt' => $section_image['alt'],
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                        'class' => 'case-study-section-img'
                                    ]);
                                    echo '</div>';
                                endif;
                                ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </article>
            </div>
        </div>
    </section>

    <!-- Explore More Section -->
    <?php if (have_rows('explore_more')) : ?>
        <section class="section">
            <div class="container o7-arrow-card">
                <h2 class="o7-arrow-card__title">Explore More</h2>
                <div class="o7-arrow-card__card-wrapper">
                    <?php while (have_rows('explore_more')) : the_row(); ?>
                        <article class="o7-arrow-card__card o7-arrow-card__card--<?php echo esc_attr(get_sub_field('type')); ?>">
                            <?php $link = get_sub_field('link'); ?>
                            <a href="<?php echo esc_url($link['url']); ?>">
                                <div class="o7-arrow-card__card-image-wrapper">
                                    <?php
                                    $image = get_sub_field('image');
                                    if ($image) :
                                        echo wp_get_attachment_image($image['ID'], 'medium_large', false, [
                                            'alt' => $image['alt'],
                                            'loading' => 'lazy',
                                            'decoding' => 'async'
                                        ]);
                                    endif;
                                    ?>
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
                                            <?php the_sub_field('category'); ?>
                                        </p>
                                    </div>
                                    <h3 class="o7-arrow-card__card-tagline">
                                        <?php the_sub_field('tagline'); ?>
                                    </h3>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<main id="primary" class="site-main single-case-study">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="section">
        <div class="container">

            <!-- Title (Mobile) -->
            <h1 class="o7-details-page-post__title o7-details-page-post__title--mobile">
                <?php the_title(); ?>
            </h1>
        <?php get_template_part('template-parts/single/page-banner', null, ['post_id' => get_the_ID()]); ?>
        <div class="o7-details-page-post-wrapper">
            <aside class="o7-details-page-sidebar">
                <?php get_template_part('template-parts/single/page-sidebar', null, ['post_id' => get_the_ID()]); ?>
            </aside>
            <article class="o7-details-page-post">
                <?php get_template_part('template-parts/single/page-content', null, ['post_id' => get_the_ID()]); ?>
            </article>
        </div>
        </div>
    </section>
        <?php get_template_part('template-parts/single/explore-more', null, ['post_id' => get_the_ID()]); ?>
    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
