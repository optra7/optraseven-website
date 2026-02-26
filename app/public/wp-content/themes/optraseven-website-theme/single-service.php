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
    
    // Get current post slug for conditional FAQs
    $current_slug = get_post_field('post_name', get_the_ID());
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
        // Conditional FAQs based on service slug
        $faq_data = array(
            'title_pointer' => '',
            'title'         => 'Frequently Asked Questions',
            'sub_title'     => 'Answers to Things You Might Be Wondering',
            'button_text'   => 'Get In Touch',
            'sprite_path'   => get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg',
            'questions'     => array()
        );

        switch ($current_slug) {
            case 'conversion-rate-optimization-cro':
                $faq_data['questions'] = array(
                    array('q' => 'How long does it take to see results from CRO?', 'a' => 'Results vary based on traffic volume and current conversion rates. Typically, you can start seeing meaningful improvements within 60-90 days of implementing our recommendations.'),
                    array('q' => 'What does your CRO process involve?', 'a' => 'Our approach includes comprehensive analytics review, user behavior analysis, A/B testing, heat mapping, and data-driven recommendations for improving your conversion funnel.'),
                    array('q' => 'Do I need a minimum amount of traffic for CRO to be effective?', 'a' => 'Yes, statistically significant results require adequate traffic. We typically recommend at least 1,000-2,000 visitors per month for reliable A/B testing results.'),
                    array('q' => 'Will CRO affect my SEO rankings?', 'a' => 'Our CRO strategies are designed to complement SEO efforts. By improving user experience and engagement metrics, CRO often positively impacts search rankings.'),
                );
                break;
                
            case 'webflow':
                $faq_data['questions'] = array(
                    array('q' => 'What makes Webflow different from other website builders?', 'a' => 'Webflow combines visual design freedom with clean, semantic code output. Unlike page builders that generate bloated code, Webflow produces professional-grade HTML, CSS, and JavaScript while giving you complete design control.'),
                    array('q' => 'Can you migrate my WordPress or Wix site to Webflow?', 'a' => 'Absolutely! We handle full content migration, design rebuild, and CMS structure setup. Our team ensures your new Webflow site maintains or improves your current functionality and user experience.'),
                    array('q' => 'Will my Webflow site be SEO-friendly?', 'a' => 'Yes, we implement comprehensive SEO best practices including clean semantic HTML, automatic sitemap generation, meta tag optimization, proper heading structure, and schema markup where needed.'),
                    array('q' => 'Can I update content myself after the site is built?', 'a' => 'Definitely. Webflow\'s intuitive CMS allows you to edit text, images, and other content without any coding knowledge. We can also set up custom editing permissions for your team members.'),
                );
                break;
                
            case 'shopify':
                $faq_data['questions'] = array(
                    array('q' => 'Can Optraseven migrate my existing store to Shopify?', 'a' => 'Yes, we specialize in seamless migrations from platforms like WooCommerce, Magento, BigCommerce, and others. Our process ensures zero data loss and minimal downtime during the transition.'),
                    array('q' => 'Will I lose my SEO rankings when migrating to Shopify?', 'a' => 'Not at all. We implement comprehensive 301 redirects, preserve URL structures where beneficial, and maintain your meta data to protect your hard-earned search rankings throughout the migration.'),
                    array('q' => 'Do you offer post-launch support?', 'a' => 'Absolutely. We provide ongoing support packages covering performance monitoring, bug fixes, store updates, and staff training to ensure your Shopify store continues to thrive after launch.'),
                    array('q' => 'What advantages does Shopify Plus offer for growing brands?', 'a' => 'Shopify Plus provides enterprise-level features including Shopify Flow automation, Launchpad for sales events, dedicated B2B functionality, wholesale channels, and priority 24/7 support for high-growth businesses.'),
                );
                break;
                
            case 'custom-application-development':
                $faq_data['questions'] = array(
                    array('q' => 'What is headless CMS and why use it?', 'a' => 'A headless CMS separates content management from front-end presentation, offering greater flexibility. Combined with Next.js, it delivers blazing-fast performance, enhanced security, and the ability to deliver content across multiple platforms from a single source.'),
                    array('q' => 'Why choose Next.js for a business website?', 'a' => 'Next.js offers exceptional performance through server-side rendering, static generation, and automatic optimization. It\'s ideal for SEO-critical sites, e-commerce platforms, and custom web applications requiring scalability.'),
                    array('q' => 'What types of custom web applications do you build?', 'a' => 'We develop tailored solutions including customer portals, SaaS platforms, internal workflow tools, dashboards, and complex business applications designed specifically for your unique requirements.'),
                    array('q' => 'Can you integrate Payload, Strapi, or other headless CMS platforms?', 'a' => 'Yes, we have extensive experience integrating with leading headless CMS platforms. We\'ll help you choose and configure the right solution for your content management needs.'),
                );
                break;
                
            case 'testing-quality-assurance':
                $faq_data['questions'] = array(
                    array('q' => 'Do you provide manual or automated testing?', 'a' => 'We offer both approaches based on project needs. Manual testing covers UX, visual consistency, and exploratory scenarios, while automated testing handles regression, performance monitoring, and CI/CD integration.'),
                    array('q' => 'How do you track and report bugs?', 'a' => 'We deliver comprehensive QA reports using tools like JIRA, Trello, or your preferred project management system. Each issue includes detailed steps to reproduce, expected vs. actual results, and priority levels.'),
                    array('q' => 'What does your QA process cover?', 'a' => 'Our testing encompasses functionality, cross-browser compatibility, responsive design, performance optimization, security vulnerabilities, and user experience across different devices and platforms.'),
                    array('q' => 'When should QA be involved in the development process?', 'a' => 'We recommend involving QA from the project start. Early involvement helps identify potential issues before they become costly problems and ensures quality is built into every development phase.'),
                );
                break;
                
            case 'maintenance-support':
                $faq_data['questions'] = array(
                    array('q' => 'What does your maintenance package include?', 'a' => 'Our comprehensive maintenance includes security updates, core and plugin updates, daily backups, performance monitoring, uptime checks, and priority bug fixes. We keep your site secure and running smoothly.'),
                    array('q' => 'How quickly do you respond to issues?', 'a' => 'Response times vary by support tier. Standard packages offer 24-hour response for critical issues, while premium plans include 4-hour response windows and 24/7 emergency support.'),
                    array('q' => 'Do you offer content updates and minor feature additions?', 'a' => 'Yes, our maintenance packages include monthly development hours for content updates, minor enhancements, and optimizations. Unused hours typically roll over with annual commitments.'),
                    array('q' => 'Can you take over maintenance of a site built by another agency?', 'a' => 'Absolutely. We can quickly onboard existing sites, perform a thorough security audit, and begin providing ongoing maintenance and support immediately after the transition.'),
                );
                break;
                
            default:
                // Default FAQs if no matching service
                $faq_data['questions'] = array(
                    array('q' => 'How long does a typical project take to complete?', 'a' => 'Timelines vary based on scope, but most projects take 4–8 weeks from discovery to launch.'),
                    array('q' => 'What is your design and development process?', 'a' => 'We follow a proven step-by-step process including discovery, strategy, design, development, testing, and launch phases.'),
                    array('q' => 'What kind of testing do you perform before launch?', 'a' => 'We conduct thorough functional testing, cross-browser compatibility checks, responsive design verification, performance optimization, and security audits.'),
                    array('q' => 'Do you implement SEO best practices?', 'a' => 'Yes, we follow current SEO best practices including semantic HTML, optimized page speed, proper heading structure, meta data optimization, and schema markup where appropriate.'),
                );
        }

        get_template_part('template-parts/faq', null, $faq_data);
        ?>

        <?php get_template_part('template-parts/single/service/explore-more', null, ['post_id' => get_the_ID(), 'post_type' => 'service']); ?>
    </main>

<?php endwhile; ?>

<?php get_footer(); ?>
