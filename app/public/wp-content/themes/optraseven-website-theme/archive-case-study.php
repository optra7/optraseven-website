<?php
/**
 * Case Study Archive
 */
get_header();
?>

<main id="primary" class="site-main archive-case-study">

    <!-- ====== Banner Section ====== -->
    <?php get_template_part('template-parts/archive/case-study/page-banner', null, ['post_id' => get_the_ID()]); ?>
    <!-- ====== Filter Section ====== -->
    <section class="section">
        <div class="container">
            <div class="o7-list-page-filter">
                <div class="o7-list-page-filter__list-wrapper">
                    <ul class="o7-list-page-filter__list">
                        <li class="o7-list-page-filter__filter-item active" data-filter="all">All</li>
                        <?php
                        $terms = get_terms([
                            'taxonomy'   => 'case_study_category', // ✅ must match the registered taxonomy slug exactly
                            'hide_empty' => true,
                        ]);

                        if (!empty($terms) && !is_wp_error($terms)) {
                            foreach ($terms as $term) : ?>
                                <li class="o7-list-page-filter__filter-item"
                                    data-filter="<?php echo esc_attr($term->slug); ?>">
                                    <?php echo esc_html($term->name); ?>
                                </li>
                            <?php
                            endforeach;
                        }
                        ?>
                    </ul>
                </div>

                <!-- Case Study Cards Grid -->
                <div class="o7-list-page-filter__data-list">
                    <div class="o7-list-page-filter__column-left">
                        <?php
                        $args = [
                            'post_type'      => 'case-study',
                            'posts_per_page' => -1,
                        ];
                        $case_query = new WP_Query($args);

                        if ($case_query->have_posts()):
                            while ($case_query->have_posts()): $case_query->the_post();

                                // ACF fields
                                $subtitle  = get_field('subtitle');
                                $platform  = get_field('platform'); // "webflow" or "shopify"
                                $services  = get_field('service');  // array
                                $industry  = get_field('industry');

                                // Featured image
                                $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');

                                // Taxonomy (Case Study Category)
                                $categories = wp_get_post_terms(get_the_ID(), 'case_study_category');
                                $category_name = (!empty($categories) && !is_wp_error($categories)) ? $categories[0]->name : '';
                                ?>

                                <article class="o7-list-page-filter__card">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="o7-list-page-filter__card-image-wrapper">
                                            <?php if ($featured_img): ?>
                                                <img src="<?php echo esc_url($featured_img); ?>"
                                                     alt="<?php the_title_attribute(); ?>"
                                                     loading="lazy"
                                                     decoding="async"
                                                     width="780"
                                                     height="680" />
                                            <?php endif; ?>

                                            <!-- Hover chip (Services list) -->
                                            <?php if ($services): ?>
                                                <div class="o7-hover-chip">
                                                    <div class="o7-hover-chip__bg">
                                                        <svg class="o7-hover-chip__icon" aria-hidden="true" focusable="false">
                                                            <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#chip-radius-1"></use>
                                                        </svg>
                                                        <div class="o7-hover-chip__bg-span-wrapper">
                                                            <span class="o7-hover-chip__bg-span"></span>
                                                            <svg class="o7-hover-chip__bg-span-icon" aria-hidden="true" focusable="false">
                                                                <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#chip-radius-2"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="o7-hover-chip__inner">
                                                        <?php foreach ($services as $index => $service): ?>
                                                            <div class="o7-hover-chip__buton <?php echo $index >= 2 ? 'o7-hover-chip__buton--hidden-mobile' : ''; ?>">
                                                                <?php echo esc_html($service); ?>
                                                            </div>
                                                        <?php endforeach; ?>
                                                        <?php if (count($services) > 2): ?>
                                                            <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-pc">
                                                                +<?php echo count($services) - 2; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <!-- Hover platform icon -->
                                            <?php if ($platform): ?>
                                                <div class="o7-hover-icon o7-hover-icon--<?php echo strtolower($platform); ?> o7-hover-icon--left-icon-box">
                                                    <div class="o7-hover-icon__bg">
                                                        <svg class="o7-hover-icon__icon" aria-hidden="true" focusable="false">
                                                            <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#card-curve-img-1"></use>
                                                        </svg>
                                                        <div class="o7-hover-icon__bg-span-wrapper">
                                                            <span class="o7-hover-icon__bg-span"></span>
                                                            <svg class="o7-hover-icon__bg-span-icon" aria-hidden="true" focusable="false">
                                                                <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#card-curve-img-2"></use>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <div class="o7-hover-icon__inner o7-hover-icon__inner--left-icon-box">
                                                        <picture>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/case-study-pages/case-study-list/hover-icon-<?php echo strtolower($platform); ?>.webp"
                                                                 alt="<?php echo esc_attr($platform); ?> icon"
                                                                 loading="lazy"
                                                                 decoding="async"
                                                                 width="80"
                                                                 height="80" />
                                                        </picture>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="o7-list-page-filter__card-title-wrapper">
                                            <div class="o7-card-category">
                                                <?php if ($industry): ?>
                                                    <div class="o7-card-catagory__title-wrapper">
                                                        <p class="o7-card-catagory__title"><?php echo esc_html($industry); ?></p>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="o7-card-catagory__title-wrapper">
                                                    <?php if ($industry): ?>
                                                        <span class="o7-card-catagory__decorative-dot"></span>
                                                    <?php endif; ?>
                                                    <p class="o7-card-catagory__title"><?php the_title(); ?></p>
                                                </div>
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
