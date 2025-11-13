<?php get_header(); ?>

<main>
    <?php
    while (have_posts()): the_post();
        the_title('<h1>', '</h1>');
        the_content();
    endwhile;
    ?>
    <a href="<?php echo home_url(); ?>">Go back home</a>
</main>

<?php get_footer(); ?>
