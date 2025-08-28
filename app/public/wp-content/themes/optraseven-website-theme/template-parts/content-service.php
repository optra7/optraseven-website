<?php
/**
 * Service Archive
 */
get_header();
?>

<main id="primary" class="site-main archive-service">
    <header>
        <h1><?php post_type_archive_title(); ?></h1>
    </header>

    <?php if ( have_posts() ) : ?>
        <div class="service-grid">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'service' ); ?>
            <?php endwhile; ?>
        </div>
        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No services found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
