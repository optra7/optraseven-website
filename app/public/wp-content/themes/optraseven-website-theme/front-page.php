<?php

/**
 * Template for Homepage
 */
get_header();
?>

<main id="primary" class="site-main homepage main">
    <section class="section section-hero">
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
                                <a href="#" class="btn btn--secondary btn--medium o7-hero__button">
                                    Our Works
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
                    <img src=<?= get_template_directory_uri() . "./images/homepage/Hero-image.webp" ?> alt="" />
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

    // ACF Flexible Content sections
    if (function_exists('have_rows') && have_rows('homepage_sections')) :
        while (have_rows('homepage_sections')) : the_row();

            if (get_row_layout() === 'case_study_slider') :
                get_template_part('template-parts/content', 'case-study-slider');

            elseif (get_row_layout() === 'portfolio_slider') :
                get_template_part('template-parts/content', 'portfolio-slider');
            endif;

        endwhile;
    else :
        // Optional fallback if ACF not used or empty
        get_template_part('template-parts/content', 'case-study-slider');
        get_template_part('template-parts/content', 'portfolio-slider');
    endif;
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

</main>

<?php get_footer(); ?>