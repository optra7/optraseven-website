<?php
/**
 * Template Name: DSAR
 */
get_header();
?>

<main id="primary" class="site-main dsar-page">
    <article <?php post_class(); ?>>
        <header>
            <h1><?php the_title(); ?></h1>
        </header>

        <div class="page-content">
            <?php
            // Default editor content
            the_content();

            ?>

        </div>
    </article>
</main>

<?php get_footer(); ?>
