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
                            $posts = $case_query->posts;
                            $total = count($posts);
                            $half = ceil($total / 2); // split in half

                            // LEFT column loop
                            for ($i = 0; $i < $half; $i++):
                                $post_id = $posts[$i]->ID;
                                setup_postdata($posts[$i]);

                                $subtitle  = get_field('subtitle', $post_id);
                                $platform  = get_field('platform', $post_id);
                                $services  = get_field('service', $post_id);
                                $industry  = get_field('industry', $post_id);
                                $featured_img = get_the_post_thumbnail_url($post_id, 'large');
                                ?>
                                <article class="o7-list-page-filter__card">
                                    <a href="<?php echo get_permalink($post_id); ?>">
                                        <div class="o7-list-page-filter__card-image-wrapper">
                                            <?php if ($featured_img): ?>
                                                <img src="<?php echo esc_url($featured_img); ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>" width="780" height="680" loading="lazy" decoding="async">
                                            <?php endif; ?>

                                            <?php if ($platform): ?>
                                                <div class="o7-hover-icon o7-hover-icon--<?php echo strtolower($platform); ?> o7-hover-icon--left-icon-box">
                                                    <div class="o7-hover-icon__inner o7-hover-icon__inner--left-icon-box">
                                                        <picture>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/case-study-pages/case-study-list/hover-icon-<?php echo strtolower($platform); ?>.webp" alt="<?php echo esc_attr($platform); ?>" width="80" height="80" />
                                                        </picture>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="o7-list-page-filter__card-title-wrapper">
                                            <div class="o7-card-category">
                                                <?php if ($industry): ?>
                                                    <p class="o7-card-catagory__title"><?php echo esc_html($industry); ?></p>
                                                <?php endif; ?>
                                                <span class="o7-card-catagory__decorative-dot"></span>
                                                <p class="o7-card-catagory__title"><?php echo esc_html(get_the_title($post_id)); ?></p>
                                            </div>

                                            <?php if ($subtitle): ?>
                                                <h3 class="o7-list-page-filter__card-tagline"><?php echo esc_html($subtitle); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </article>
                            <?php endfor; ?>
                        <?php endif; ?>
                    </div>

                    <!-- RIGHT column -->
                    <div class="o7-list-page-filter__column-right">
                        <?php
                        if ($case_query->have_posts()):
                            // RIGHT column loop
                            for ($i = $half; $i < $total; $i++):
                                $post_id = $posts[$i]->ID;
                                setup_postdata($posts[$i]);

                                $subtitle  = get_field('subtitle', $post_id);
                                $platform  = get_field('platform', $post_id);
                                $services  = get_field('service', $post_id);
                                $industry  = get_field('industry', $post_id);
                                $featured_img = get_the_post_thumbnail_url($post_id, 'large');
                                ?>
                                <article class="o7-list-page-filter__card">
                                    <a href="<?php echo get_permalink($post_id); ?>">
                                        <div class="o7-list-page-filter__card-image-wrapper">
                                            <?php if ($featured_img): ?>
                                                <img src="<?php echo esc_url($featured_img); ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>" width="780" height="680" loading="lazy" decoding="async">
                                            <?php endif; ?>

                                            <?php if ($platform): ?>
                                                <div class="o7-hover-icon o7-hover-icon--<?php echo strtolower($platform); ?> o7-hover-icon--left-icon-box">
                                                    <div class="o7-hover-icon__inner o7-hover-icon__inner--left-icon-box">
                                                        <picture>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/images/case-study-pages/case-study-list/hover-icon-<?php echo strtolower($platform); ?>.webp" alt="<?php echo esc_attr($platform); ?>" width="80" height="80" />
                                                        </picture>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="o7-list-page-filter__card-title-wrapper">
                                            <div class="o7-card-category">
                                                <?php if ($industry): ?>
                                                    <p class="o7-card-catagory__title"><?php echo esc_html($industry); ?></p>
                                                <?php endif; ?>
                                                <span class="o7-card-catagory__decorative-dot"></span>
                                                <p class="o7-card-catagory__title"><?php echo esc_html(get_the_title($post_id)); ?></p>
                                            </div>

                                            <?php if ($subtitle): ?>
                                                <h3 class="o7-list-page-filter__card-tagline"><?php echo esc_html($subtitle); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </article>
                            <?php endfor;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>


            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
