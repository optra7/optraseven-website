<?php

/**
 * Template for Homepage
 */
get_header();
?>

<main id="primary" class="site-main homepage main">
    <section class="section section-hero section-no-space-top">
        <div class="container">
            <div class="o7-hero">
                <div class="o7-hero__inner">
                    <div class="wraper">
                        <div class="o7-hero__inner-placeholder">
                            <span class="o7-hero__placeholder-span"></span>
                            <div class="o7-hero__placeholder-icon-wraper">
                                <svg class="o7-hero__placeholder-icon" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 14" aria-hidden="true" focusable="false">
                                    <path d="M0 14C0 5.09091 8.66667 0 16 0H0V14Z" fill="#F5F5F5" />
                                </svg>
                                <svg class="o7-hero__placeholder-icon" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 16 14" aria-hidden="true" focusable="false">
                                    <g transform="scale(-1,1) translate(-16,0)">
                                        <path d="M0 14C0 5.09091 8.66667 0 16 0H0V14Z" fill="#F5F5F5" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="o7-hero__content-holder">
                        <div class="o7-trust-badge-ratings--chip">
                            <div class="o7-trust-badge-ratings__inner">
                                <span class="o7-trust-badge-ratings__rating">4.9</span>
                                <svg class="o7-icon o7-trust-badge-ratings__star" aria-hidden="true"
                                    focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#star" ?>></use>
                                </svg>
                            </div>
                            <span class="o7-trust-badge-ratings__review-text">
                                Based on 45+ reviews
                            </span>
                        </div>
                        <div class="o7-hero__title-wrapper">
                            <h1 class="o7-hero__title">
                                <span class="o7-hero__title-span">
                                    Crafting Top-notch Shopify
                                    <svg class="o7-hero__curve-icon o7-hero__curve-icon-top-right"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14" aria-hidden="true"
                                        focusable="false">
                                        <path d="M0 14C0 5.09091 8.66667 0 16 0H0V14Z" fill="#F5F5F5" />
                                    </svg>
                                </span><br />
                                <span class="o7-hero__title-span">
                                    Website for Seamless
                                    <svg class="o7-hero__curve-icon o7-hero__curve-icon-middle"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14" aria-hidden="true"
                                        focusable="false">
                                        <path d="M0 14C0 5.09091 8.66667 0 16 0H0V14Z" fill="#F5F5F5" />
                                    </svg>
                                </span><br />
                                <span class="o7-hero__title-span hero__title-span--mobile">
                                    eCommerce
                                    <svg class="o7-hero__curve-icon o7-hero__curve-icon-bottom"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14" aria-hidden="true"
                                        focusable="false">
                                        <path d="M0 14C0 5.09091 8.66667 0 16 0H0V14Z" fill="#F5F5F5" />
                                    </svg>
                                </span>
                            </h1>
                        </div>
                        <div class="o7-hero__button-chip-wrapper">
                            <div class="o7-hero__button-wrapper">
                                <a href="https://cal.com/optraseven/appointment" target="_blank" class="btn btn--secondary btn--medium o7-hero__button">
                                    Book a Call
                                    <svg class="fee-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right" ?>></use>
                                    </svg>
                                </a>
                            </div>
                            <svg class="o7-hero__curve-icon o7-hero__curver-icon-top"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14" aria-hidden="true"
                                focusable="false">
                                <path d="M0 14C0 5.09091 8.66667 0 16 0H0V14Z" fill="#F5F5F5" />
                            </svg>
                            <svg class="o7-hero__curve-icon o7-hero__curve-icon-bottom-1024"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 14" aria-hidden="true"
                                focusable="false">
                                <path d="M0 14C0 5.09091 8.66667 0 16 0H0V14Z" fill="#F5F5F5" />
                            </svg>
                        </div>
                        <div class="o7-hero__curve-icons">
                        </div>
                    </div>
                </div>
            </div>

            <div class="o7-hero__image">
                <picture>
                    <source media="(min-width:1024px)" srcset=<?= get_template_directory_uri() . "/assets/images/homepage/Hero-image.webp" ?> />
                    <source media="(min-width:769px)" srcset=<?= get_template_directory_uri() . "/assets/images/homepage/Hero-image-tab.webp" ?> />
                    <source media="(min-width:100px)" srcset=<?= get_template_directory_uri() . "/assets/images/homepage/Hero-image-mobile.webp" ?> />
                    <img width="1600px" height="950px" src=<?= get_template_directory_uri() . "./images/homepage/Hero-image.webp" ?> alt="" />
                </picture>
            </div>
        </div>
    </section>

    <?php
    $logo_images = [
        'AZUNA.webp',
        'Magemontreal.webp',
        'Ruggable.webp',
        'illuma wellness red.webp',
        'monks.webp',
        'ECCO BELLA.webp',
        'beard blade.webp',
        'Vt labs.webp',
        'VERVE coffee roasters.webp',
        'Duck design.webp',
        'flourist.webp'
    ];

    get_template_part('template-parts/logo-slider', null, ['images' => $logo_images, 'path' => '/assets/images/homepage/']);

    get_template_part('template-parts/content', 'portfolio-slider');

    get_template_part('template-parts/content', 'service-section');

    get_template_part('template-parts/content', 'case-study-slider');

    $logo_images = [
        'Nextjs.webp',
        'Oracle_logo.webp',
        'sql-database-generic-svgrepo-com.webp',
        'hydrogen.webp',
        'Microsoft_Azure_Logo.webp',
        'Webflow.webp',
        'express.webp',
        'liquid.webp',
        'remix.webp',
        'Framer_Logo_Core 1.webp',
        'aws.webp',
        'Shopify_logo_2018.webp',
        'Google_Cloud_logo.webp'
    ];

    get_template_part('template-parts/logo-slider', null, ['images' => $logo_images, 'path' => '/assets/images/homepage/']);
    ?>

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

    <?php
    get_template_part('template-parts/testimonial-slider', null, [
        'title_pointer' => ' ',
        'title' => 'Chapters From Our Client Journey',
        'subtitle' => 'What Our Clients Say About Us',
        'testimonials' => [
            [
                'client_image' => get_template_directory_uri() . '/assets/images/testimonials/clients/Amelia_James.webp',
                'client_name' => 'Emily Stone',
                'client_title' => 'Marketing Director',
                'blockquote' => '   OptraSeven was a critical partner in our branding and website development. They took
                                    an innovative approach that was highly collaborative with our team and executed the
                                    program in a way that exceeded our expectations. We are very happy with their team
                                    and the results. We look forward to leveraging our great brand and website for many
                                    years to come',
                'company_logo' => get_template_directory_uri() . '/assets/images/testimonials/logos/duck_design.webp',
            ],
            [
                'client_image' => get_template_directory_uri() . '/assets/images/testimonials/clients/aiden_ross.webp',
                'client_name' => 'Aiden Ross',
                'client_title' => 'Co-Founder, Ruggable',
                'blockquote' => '   OptraSeven delivered a flawless Webflow website that perfectly matched our vision.
                                    Their designers understood our brand deeply and created an intuitive user experience
                                    that our audience loves. The QA process was extremely thorough, and they always went
                                    the extra mile. Their dedication made the entire process seamless and rewarding',
                'company_logo' => get_template_directory_uri() . '/assets/images/testimonials/logos/ruggable.webp',
            ],
            [
                'client_image' => get_template_directory_uri() . '/assets/images/testimonials/clients/olivia_bennet.webp',
                'client_name' => 'Olivia Bennet',
                'client_title' => 'Owner, VERVE',
                'blockquote' => '   From concept to launch, OptraSeven made everything feel effortless. Their UI/UX team
                                    brought clarity and elegance to our ideas, and the final Shopify site functions
                                    flawlessly. They were meticulous in QA, and truly cared about the result. We’re
                                    incredibly satisfied with the outcome and grateful for a partnership that delivered
                                    such strong results',
                'company_logo' => get_template_directory_uri() . '/assets/images/testimonials/logos/verve.webp',
            ],
            [
                'client_image' => get_template_directory_uri() . '/assets/images/testimonials/clients/Amelia_James.webp',
                'client_name' => 'Emily Stone',
                'client_title' => 'Marketing Director',
                'blockquote' => '   OptraSeven was a critical partner in our branding and website development. They took
                                    an innovative approach that was highly collaborative with our team and executed the
                                    program in a way that exceeded our expectations. We are very happy with their team
                                    and the results. We look forward to leveraging our great brand and website for many
                                    years to come',
                'company_logo' => get_template_directory_uri() . '/assets/images/testimonials/logos/duck_design.webp',
            ],
        ],
    ]);

    ?>

    <?php get_template_part('template-parts/content', 'blog-slider'); ?>

    <section class="o7-news-letter section section-no-space-bottom">
        <div class="container">
            <div class="o7-news-letter__container">
                <div class="o7-news-letter__form-wrapper">
                    <p class="title">
                        <span class="o7-content-card__title-pointer"></span>
                        Join Us
                    </p>
                    <h2 class="o7-news-letter__content-header">Get Digital Insights That Make an Impact</h2>

                    <div class="o7-news-letter__form">
                        <?php echo do_shortcode('[newsletter_form]'); ?>
                    </div>
                </div>

                <p class="o7-news-letter__paragraph">
                    By subscribing, you agree to our Privacy Policy and consent to receive updates from OptraSeven.
                </p>

                <div class="o7-news-letter__check-list">
                    <div class="o7-news-letter__check-list-content">
                        <p class="o7-news-letter__check-list-poiner">
                            <svg class="o7-icon o7-news-letter__check-list-checker" aria-hidden="true"
                                focusable="false">
                                <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#check" ?>></use>
                            </svg>
                        </p>
                        <p class="o7-news-letter__check-list-option">Weekly Updates</p>
                    </div>
                    <div class="o7-news-letter__check-list-content">
                        <p class="o7-news-letter__check-list-poiner">
                            <svg class="o7-icon o7-news-letter__check-list-checker" aria-hidden="true"
                                focusable="false">
                                <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#check" ?>></use>
                            </svg>
                        </p>
                        <p class="o7-news-letter__check-list-option">Exclusive Content</p>
                    </div>
                    <div class="o7-news-letter__check-list-content">
                        <p class="o7-news-letter__check-list-poiner">
                            <svg class="o7-icon o7-news-letter__check-list-checker" aria-hidden="true"
                                focusable="false">
                                <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#check" ?>></use>
                            </svg>
                        </p>
                        <p class="o7-news-letter__check-list-option">Unsubscribe Anytime</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>