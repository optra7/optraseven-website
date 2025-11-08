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

    <section class="section section-faq">
        <div class="container">
            <div class="o7-faq__container">
                <div class="o7-faq__block-left">
                    <div class="o7-section-header o7-accordion-header">
                        <p class="o7-section-header__title">
                            <span class="o7-section-header__title-pointer"></span>
                            Frequently Asked Questions
                        </p>
                        <div class="o7-section-header__subtitle-container flex-col align-start">
                            <h2 class="o7-section-header__sub-title">
                                Answers to Things You Might Be Wondering
                            </h2>
                            <a href="#" class="btn btn--secondary btn--medium button__mobile--invisible">
                                Get In Touch
                                <svg class="fee-icon" aria-hidden="true" focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="o7-section-header o7-section-header-tab-visible">
                        <p class="o7-section-header__title">
                            <span class="o7-section-header__title-pointer"></span>
                            Frequently Asked Questions
                        </p>
                        <div class="o7-section-header__subtitle-container">
                            <h2 class="o7-section-header__sub-title">
                                Answers to Things You Might Be Wondering
                            </h2>
                            <a href="#" class="btn btn--secondary btn--medium button__mobile--invisible">
                                Get In Touch
                                <svg class="fee-icon" aria-hidden="true" focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="o7-faq__block-right">
                    <ol class="o7-accordion">
                        <li class="o7-accordion__item" role="button" tabindex="0" aria-expanded="false">
                            <div class="o7-accordion__question">
                                <p class="o7-accordion__question-text">
                                    How much does a website cost?
                                </p>
                                <div class="o7-accordion__icon-wrapper">
                                    <svg class="o7-icon o7-accordion__icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="o7-accordion__answer" hidden>
                                <p class="o7-accordion__answer-text">
                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...

                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...
                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...

                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...
                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...

                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...
                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...


                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...
                                </p>
                            </div>
                        </li>

                        <li class="o7-accordion__item" role="button" tabindex="0" aria-expanded="false">
                            <div class="o7-accordion__question">
                                <p class="o7-accordion__question-text">
                                    How long does a website project usually take to complete?
                                </p>
                                <div class="o7-accordion__icon-wrapper">
                                    <svg class="o7-icon o7-accordion__icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="o7-accordion__answer" hidden>
                                <p class="o7-accordion__answer-text">
                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...
                                </p>
                            </div>
                        </li>

                        <li class="o7-accordion__item" role="button" tabindex="0" aria-expanded="false">
                            <div class="o7-accordion__question">
                                <p class="o7-accordion__question-text">
                                    How easy is it for me to change content myself?
                                </p>
                                <div class="o7-accordion__icon-wrapper">
                                    <svg class="o7-icon o7-accordion__icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="o7-accordion__answer" hidden>
                                <p class="o7-accordion__answer-text">
                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...
                                </p>
                            </div>
                        </li>

                        <li class="o7-accordion__item" role="button" tabindex="0" aria-expanded="false">
                            <div class="o7-accordion__question">
                                <p class="o7-accordion__question-text">
                                    Can I create PPC landing pages myself?
                                </p>
                                <div class="o7-accordion__icon-wrapper">
                                    <svg class="o7-icon o7-accordion__icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="o7-accordion__answer" hidden>
                                <p class="o7-accordion__answer-text">
                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...
                                </p>
                            </div>
                        </li>

                        <li class="o7-accordion__item" role="button" tabindex="0" aria-expanded="false">
                            <div class="o7-accordion__question">
                                <p class="o7-accordion__question-text">
                                    We have limited budget, will you still work with us?
                                </p>
                                <div class="o7-accordion__icon-wrapper">
                                    <svg class="o7-icon o7-accordion__icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="o7-accordion__answer" hidden>
                                <p class="o7-accordion__answer-text">
                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...
                                </p>
                            </div>
                        </li>

                        <li class="o7-accordion__item" role="button" tabindex="0" aria-expanded="false">
                            <div class="o7-accordion__question">
                                <p class="o7-accordion__question-text">
                                    Do you outsource any work?
                                </p>
                                <div class="o7-accordion__icon-wrapper">
                                    <svg class="o7-icon o7-accordion__icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="o7-accordion__answer" hidden>
                                <p class="o7-accordion__answer-text">
                                    Timelines depend on the spec of the website project, but here's some
                                    guidelines...
                                </p>
                            </div>
                        </li>
                    </ol>
                </div>

                <a href="#" class="btn btn--secondary btn--medium button__mobile--visible">
                    Get In Touch
                    <svg class="fee-icon" aria-hidden="true" focusable="false">
                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>