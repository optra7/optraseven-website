<?php
/**
 * Universal Archive Template (for filtering)
 */
get_header();

$post_type = get_post_type();
$taxonomy = 'service_category';

$current_filter = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : 'all';
wp_localize_script('o7-archive-filter', 'archiveFilterData', [
    'current_filter' => $current_filter,
]);
?>

<main id="primary" class="site-main archive-service">

    <!-- ====== Banner Section ====== -->
    <?php get_template_part('template-parts/archive/service/page-banner', null, ['post_id' => get_the_ID()]); ?>
    <!-- ====== Filter Section ====== -->
    <section class="section o7-service-card o7-service-card--light">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Shopify</h2>
                <div class="o7-service-card__content">
                    <ul class="o7-service-card__list">

                        <li class="o7-service-card__list-item">
                            <a href="service-details.html" target="_blank" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Shopify Store Setup & Custom Design</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon"  aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Theme Development & Customization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Shopify App Development & Integration</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Store Migration to Shopify</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Headless Shopify Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Automation & Conversion Optimization (CRO)
                                </p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Performance Optimization & Ongoing Support
                                </p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <div class="o7-service-card__image-wrap">
                        <img src=<?= get_template_directory_uri() . "/assets/images/service-page/shopify-list.webp" ?>
                             alt="book-shelf-library-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting
                            visuals to match your
                            brand values.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section o7-service-card o7-service-card--dark">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Webflow</h2>
                <div class="o7-service-card__content">

                    <div class="o7-service-card__image-wrap">
                        <img src=<?= get_template_directory_uri() . "/assets/images/service-page/webflow-list.webp" ?> alt="monitor-image"
                             class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting
                            visuals to match your
                            brand values.</p>
                    </div>

                    <ul class="o7-service-card__list">

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">App Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Shopify Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Webflow Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">CMS-Based Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Custom Web Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Custom Theme Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="section o7-service-card o7-service-card--light">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Conversion Rate Optimization</h2>
                <div class="o7-service-card__content">
                    <ul class="o7-service-card__list">

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Email & SMS Automation Setup</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Performance Analytics & Reporting</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Conversion Rate Optimization (CRO)</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Product Page & Checkout Optimization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">SEO & Content Strategy for eCommerce</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <div class="o7-service-card__image-wrap">
                        <img src=<?= get_template_directory_uri() . "/assets/images/service-page/conversion-rate-optimization.webp" ?>
                             alt="book-shelf-library-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting
                            visuals to match your
                            brand values.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section o7-service-card o7-service-card--dark">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Custom Application</h2>
                <div class="o7-service-card__content">

                    <div class="o7-service-card__image-wrap">
                        <img src=<?= get_template_directory_uri() . "/assets/images/service-page/custom-application.webp" ?>
                             alt="monitor-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting
                            visuals to match your
                            brand values.</p>
                    </div>

                    <ul class="o7-service-card__list">

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Shopify Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Webflow eCommerece</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">eCommere Platform Migration</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Multi-store & International Setup</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">App Integration & Custom Features</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Store Optimization & Performance Tuning
                                </p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="section o7-service-card o7-service-card--light">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Quality Assurance</h2>
                <div class="o7-service-card__content">
                    <ul class="o7-service-card__list">

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">API Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Manual Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Functional Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Automation Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Accessibility Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Performance Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Usability Testing (UX Testing)</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <div class="o7-service-card__image-wrap">
                        <img src=<?= get_template_directory_uri() . "/assets/images/service-page/quality-assurance.webp" ?>
                             alt="book-shelf-library-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting
                            visuals to match your
                            brand values.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section o7-service-card o7-service-card--dark">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Maintenance & Support </h2>
                <div class="o7-service-card__content">

                    <div class="o7-service-card__image-wrap">
                        <img src=<?= get_template_directory_uri() . "/assets/images/service-page/maintenance-&-support.webp" ?>
                             alt="monitor-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting
                            visuals to match your
                            brand values.</p>
                    </div>

                    <ul class="o7-service-card__list">

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Search Engine Optimization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Content Writing & Updates</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Analytics & Tracking Setup</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="#" class="o7-service-card__link">
                                <img src=<?= get_template_directory_uri() . "/assets/images/service-page/hover-icon-shopify.webp" ?> alt="" aria-hidden="true"
                                     class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Web Hosting & Server Management</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
