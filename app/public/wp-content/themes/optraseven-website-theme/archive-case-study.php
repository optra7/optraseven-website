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
                <div class="o7-page-banner__image">
                    <?php
                    $banner_image = get_field('banner_image', 'option');
                    if ($banner_image) :
                        echo wp_get_attachment_image($banner_image['ID'], 'full', false, [
                            'alt' => $banner_image['alt'],
                            'decoding' => 'async',
                            'fetchpriority' => 'high',
                            'class' => 'case-study-banner-img'
                        ]);
                    endif;
                    ?>
                </div>
                <div class="o7-page-banner__image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- ====== Filter Section ====== -->
    <section class="section">
        <div class="container">
            <div class="o7-list-page-filter">

                <!-- Filter List (Taxonomies or ACF) -->
                <div class="o7-list-page-filter__list-wrapper">
                    <ul class="o7-list-page-filter__list">
                        <li class="o7-list-page-filter__filter-item" data-filter="all">All</li>

                        <?php
                        $terms = get_terms([
                            'taxonomy' => 'case_study_category',
                            'hide_empty' => true,
                        ]);

                        if (!empty($terms) && !is_wp_error($terms)) :
                            foreach ($terms as $term) :
                                echo '<li class="o7-list-page-filter__filter-item" data-filter="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</li>';
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div>

                <!-- Case Study Cards Grid -->
                <div class="o7-list-page-filter__data-list">
                    <div class="o7-list-page-filter__column-left">

                        <?php
                        $case_studies = new WP_Query([
                            'post_type' => 'case-study',
                            'posts_per_page' => -1,
                        ]);

                        if ($case_studies->have_posts()) :
                            $count = 0;
                            while ($case_studies->have_posts()) : $case_studies->the_post();
                                $count++;
                                $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                $industry = get_field('industry');
                                $platform = get_field('platform');
                                $category = get_the_terms(get_the_ID(), 'case_study_category');
                                $tagline = get_field('subtitle');
                                $skills = get_field('service');
                                ?>

                                <article class="o7-list-page-filter__card" data-category="<?php echo esc_attr($industry); ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="o7-list-page-filter__card-image-wrapper">
                                            <?php if ($featured_image) : ?>
                                                <img src="<?php echo esc_url($featured_image); ?>"
                                                     alt="<?php the_title_attribute(); ?>"
                                                     loading="lazy"
                                                     decoding="async"
                                                     width="780"
                                                     height="680" />
                                            <?php endif; ?>

                                            <!-- Hover chip (services) -->
                                            <?php if ($skills) : ?>
                                                <div class="o7-hover-chip">
                                                    <div class="o7-hover-chip__bg">
                                                        <svg class="o7-hover-chip__icon"><use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#chip-radius-1"></use></svg>
                                                        <div class="o7-hover-chip__bg-span-wrapper">
                                                            <span class="o7-hover-chip__bg-span"></span>
                                                            <svg class="o7-hover-chip__bg-span-icon"><use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#chip-radius-2"></use></svg>
                                                        </div>
                                                    </div>
                                                    <div class="o7-hover-chip__inner">
                                                        <?php
                                                        $count_services = count($skills);
                                                        $max = 2;
                                                        foreach ($skills as $i => $service) :
                                                            if ($i < $max) :
                                                                echo '<div class="o7-hover-chip__buton">' . esc_html($service->name ?? $service) . '</div>';
                                                            elseif ($i === $max) :
                                                                echo '<div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-pc">+' . ($count_services - $max) . '</div>';
                                                                break;
                                                            endif;
                                                        endforeach;
                                                        ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <!-- Platform icon -->
                                            <?php if ($platform) : ?>
                                                <div class="o7-hover-icon o7-hover-icon--<?php echo esc_attr(strtolower($platform)); ?> o7-hover-icon--left-icon-box">
                                                    <div class="o7-hover-icon__bg">
                                                        <svg class="o7-hover-icon__icon"><use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#card-curve-img-1"></use></svg>
                                                        <div class="o7-hover-icon__bg-span-wrapper">
                                                            <span class="o7-hover-icon__bg-span"></span>
                                                            <svg class="o7-hover-icon__bg-span-icon"><use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#card-curve-img-2"></use></svg>
                                                        </div>
                                                    </div>
                                                    <div class="o7-hover-icon__inner o7-hover-icon__inner--left-icon-box">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/platform-icons/<?php echo esc_attr(strtolower($platform)); ?>.webp"
                                                             alt="<?php echo esc_attr($platform); ?> icon"
                                                             loading="lazy" width="80" height="80" />
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Card Title -->
                                        <div class="o7-list-page-filter__card-title-wrapper">
                                            <div class="o7-card-category">
                                                <?php if (!empty($category)) : ?>
                                                    <div class="o7-card-catagory__title-wrapper">
                                                        <p class="o7-card-catagory__title"><?php echo esc_html($category[0]->name); ?></p>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="o7-card-catagory__title-wrapper">
                                                    <span class="o7-card-catagory__decorative-dot"></span>
                                                    <p class="o7-card-catagory__title"><?php the_title(); ?></p>
                                                </div>
                                            </div>
                                            <h3 class="o7-list-page-filter__card-tagline"><?php echo esc_html($tagline); ?></h3>
                                        </div>
                                    </a>
                                </article>

                            <?php
                                // Close column divs every few posts if you want a masonry-style grid
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p>No Case Studies found.</p>';
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
