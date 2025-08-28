<?php
get_header();
?>

<main id="primary" class="site-main archive-portfolio">
    <header class="archive-header">
        <h1><?php post_type_archive_title(); ?></h1>
    </header>

    <?php if ( have_posts() ) : ?>
        <div class="portfolio-grid">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No portfolio items found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
