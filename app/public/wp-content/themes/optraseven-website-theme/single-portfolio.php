<?php
get_header();
?>

<main id="primary" class="site-main single-portfolio">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1><?php the_title(); ?></h1>
                <p class="subtitle"><?php the_field('subtitle'); ?></p>
            </header>

            <div class="featured-image">
                <?php the_post_thumbnail('large'); ?>
            </div>

            <div class="entry-content">
                <?php the_field('description'); ?>
            </div>

            <ul class="meta">
                <li><strong>Platform:</strong> <?php the_field('platform'); ?></li>
                <li><strong>Theme:</strong> <?php the_field('theme'); ?></li>
                <li><strong>Apps:</strong> <?php the_field('apps'); ?></li>
                <li><strong>Industry:</strong> <?php the_field('industry'); ?></li>
                <li><strong>Project Link:</strong> <a href="<?php the_field('project_link'); ?>" target="_blank">View Project</a></li>
            </ul>

            <div class="explore-links">
                <?php if (get_field('explore_service')): ?>
                    <a href="<?php the_field('explore_service'); ?>">Explore Service</a>
                <?php endif; ?>

                <?php if (get_field('explore_case_study')): ?>
                    <a href="<?php the_field('explore_case_study'); ?>">Explore Case Study</a>
                <?php endif; ?>

                <?php if (get_field('explore_blog')): ?>
                    <a href="<?php the_field('explore_blog'); ?>">Explore Blog</a>
                <?php endif; ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
