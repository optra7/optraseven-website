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

/**
 * Get the featured image URL of a service post by its slug.
 *
 * @param string $slug The slug of the service post.
 * @return string|false The featured image URL or false if not found.
 */
function get_service_featured_image_by_slug($slug)
{
    $post = get_page_by_path($slug, OBJECT, 'service');
    if (!$post) {
        return false;
    }
    $featured_image = get_the_post_thumbnail_url($post->ID, 'full');
    return $featured_image ?: false;
}

// Retrieve featured images for each service section (fallback to static image if none)
$shopify_image = get_service_featured_image_by_slug('shopify') ?: get_template_directory_uri() . '/assets/images/service-page/shopify-featured-image.webp';
$webflow_image = get_service_featured_image_by_slug('webflow') ?: get_template_directory_uri() . '/assets/images/service-page/webflow-featured-image.webp';
$cro_image = get_service_featured_image_by_slug('conversion-rate-optimization-cro') ?: get_template_directory_uri() . '/assets/images/service-page/cro-featured-image.webp';
$custom_app_image = get_service_featured_image_by_slug('custom-application-development') ?: get_template_directory_uri() . '/assets/images/service-page/custom-featured-image.webp';
$qa_image = get_service_featured_image_by_slug('testing-quality-assurance') ?: get_template_directory_uri() . '/assets/images/service-page/testing-featured-image.webp';
$maintenance_image = get_service_featured_image_by_slug('maintenance-support') ?: get_template_directory_uri() . '/assets/images/service-page/maintenance-support-featured.webp';
?>

<main id="primary" class="main inner-page-main site-main archive-service">

    <!-- ====== Banner Section ====== -->
    <?php get_template_part('template-parts/archive/service/page-banner', null, ['post_id' => get_the_ID()]); ?>

    <!-- ====== Filter Section ====== -->

    <!-- Shopify Section -->
    <section class="section o7-service-card o7-service-card--light">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Shopify</h2>
                <div class="o7-service-card__content">
                    <ul class="o7-service-card__list">
                        <li class="o7-service-card__list-item">
                            <a href="/services/shopify/" target="" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Shopify Store Setup & Custom Design</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/shopify/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Theme Development & Customization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/shopify/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Shopify App Development & Integration</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/shopify/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Store Migration to Shopify</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/shopify/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Headless Shopify Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/shopify/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Automation & Conversion Optimization (CRO)
                                </p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/shopify/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Performance Optimization & Ongoing Support
                                </p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="o7-service-card__image-wrap">
                        <img src="<?= esc_url($shopify_image) ?>"
                            alt="book-shelf-library-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting visuals to match your brand values.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Webflow Section -->
    <section class="section o7-service-card o7-service-card--dark">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Webflow</h2>
                <div class="o7-service-card__content">
                    <div class="o7-service-card__image-wrap">
                        <img src="<?= esc_url($webflow_image) ?>" alt="monitor-image"
                            class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting visuals to match your brand values.</p>
                    </div>
                    <ul class="o7-service-card__list">
                        <li class="o7-service-card__list-item">
                            <a href="/services/webflow/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Figma to Webflow Conversion</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/webflow/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Custom Webflow Website Design & Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/webflow/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Webflow CMS Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/webflow/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Webflow eCommerce Development</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/webflow/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Website Migration to Webflow</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/webflow/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Integrations & Advanced Functionality</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li class="o7-service-card__list-item">
                            <a href="/services/webflow/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Membership & Localization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Conversion Rate Optimization Section -->
    <section class="section o7-service-card o7-service-card--light">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Conversion Rate Optimization</h2>
                <div class="o7-service-card__content">
                    <ul class="o7-service-card__list">
                        <li class="o7-service-card__list-item">
                            <a href="/services/conversion-rate-optimization-cro/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Research & Revenue Diagnostics</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/conversion-rate-optimization-cro/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Experimentation & A/B Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/conversion-rate-optimization-cro/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Landing Page Conversion Optimization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/conversion-rate-optimization-cro/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Product Page Optimization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/conversion-rate-optimization-cro/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Checkout & Form Optimization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li class="o7-service-card__list-item">
                            <a href="/services/conversion-rate-optimization-cro/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Trust, Persuasion & Behavioral Optimization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li class="o7-service-card__list-item">
                            <a href="/services/conversion-rate-optimization-cro/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Conversion Analytics & Attribution</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="o7-service-card__image-wrap">
                        <img src="<?= esc_url($cro_image) ?>"
                            alt="book-shelf-library-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting visuals to match your brand values.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Application Section -->
    <section class="section o7-service-card o7-service-card--dark">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Custom Application</h2>
                <div class="o7-service-card__content">

                    <div class="o7-service-card__image-wrap">
                        <img src="<?= esc_url($custom_app_image) ?>"
                            alt="monitor-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting visuals to match your brand values.</p>
                    </div>

                    <ul class="o7-service-card__list">

                        <li class="o7-service-card__list-item">
                            <a href="/services/custom-application-development/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Frameworks & Scalable Architecture</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/custom-application-development/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">API-First Architecture</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/custom-application-development/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Headless & CMS Solutions</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/custom-application-development/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">App Integration & Custom Features</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/custom-application-development/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Business Process & Workflow Automation</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/custom-application-development/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Enterprise-Grade Performance & Optimization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- Quality Assurance Section -->
    <section class="section o7-service-card o7-service-card--light">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Quality Assurance</h2>
                <div class="o7-service-card__content">
                    <ul class="o7-service-card__list">

                        <li class="o7-service-card__list-item">
                            <a href="/services/testing-quality-assurance/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Manual Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/testing-quality-assurance/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Automation Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/testing-quality-assurance/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Accessibility Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/testing-quality-assurance/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Functional Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/testing-quality-assurance/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Performance Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/testing-quality-assurance/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">API Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/testing-quality-assurance/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Usability Testing</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <div class="o7-service-card__image-wrap">
                        <img src="<?= esc_url($qa_image) ?>"
                            alt="book-shelf-library-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting visuals to match your brand values.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Maintenance & Support Section -->
    <section class="section section-no-space-bottom o7-service-card o7-service-card--dark">
        <div class="container">
            <div class="o7-service-card__wrapper">
                <h2 class="o7-service-card__title">Maintenance & Support </h2>
                <div class="o7-service-card__content">

                    <div class="o7-service-card__image-wrap">
                        <img src="<?= esc_url($maintenance_image) ?>"
                            alt="monitor-image" class="o7-service-card__image">
                        <p class="o7-service-card__image-caption">Brand designers and web designers in-house
                            crafting visuals to match your brand values.</p>
                    </div>

                    <ul class="o7-service-card__list">

                        <li class="o7-service-card__list-item">
                            <a href="/services/maintenance-support/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">System & Server Maintenance</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/maintenance-support/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Application & Platform Updates</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/maintenance-support/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Bug Fixes & Issue Resolution</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>

                        <li class="o7-service-card__list-item">
                            <a href="/services/maintenance-support/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Performance Monitoring & Optimization</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li class="o7-service-card__list-item">
                            <a href="/services/maintenance-support/" class="o7-service-card__link">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/service-page/hover-icon-shopify.webp" alt="" aria-hidden="true"
                                    class="o7-service-card__icon">
                                <p class="o7-service-card__link-label">Analytics & Monitoring Maintenance</p>
                                <div class="o7-service-card__arrow-wrapper">
                                    <svg class="o7-icon o7-service-card__arrow-icon" aria-hidden="true" focusable="false">
                                        <use href="<?= get_template_directory_uri() ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
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