<?php
/**
 * Single Blog Post
 */

get_header();
?>

<main id="primary" class="site-main single-blog">
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <header class="entry-header">
                <h1><?php the_title(); ?></h1>
                <?php if (get_field('subtitle')): ?>
                    <p class="subtitle"><?php the_field('subtitle'); ?></p>
                <?php endif; ?>
                <p class="meta">
                    By <?php the_field('author_name'); ?> •
                    <?php echo get_the_date(); ?>
                </p>
            </header>

            <?php if (has_post_thumbnail()): ?>
                <div class="featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <div class="meta">
                <?php
                $platform = get_field('platform');
                if ( $platform ) : ?>
                    <p><strong>Platform:</strong> <?php echo esc_html($platform); ?></p>
                <?php endif; ?>
            </div>

            <div class="explore-links">
                <?php if ($service = get_field('explore_service')): ?>
                    <div class="explore-related explore-service">
                        <p><strong>Explore Service:</strong>
                            <a href="<?php echo esc_url($service); ?>"><?php echo esc_html($service); ?></a>
                        </p>
                    </div>
                <?php endif; ?>

                <?php if ($case_study = get_field('explore_case_study')): ?>
                    <div class="explore-related explore-case-study">
                        <p><strong>Explore Case Study:</strong>
                            <a href="<?php echo esc_url($case_study); ?>"><?php echo esc_html($case_study); ?></a>
                        </p>
                    </div>
                <?php endif; ?>

                <?php if ($portfolio = get_field('explore_portfolio')): ?>
                    <div class="explore-related explore-portfolio">
                        <p><strong>Explore Portfolio:</strong>
                            <a href="<?php echo esc_url($portfolio); ?>"><?php echo esc_html($portfolio); ?></a>
                        </p>
                    </div>
                <?php endif; ?>
            </div>

            <?php comments_template(); ?>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
