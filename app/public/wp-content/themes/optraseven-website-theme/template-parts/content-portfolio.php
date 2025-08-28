<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('medium'); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_field('subtitle'); ?></p>
    </a>
</article>
