<?php

/**
 * Template Name: About Us
 */
get_header();
?>

<main>
    <section class="section">
        <div class="container o7-page-banner">
            <div class="o7-page-banner__heading">
                <h1 class="o7-page-banner__title">
                    <span class="o7-page-banner__decorative-dot"></span>
                    Our Works
                </h1>
                <h2 class="o7-page-banner__sub-title">
                    Discover the digital stories we’ve built for our
                    clients
                </h2>
            </div>
            <div class="o7-page-banner__image-wrapper">
                <div class="o7-page-banner__image">
                    <picture>
                        <source media="(min-width:1024px)" srcset=<?= get_template_directory_uri() . "/assets/images/about-us/about-us-page-banner.webp"?> />
                        <source media="(min-width:768px)" srcset=<?= get_template_directory_uri() . "/assets/images/about-us/about-us-page-banner.webp"?> />
                        <source media="(min-width:100px)" srcset=<?= get_template_directory_uri() . "/assets/images/about-us/about-us-page-banner.webp"?> />

                        <img src="/assets/images/about-us/about-us-page-banner.webp" alt="about us page banner"
                            decoding="async" fetchpriority="high" width="1520px" height="506px" />
                    </picture>
                </div>
                <div class="o7-page-banner__image-overlay"></div>
            </div>
        </div>
    </section>

    <section class="section o7-our-journey">
        <div class="container o7-our-journey__container">
            <h2 class="o7-our-journey__header">
                Our Journey
            </h2>
            <p class="o7-our-journey__paragraph">
                We craft digital experiences that prioritize longevity, trust, and real-world impact —
                partnering with startups, agencies, and global brands to build sustainable futures
                through thoughtful strategy, scalable technology, and purposeful design.
            </p>
        </div>
    </section>

    <section class="section o7-what-we-do">
        <div class="container">
            <div class="o7-section-header">
                <p class="o7-section-header__title">
                    <span class="o7-section-header__title-pointer"></span>
                    What We Do
                </p>
                <div class="o7-section-header__subtitle-container">
                    <h2 class="o7-section-header__sub-title">
                        We build conversion-focused digital solutions for startups, agencies, and global brands with
                        Shopify, Webflow and custom tech.
                    </h2>
                </div>
            </div>
            <div class="o7-what-we-do__card-wrapper">
                <div class="o7-card">
                    <p class="o7-card__header">
                        Revenue Added for Brands in Last 3 Years.
                    </p>
                    <p class="o7-card__summary">
                        5K+
                    </p>
                </div>
                <div class="o7-card">
                    <p class="o7-card__header">
                        Locations Supported
                    </p>
                    <p class="o7-card__summary">
                        +$ 12M
                    </p>
                </div>
                <div class="o7-card">
                    <p class="o7-card__header">
                        Total New Customer Appointments Booked.
                    </p>
                    <p class="o7-card__summary">
                        10K+
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="section o7-our-talent">
        <div class="container">
            <div class="o7-section-header">
                <p class="o7-section-header__title">
                    <span class="o7-section-header__title-pointer"></span>
                    Our Talent
                </p>
                <div class="o7-section-header__subtitle-container">
                    <h2 class="o7-section-header__sub-title">
                        We empower our team to be bold, curious, and innovative
                    </h2>
                </div>
            </div>
            <div class="o7-our-talent__card-wrapper">
                <div class="o7-card o7-card--align-left">
                    <p class="o7-card__number">
                        01
                    </p>
                    <p class="o7-card__header o7-card__header--small">
                        Team Led by Experts
                    </p>
                    <p class="o7-card__paragraph">
                        We are extremely competitive, ambitious, and driven to be exceptional - as individuals,
                        teams, and as an organization. There is no standard high enough and we will never settle. We
                        aspire to attract, retan, and empower the very best people.
                    </p>
                </div>
                <div class="o7-card o7-card--align-left">
                    <p class="o7-card__number">
                        02
                    </p>
                    <p class="o7-card__header o7-card__header--small">
                        Collaboration Is Key
                    </p>
                    <p class="o7-card__paragraph">
                        We started with five startup founders — and that spirit still defines how we work. It gives
                        us a sharp edge: we move quickly, stay resourceful, and empower our people at every level.
                        We’re early in our journey, and collaboration fuels everything we do.
                    </p>
                </div>
                <div class="o7-card o7-card--align-left">
                    <p class="o7-card__number">
                        03
                    </p>
                    <p class="o7-card__header o7-card__header--small">
                        Our Work Is Future-Proof
                    </p>
                    <p class="o7-card__paragraph">
                        OptraSeven has been remote from day one — no offices, no borders, just global teams aligned
                        by purpose. With that freedom comes trust, and with trust comes excellence. We thrive in
                        remote-first culture, and we build for what's next.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section o7-our-culture">
        <div class="container">
            <div class="o7-our-culture-content-wrapper">
                <div class="o7-our-culture__image-wrapper">
                    <!-- <div class="o7-our-culture-image-chip__wrapper">
                        <svg class="o7-icon o7-our-culture-image-chip__icon-one" aria-hidden="true"
                            focusable="false">
                            <use href="./svg/svg-icon-sprite.svg#chip-radius-1"></use>
                        </svg>
                        <svg class="o7-icon o7-our-culture-image-chip__icon-two" aria-hidden="true"
                            focusable="false">
                            <use href="./svg/svg-icon-sprite.svg#card-curve-img-1"></use>
                        </svg>
                    </div> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/optra-seven-office.webp" alt="optra seven office / optimisic seven office" class="o7-content-image">
                </div>
                <div class="o7-our-culture-card-wrapper">
                    <div class="o7-section-header">
                        <p class="o7-section-header__title o7-section-header__title--small">
                            <span class="o7-section-header__title-pointer"></span>
                            Our Culture
                        </p>
                        <div class="o7-section-header__subtitle-container">
                            <h2 class="o7-section-header__sub-title o7-section-header__sub-title--small">
                                We combine professionalism with approachability—ensuring our workspace remains
                                relaxed yet focused, where open communication, mutual respect, and high standards
                                are the norm.
                            </h2>
                        </div>
                    </div>
                    <p class="o7-our-culture-para">
                        We produce good work for good people, and with the idea that staff and the client will be
                        happy throughout the full process. This in return will bring more work our way, whether
                        that's via recommendation or further work from that client.
                    </p>

                    <article class="o7-quote">
                        <blockquote class="o7-quote__text">
                            <span class="o7-our-culture-svg-wrapper">
                                <svg class="o7-icon" aria-hidden="true" focusable="false">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#quote-left" ?>></use>
                                </svg>
                            </span>
                            True innovation comes from empowering our teams and respecting our clients. At Optra
                            Seven, we’re committed to excellence, collaboration, and long-term vision.
                        </blockquote>
                        <h3 class="o7-quote__header">
                            Shakil Hossain
                        </h3>
                        <p class="o7-quote__title">
                            CEO
                        </p>

                        <div class="o7-qoute-button-chip">
                            <div class="o7-qoute-button-chip__bg">
                                <svg class="o7-icon o7-qoute-button-chip__icon">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#chip-radius-1" ?>></use>
                                </svg>
                                <div class="o7-qoute-button-chip__placeholder-wrapper">
                                    <svg class="o7-icon o7-qoute-button-chip__placeholder-icon">
                                        <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#card-curve-img-1"?>></use>
                                    </svg>
                                    <span class="o7-qoute-button-chip__placeholder"></span>
                                </div>
                            </div>
                            <button class="btn btn--primary btn--medium o7-quote__button">
                                Take a Look at Our Works
                                <svg class="fee-icon">
                                    <use href=<?= get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                </svg>
                            </button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
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
    <section class="o7-news-letter section">
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