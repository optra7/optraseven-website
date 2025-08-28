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
                <?php the_content(); ?>
            </div>

            <div class="meta">
                <?php
                $platform = get_field('platform');
                if ( $platform ) : ?>
                    <p><strong>Platform:</strong> <?php echo esc_html($platform); ?></p>
                <?php endif; ?>
                <?php
                $theme = get_field('theme');
                if ( $theme ) : ?>
                    <p><strong>Theme:</strong> <?php echo esc_html($theme); ?></p>
                <?php endif; ?>
                <?php
                $apps = get_field('apps');
                if ( $apps ) : ?>
                    <p><strong>Apps:</strong> <?php echo esc_html($apps); ?></p>
                <?php endif; ?>
                <?php
                $industry = get_field('industry');
                if ( $industry ) : ?>
                    <p><strong>Industry:</strong> <?php echo esc_html($industry); ?></p>
                <?php endif; ?>
                <?php
                $project_link = get_field('project_link');
                if ( $project_link ) : ?>
                    <p><strong>Project Link:</strong> <?php echo esc_html($project_link); ?></p>
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

                <?php if ($explore_blog = get_field('explore_blog')): ?>
                    <div class="explore-related explore-blog">
                        <p><strong>Explore Blog:</strong>
                            <a href="<?php echo esc_url($explore_blog); ?>"><?php echo esc_html($explore_blog); ?></a>
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
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
