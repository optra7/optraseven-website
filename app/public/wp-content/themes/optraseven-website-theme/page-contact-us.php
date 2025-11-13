<?php

/**
 * Template Name: Contact Us
 */
get_header();
?>

<body>
    <main>
        <section class="section o7-contact-us">
            <div class="container">
                <div class="o7-contact-us__form-address-wrapper">
                    <!-- contact us content -->
                    <div class="o7-contact-us__address-wrapper">
                        <h1 class="o7-contact-us__header">
                            Tell Us About Your Amazing Project Here
                        </h1>
                        <div class="o7-contact-us__form-address-content-wrapper">
                            <div class="o7-contact-us__form-address-content">
                                <svg class="o7-contact-us__form-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#phone-outline" ?>></use>
                                </svg>
                                <a href="http://wa.me/+8801784287229" target="_blank" class="o7-contact-us__form-address">
                                    (+880) 1784287229
                                </a>
                            </div>
                            <div class="o7-contact-us__form-address-content">
                                <svg class="o7-contact-us__form-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() ."/assets/icons/svg-icon-sprite.svg#envelope-outline-thin"?>></use>
                                </svg>
                                <a href="mailto:optraseven@gmail.com" target="_blank" class="o7-contact-us__form-address">
                                    optraseven@gmail.com
                                </a>
                            </div>
                        </div>
                        <div class="o7-contact-us__form-address-content-wrapper">
                            <h2 class="o7-contact-us__form-address-header">Headquarter</h2>
                            <address class="o7-contact-us__form-address">Bogura District, Rajshahi Division, Bangladesh
                            </address>
                        </div>
                        <div class="o7-contact-us__form-address-content-wrapper">
                            <h2 class="o7-contact-us__form-address-header">Offices</h2>
                            <div class="o7-contact-us__form-address-content">
                                <svg class="o7-contact-us__form-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#office"?>></use>
                                </svg>
                                <p class="o7-contact-us__form-address">Bangladesh</p>
                            </div>
                            <div class="o7-contact-us__form-address-content">
                                <svg class="o7-contact-us__form-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#usa" ?>></use>
                                </svg>
                                <p class="o7-contact-us__form-address">United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="o7-contact-us__form-wrapper">
                        <h1 class="o7-contact-us__header o7-contact-us__header--tablet">
                            Tell Us About Your Amazing Project Here
                        </h1>
                        <form class="o7-contact-us-form" aria-label="contact us form" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                            <input type="hidden" name="action" value="contact_form_submit">

                            <!-- full name input -->
                            <div>
                                <label class="o7-input-label o7-contact-us__input-label" for="name">Full Name</label>
                                <div class="o7-input-group o7-contact-us__input-group">
                                    <input type="text" id="name" name="name"
                                        class="o7-input-field o7-contact-us__input-field" placeholder="John Lenon" required>
                                </div>
                            </div>

                            <!-- email and whatsapp input -->
                            <div class="o7-contact-us__input-container">
                                <!-- email -->
                                <div class="o7-contact-us__input-wrapper o7-contact-us__input-wrapper--col-two">
                                    <label class="o7-input-label o7-contact-us__input-label" for="email">Email</label>
                                    <div
                                        class="o7-input-group o7-contact-us__input-group o7-contact-us__email-input-group">
                                        <input type="email" id="email" name="email" required
                                            class="o7-input-field o7-contact-us__input-field"
                                            placeholder="johnlenon@gmail.com">
                                    </div>
                                </div>
                                <!-- whatsapp -->
                                <div class="o7-contact-us__input-wrapper o7-contact-us__input-wrapper--col-two">
                                    <label class="o7-input-label o7-contact-us__input-label" for="whatsapp">Whatsapp
                                        <span class="o7-contact-us__whatsapp-optional">
                                            (Optional)
                                        </span>
                                    </label>
                                    <div
                                        class="o7-input-group o7-contact-us__input-group o7-contact-us__whatsapp-input-group">
                                        <input type="tel" id="whatsapp" name="whatsapp" inputmode="tel"
                                            class="o7-input-field o7-contact-us__input-field"
                                            placeholder="+88 017 8428 7229">
                                    </div>
                                </div>
                            </div>

                            <!-- subject input -->
                            <div class="o7-contact-us__input-wrapper">
                                <label class="o7-input-label o7-contact-us__input-label" for="subject">Subject</label>
                                <div class="o7-input-group o7-contact-us__input-group">
                                    <input type="text" id="subject" name="subject"
                                        class="o7-input-field o7-contact-us__input-field" placeholder="Ui Design" required>
                                </div>
                            </div>

                            <!-- project details -->
                            <div class="o7-contact-us__input-wrapper">
                                <label class="o7-input-label o7-contact-us__input-label" for="message">Project
                                    Details</label>
                                <div class="o7-input-group o7-contact-us__input-group">
                                    <textarea name="message" id="message"
                                        class="o7-input-field o7-contact-us__input-field o7-contact-us__message-input"
                                        placeholder="I want to re-build my Shopify store..." required></textarea>
                                </div>
                            </div>
                            <!-- submit button -->
                            <button class="btn btn--secondary btn--medium btn--semi-rounder-full">
                                Submit
                            </button>
                        </form>
                        <div id="o7-toast" class="o7-toast"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        get_template_part('template-parts/map', null, []);
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
</body>

<?php get_footer(); ?>