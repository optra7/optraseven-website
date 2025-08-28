<article <?php post_class('blog-item'); ?> id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('medium'); ?>
        <h2><?php the_title(); ?></h2>
        <p class="subtitle"><?php the_field('subtitle'); ?></p>
    </a>
</article>
