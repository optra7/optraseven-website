<?php
/**
 * Template for Homepage
 */
get_header();
?>

<main id="primary" class="site-main homepage">
    <article <?php post_class(); ?>>
        <header class="screen-reader-text">
            <h1><?php the_title(); ?></h1>
        </header>

        <div class="page-content">
            <?php
            // Default editor content
            the_content();

            // ACF Flexible Content sections
            if (function_exists('have_rows') && have_rows('homepage_sections')) :
                while (have_rows('homepage_sections')) : the_row();

                    if (get_row_layout() === 'case_study_slider') :
                        get_template_part('template-parts/content', 'case-study-slider');

                    elseif (get_row_layout() === 'portfolio_slider') :
                        get_template_part('template-parts/content', 'portfolio-slider');

                    elseif (get_row_layout() === 'hero_section') :
                        get_template_part('template-parts/content', 'hero');

                    elseif (get_row_layout() === 'testimonials') :
                        get_template_part('template-parts/content', 'testimonials');

                        // Add more layouts as needed...
                    endif;

                endwhile;
            else :
                // Optional fallback if ACF not used or empty
                get_template_part('template-parts/content', 'case-study-slider');
                get_template_part('template-parts/content', 'portfolio-slider');
            endif;
            ?>

        </div>
    </article>
</main>

<?php get_footer(); ?>
