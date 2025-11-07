<?php
/**
 * Single Case Study
 */
get_header();
?>

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
