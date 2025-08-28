<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package optraseven_official_theme
 */

get_header();
?>

<main id="primary" class="site-main blog-single">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
                <h1><?php the_title(); ?></h1>
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('large');
                } ?>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <aside class="blog-acf-meta">
                <?php
                // Platform (Select)
                $platform = get_field('platform');
                if ( $platform ) : ?>
                    <p><strong>Platform:</strong> <?php echo esc_html($platform); ?></p>
                <?php endif; ?>

                <?php
                // Explore Service (Link field)
                $service = get_field('explore_service');

                if ( $service ) : ?>
                    <div class="explore-related explore-service">
                        <p><strong>Explore Service:</strong> <?php echo esc_html($service); ?></p>
                    </div>
                <?php endif; ?>

                <?php
                // Explore Case Study (Link field)
                $case_study = get_field('explore_case_study');
                if ( $case_study ) : ?>
                    <div class="explore-related explore-case-study">
                        <p><strong>Explore Case Study:</strong> <?php echo esc_html($case_study); ?></p>
                    </div>
                <?php endif; ?>

                <?php
                // Explore Portfolio (Link field)
                $portfolio = get_field('explore_portfolio');
                if ( $portfolio ) : ?>
                    <div class="explore-related explore-portfolio">
                        <p><strong>Explore Portfolio:</strong> <?php echo esc_html($portfolio); ?></p>
                    </div>
                <?php endif; ?>
            </aside>

        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
