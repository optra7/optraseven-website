<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package optraseven_official_theme
 */

?>

    <footer class="o7-footer-container">
        <div class="o7-footer">
            <div class="o7-footer__inner">

                <div class="o7-footer__icon-chip">
                    <div class="o7-footer__icon-chip-icon-wraper">
                        <a href="https://www.facebook.com/optraseven">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#facebook"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="https://x.com/OptraSeven">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#x-twitter"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/optraseven/">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#instagram"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="http://wa.me/+8801784287229">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#whatsapp"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="https://www.linkedin.com/company/optraseven">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#linkedin"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="https://github.com/orgs/optra7">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#github"?>></use>
                                </svg>
                            </div>
                        </a>
                        <svg class="o7-footer__icon-chip-bg-icon-one" aria-hidden="true" focusable="false">
                            <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#footer-icon-chip-bg-icon-1"?>></use>
                        </svg>
                        <svg class="o7-footer__icon-chip-bg-icon-two" aria-hidden="true" focusable="false">
                            <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#footer-icon-chip-bg-icon-2"?>></use>
                        </svg>
                    </div>
                </div>

                <div class="o7-footer__button-chip">
                    <a href="#" class="o7-footer__back-to-top-button">
                        Back To Top
                        <div class="o7-footer__back-to-top-icon-wrapper">
                            <svg class="fee-icon o7-footer__back-to-top-icon" aria-hidden="true" focusable="false">
                                <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up"?>></use>
                            </svg>
                        </div>
                        </span>
                    </a>
                    <!-- <button class="" >

                    </button> -->
                    <svg class="o7-footer__button-chip-bg-span-icon" aria-hidden="true" focusable="false">
                        <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#footer-icon-chip-bg-icon-2"?>></use>
                    </svg>
                    <svg class="o7-footer__button-chip-bg-icon" aria-hidden="true" focusable="false">
                        <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#footer-icon-chip-bg-icon-1"?>></use>
                    </svg>
                </div>

                <div class="o7-footer__menu-container">
                    <div class="o7-footer__logo-container">
                        <div class="o7-footer__logo">
                            <h3 class="o7-footer__logo-text">OptraSeven</h3>
                        </div>
                        <div class="o7-footer__subtitle-wraper">
                            <p class="o7-footer__subtitle">From design to development — everything you need to grow your
                                eCommerce business.</p>
                        </div>
                        <div class="get-in-touch-btn-wrarpper">
                            <a href="/contact-us" class="btn btn--tertiary btn--medium">
                                Get In Touch
                                <svg class="fee-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right"?>></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="o7-footer__menu-links">
                        <h6 class="o7-footer__link-title o7-footer__link-title--align-right-mobile">Explore</h6>
                        <ul class="o7-footer__menu-links-ul o7-footer__menu-links-ul--align-right-mobile">
                            <li><a href="/">Home</a></li>
                            <li><a href="/portfolio">Our Works</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/case-studies">Case Studies</a></li>
                        </ul>
                    </div>
                    <div class="o7-footer__menu-links">
                        <h6 class="o7-footer__link-title o7-footer__link-title--align-right">Learn</h6>
                        <ul class="o7-footer__menu-links-ul o7-footer__menu-links-ul--align-right">
                            <li><a href="/about-us">About</a></li>
                            <li><a href="/blog-posts">Blog</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/get-the-quote">Get Quote</a></li>

                        </ul>
                    </div>
                    <div class="o7-footer__address-container">
                        <h6
                            class="o7-footer__link-title o7-footer__link-title--align-right o7-footer__link-title--align-center">
                            Get In Touch</h6>
                        <ul class="o7-footer__menu-links-ul">
                            <li>
                                <a href="http://wa.me/+8801784287229" target="_blank">
                                    <div class="o7-footer__address o7-footer__address--reverse">
                                        <svg class="o7-icon o7-footer__address-icon o7-footer__address-icon--flip-horizontal"
                                            aria-hidden="true" focusable="false">
                                            <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#phone-outline"?>></use>
                                        </svg>
                                        (+880) 1784287229
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:optraseven@gmail.com" target="_blank">
                                    <div class="o7-footer__address o7-footer__address--reverse">
                                        <svg class="o7-icon o7-footer__address-icon o7-footer__address-icon--flip-horizontal"
                                            aria-hidden="true" focusable="false">
                                            <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#envelope-outline-thin"?>></use>
                                        </svg>
                                        optraseven@gmail.com
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="region" href="#">
                                    <div class="o7-footer__address o7-footer__address--reverse">
                                        <svg class="o7-icon o7-footer__address-icon o7-footer__address-icon--flip-horizontal"
                                            aria-hidden="true" focusable="false">
                                            <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#location-arrow-outline"?>></use>
                                        </svg>
                                        Bogura District,<br>
                                        Rajshahi Division,<br>
                                        Bangladesh
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="o7-footer__icon-chip social-media-mobile-view">
                    <div class="o7-footer__icon-chip-icon-wraper">
                        <a href="https://www.facebook.com/optraseven">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#facebook"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="https://x.com/OptraSeven">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#x-twitter"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/optraseven/">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#instagram"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="http://wa.me/+8801784287229">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#whatsapp"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="https://www.linkedin.com/company/optraseven">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#linkedin"?>></use>
                                </svg>
                            </div>
                        </a>
                        <a href="https://github.com/orgs/optra7">
                            <div class="o7-footer__icon-chip-icon-box">
                                <svg class="o7-footer__icon-chip-icon" aria-hidden="true" focusable="false">
                                    <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#github"?>></use>
                                </svg>
                            </div>
                        </a>
                        <svg class="o7-footer__icon-chip-bg-icon-one" aria-hidden="true" focusable="false">
                            <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#footer-icon-chip-bg-icon-1"?>></use>
                        </svg>
                        <svg class="o7-footer__icon-chip-bg-icon-two" aria-hidden="true" focusable="false">
                            <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#footer-icon-chip-bg-icon-2"?>></use>
                        </svg>
                    </div>
                </div>

                <div class="o7-footer__copyright-container">
                    <div class="o7-footer__copyright">
                        <span class="o7-footer__copyright--highlight">OptraSeven</span>
                        <p class="o7-footer__copyright-text">
                            2025 &copy; all right reserved
                        </p>
                    </div>
                    <div class="o7-footer__policy-pages">
                        <ul class="o7-footer__policy-pages-link">
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/terms-of-use">Terms of Use</a></li>
                            <li><a href="/dsar">DSAR</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

<?php wp_footer(); ?>

</body>
</html>