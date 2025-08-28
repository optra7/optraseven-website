<?php
/**
 * Case Study Archive
 */
get_header();
?>

<main id="primary" class="site-main archive-case-study">
    <header>
        <h1><?php post_type_archive_title(); ?></h1>
    </header>

    <?php if ( have_posts() ) : ?>
        <div class="case-study-grid">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'case-study' ); ?>
            <?php endwhile; ?>
        </div>
        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No case studies found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
