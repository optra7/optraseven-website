<?php
/**
 * Blog Archive
 */
get_header();
?>

<main id="primary" class="site-main archive-blog">
    <header>
        <h1><?php post_type_archive_title(); ?></h1>
    </header>

    <?php if ( have_posts() ) : ?>
        <div class="blog-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'post' ); ?>
            <?php endwhile; ?>
        </div>
        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No blog posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
