<?php
/**
 * Template: Single Service
 */
get_header();

while (have_posts()) : the_post();

// Get ACF & core fields
    $hero_image    = get_the_post_thumbnail_url(get_the_ID(), 'full');
    $subtitle      = get_field('subtitle');
    $platform      = get_field('platform');
    $explore_blog  = get_field('explore_blog');
    $case_study    = get_field('explore_case_study');
    $portfolio     = get_field('explore_portfolio');

// Get content and extract <h2> headings for stepper sidebar
    $content = apply_filters('the_content', get_the_content());
    preg_match_all('/<h2[^>]*>(.*?)<\/h2>/i', $content, $matches);
    $headings = $matches[1] ?? [];

// Add IDs to each <h2> for scrollspy
    $content_with_ids = preg_replace_callback('/<h2[^>]*>(.*?)<\/h2>/i', function ($m) {
        $id = sanitize_title($m[1]);
        return '<h2 id="' . esc_attr($id) . '" class="o7-stepper-article__para-title o7-stepper-service-details__article-title">' . $m[1] . '</h2>';
    }, $content);
    ?>

    <main>
        <section class="section o7-stepper o7-stepper-service-details">
            <?php if ($hero_image): ?>
                <img src="<?php echo esc_url($hero_image); ?>"
                     alt="<?php the_title_attribute(); ?>"
                     class="o7-stepper-service-details__hero-image">
            <?php endif; ?>

            <div class="container o7-stepper-wrapper">
                <!-- Sidebar Navigation -->
                <nav class="o7-stepper__sidebar o7-stepper-service-details__sidebar">
                    <?php if (!empty($headings)) : ?>
                        <ul class="o7-stepper__nav">
                            <?php foreach ($headings as $index => $heading) :
                                $slug = sanitize_title($heading);
                                $active = $index === 0 ? ' o7-stepper__nav-item--active' : '';
                                ?>
                                <li class="o7-stepper__nav-item o7-stepper-service-details__nav-item<?php echo esc_attr($active); ?>" tabindex="0">
                                    <a href="#<?php echo esc_attr($slug); ?>">
                                        <span class="o7-stepper__nav-bullet o7-stepper__nav-bullet--white"></span>
                                        <?php echo esc_html($heading); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </nav>

                <!-- Article Content -->
                <div class="o7-stepper__article-wrapper o7-stepper-service-details__article-wrapper">
                    <article class="o7-stepper-article">
                        <?php if ($subtitle): ?>
                            <p class="o7-stepper-article__para o7-stepper-service-details__para o7-stepper-service-details__para-top-title">
                                <?php echo wp_kses_post($subtitle); ?>
                            </p>
                        <?php endif; ?>

                        <?php echo $content_with_ids; ?>

                        <!-- Optional Meta Info -->
                        <?php if ($platform): ?>
                            <p class="o7-stepper-article__para"><strong>Platform:</strong> <?php echo esc_html($platform); ?></p>
                        <?php endif; ?>

                        <!-- Explore Links -->
                        <div class="o7-service-explore">
                            <?php if ($explore_blog): ?>
                                <p><strong>Explore Blog:</strong> <a href="<?php echo esc_url($explore_blog); ?>"><?php echo esc_html(get_the_title($explore_blog)); ?></a></p>
                            <?php endif; ?>
                            <?php if ($case_study): ?>
                                <p><strong>Explore Case Study:</strong> <a href="<?php echo esc_url($case_study); ?>"><?php echo esc_html(get_the_title($case_study)); ?></a></p>
                            <?php endif; ?>
                            <?php if ($portfolio): ?>
                                <p><strong>Explore Portfolio:</strong> <a href="<?php echo esc_url($portfolio); ?>"><?php echo esc_html(get_the_title($portfolio)); ?></a></p>
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

<?php endwhile; ?>

<?php get_footer(); ?>
