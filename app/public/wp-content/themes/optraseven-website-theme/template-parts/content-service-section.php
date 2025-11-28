<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package optraseven_official_theme
 */

?>

<section class="section section-services animate__fade-in">
    <div class="container">
        <div class="o7-section-header">
            <p class="o7-section-header__title">
                <span class="o7-section-header__title-pointer"></span>
                Solutions We Provide
            </p>
            <div class="o7-section-header__subtitle-container">
                <h2 class="o7-section-header__sub-title">Where Strategy Meets Powerful Web Experiences</h2>
                <a href="<?php echo get_post_type_archive_link('service'); ?>" class="btn btn--secondary btn--medium button__mobile--invisible">Show All
                    <svg class="fee-icon" aria-hidden="true" focusable="false">
                        <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-up-right'); ?>"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="section__card-wrapper">
            <div class="service-col-one">

                    <article class="o7-content-card">
                        <div class="o7-content-card__image-wrapper o7-card__image-wrapper o7-card__image-wrapper--rounded">
                            <div class="o7-content-card__image-frame o7-card__image-frame">
                                <a href="/services/shopify/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/shopify.webp" alt="shopify-image" class="o7-content-card__image o7-card__image">
                                </a>
                            </div>
                        </div>
                        
                        <div class="o7-hover-chip">
                            <svg class="o7-hover-chip__bg-span-icon" aria-hidden="true" focusable="false">
                                <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#chip-radius-2"></use>
                            </svg>

                            <div class="o7-hover-chip__inner">
                                <div class="o7-hover-chip__buton">Planning</div>
                                <div class="o7-hover-chip__buton">UI & UX</div>
                                <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-mobile">
                                    Development
                                </div>
                                <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-pc">+1</div>
                            </div>
                        </div>
                        
                        <div class="o7-card__info-block">
                            <div class="o7-card__title-wrapper">
                                <p class="o7-card__title-decorative-dot o7-card__title">Shopify</p>
                            </div>
                            <h3 class="o7-content-card__header">
                                <a href="/services/shopify/">
                                    Creative shopify experiences that grow your business
                                </a>
                            </h3> 
                        </div>     
                    </article>

                    <article class="o7-content-card">
                        <div class="o7-content-card__image-wrapper o7-card__image-wrapper o7-card__image-wrapper--rounded">
                            <div class="o7-content-card__image-frame o7-card__image-frame">
                                <a href="/services/custom-application-development/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/custom-web-application.webp" alt="custom-web-application-image" class="o7-content-card__image o7-card__image">
                                </a>
                            </div>
                        </div>
                        
                        <div class="o7-hover-chip">
                            <svg class="o7-hover-chip__bg-span-icon" aria-hidden="true" focusable="false">
                                <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#chip-radius-2"></use>
                            </svg>

                            <div class="o7-hover-chip__inner">
                                <div class="o7-hover-chip__buton">Planning</div>
                                <div class="o7-hover-chip__buton">UI & UX</div>
                                <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-mobile">
                                    Development
                                </div>
                                <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-pc">+1</div>
                            </div>
                        </div>
                        
                        <div class="o7-card__info-block">
                            <div class="o7-card__title-wrapper">
                                <p class="o7-card__title-decorative-dot o7-card__title">Custom Web Application</p>
                            </div>
                            <h3 class="o7-content-card__header">
                                <a href="/services/custom-application-development/">
                                    Custom web application crafted for your unique business needs
                                </a>
                            </h3>
                        </div>
                             
                </article>

            </div>

            <div class="service-col-two">

                    <article class="o7-content-card">
                        <div class="o7-content-card__image-wrapper o7-card__image-wrapper o7-card__image-wrapper--rounded">
                            <div class="o7-content-card__image-frame o7-card__image-frame">
                                <a href="/services/webflow/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/webflow-2.webp" alt="webflow-image" class="o7-content-card__image o7-card__image">
                                </a>
                            </div>
                        </div>
                        
                        <div class="o7-hover-chip">
                            <svg class="o7-hover-chip__bg-span-icon" aria-hidden="true" focusable="false">
                                <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#chip-radius-2"></use>
                            </svg>

                            <div class="o7-hover-chip__inner">
                                <div class="o7-hover-chip__buton">Planning</div>
                                <div class="o7-hover-chip__buton">UI & UX</div>
                                <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-mobile">
                                    Development
                                </div>
                                <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-pc">+1</div>
                            </div>
                        </div>
                        
                        <div class="o7-card__info-block">
                            <div class="o7-card__title-wrapper">
                                <p class="o7-card__title-decorative-dot o7-card__title">Webflow</p>
                            </div>
                            <h3 class="o7-content-card__header">
                                <a href="/services/webflow/">
                                    Accelerate your brand with expert webflow development
                                </a>
                            </h3>
                        </div>
                    </article>

                    <article class="o7-content-card"> 
                            <div class="o7-content-card__image-wrapper o7-card__image-wrapper o7-card__image-wrapper--rounded">
                                <div class="o7-content-card__image-frame o7-card__image-frame">
                                    <a href="/services/testing-quality-assurance/">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/quality-assurance.webp" alt="quality-assurance-image" class="o7-content-card__image o7-card__image">
                                    </a>
                                </div>
                            </div>
                        
                            <div class="o7-hover-chip">
                                <svg class="o7-hover-chip__bg-span-icon" aria-hidden="true" focusable="false">
                                    <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#chip-radius-2"></use>
                                </svg>

                                <div class="o7-hover-chip__inner">
                                    <div class="o7-hover-chip__buton">Planning</div>
                                    <div class="o7-hover-chip__buton">UI & UX</div>
                                    <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-mobile">
                                        Development
                                    </div>
                                    <div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-pc">+1</div>
                                </div>
                            </div>
                        
                            <div class="o7-card__info-block">
                                <div class="o7-card__title-wrapper">
                                    <p class="o7-card__title-decorative-dot o7-card__title">Quality Assurance</p>
                                </div>
                                <h3 class="o7-content-card__header">
                                    <a href="/services/testing-quality-assurance/">
                                        Uncompromising quality assurance for software and e-commerce
                                    </a>
                                </h3>
                            </div>
                       
                    </article>

            </div>
            
        </div>
        <a href="<?php echo get_post_type_archive_link('service'); ?>" class="btn btn--secondary btn--medium button__mobile--visible">Show All
            <svg class="fee-icon" aria-hidden="true" focusable="false">
                <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-up-right'); ?>"></use>
            </svg>
        </a>

    </div>
</section>
