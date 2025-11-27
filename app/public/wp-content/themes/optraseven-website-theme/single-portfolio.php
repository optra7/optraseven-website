<?php

/**
 * Template for single Portfolio items
 */
get_header();
?>

<main id="primary" class="main inner-page-main site-main single-portfolio">
    <?php if (have_posts()) : while (have_posts()) : the_post();
            $sidebar_fields = [
                'Services'   => get_field('service'), // already array
                'Industries' => get_field('industry') ? [get_field('industry')] : [],
                'Apps'       => get_field('apps') ? [get_field('apps')] : [],
                'Themes'     => get_field('theme') ? [get_field('theme')] : [],
                'Platform'   => get_field('platform') ? [get_field('platform')] : [],
            ];
    ?>
            <section class="section section-no-space-top">
                <div class="container">

                    <!-- Title (Mobile) -->
                    <?php if (wp_is_mobile()) : ?>
                        <h1 class="o7-details-page-post__title o7-details-page-post__title--mobile">
                            <?php the_title(); ?>
                        </h1>
                    <?php endif; ?>
                    <?php get_template_part('template-parts/single/page-banner', null, ['post_id' => get_the_ID()]); ?>

                    <div class="o7-details-page-post-wrapper">
                        <aside class="o7-details-page-sidebar">
                            <?php get_template_part('template-parts/single/portfolio/page-sidebar', null, ['post_id' => get_the_ID(), 'sidebar_fields' => $sidebar_fields]); ?>
                        </aside>
                        <article class="o7-details-page-post">
                            <?php get_template_part('template-parts/single/page-content', null, ['post_id' => get_the_ID()]); ?>
                        </article>
                    </div>
                </div>
            </section>
            <?php get_template_part('template-parts/single/portfolio/explore-more', null, ['post_id' => get_the_ID(), 'post_type' => 'portfolio']); ?>

    <?php endwhile;
    endif; ?>

</main>

<?php get_footer(); ?>