<?php
/**
 * Template: Single Service
 */
get_header();

while (have_posts()) : the_post();

// Get ACF & core fields
    $hero_image    = get_the_post_thumbnail_url(get_the_ID(), 'full');
    $banner_image = get_field('banner_image');
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

    <main class="main inner-page-main">
        <section class="section section-no-space-top o7-stepper o7-stepper-service-details">
            <?php if (!empty($banner_image)) : ?>

                <!-- Show Banner Image -->
                <img src="<?php echo esc_url($banner_image); ?>"
                     alt="<?php the_title_attribute(); ?>"
                     class="o7-stepper-service-details__hero-image"
                     decoding="async"
                     fetchpriority="high">

            <?php elseif (!empty($hero_image)) : ?>

                <!-- Show Hero Image -->
                <img src="<?php echo esc_url($hero_image); ?>"
                     alt="<?php the_title_attribute(); ?>"
                     class="o7-stepper-service-details__hero-image"
                     decoding="async"
                     fetchpriority="high">

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
                        <?php echo $content_with_ids; ?>
                    </article>
                </div>
            </div>
        </section>

        <?php
        $faq_data = array(
            'title_pointer' => '', // optional small accent text (left dot in your original)
            'title'         => 'Frequently Asked Questions',
            'sub_title'     => 'Answers to Things You Might Be Wondering',
            'button_text'   => 'Get In Touch',
            'sprite_path'   => get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg',
            'questions'     => array(
                array('q' => 'How long does a typical project take to complete?', 'a' => 'Timelines vary based on scope, but most projects take 4–8 weeks.'),
                array('q' => 'What is your design and development process?', 'a' => 'We follow a step-by-step process including discovery, design, development, testing, and launch.'),
                array('q' => 'What kind of testing do you do before launch?', 'a' => 'We perform functional testing, responsiveness checks, browser compatibility, and bug fixes.'),
                array('q' => 'Do you provide SEO best practices in your builds?', 'a' => 'Yes, we follow on-site SEO best practices like optimized tags, speed, and structure.'),
            ),
        );

        get_template_part('template-parts/faq', null, $faq_data);
        ?>

        <?php get_template_part('template-parts/single/service/explore-more', null, ['post_id' => get_the_ID(), 'post_type' => 'service']); ?>
    </main>

<?php endwhile; ?>

<?php get_footer(); ?>
