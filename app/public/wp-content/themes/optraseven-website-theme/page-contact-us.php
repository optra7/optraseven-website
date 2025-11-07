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
                                <p class="o7-contact-us__form-address">(+880) 1784287229</p>
                            </div>
                            <div class="o7-contact-us__form-address-content">
                                <svg class="o7-contact-us__form-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() ."/assets/icons/svg-icon-sprite.svg#envelope-outline-thin"?>></use>
                                </svg>
                                <p class="o7-contact-us__form-address">optraseven@gmail.com</p>
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
                            <?php if (!empty($_GET['contact_error'])): ?>
                                <div class="alert alert-danger"><?php echo esc_html($_GET['contact_error']); ?></div>
                            <?php elseif (!empty($_GET['contact_success'])): ?>
                                <div class="alert alert-success">Thank you! Your message has been sent.</div>
                            <?php endif; ?>

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
                                            placeholder="+88 017 3221 3222">
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
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<?php get_footer(); ?>