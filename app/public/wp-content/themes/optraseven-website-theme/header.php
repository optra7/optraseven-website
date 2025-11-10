<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package optraseven_official_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'optraseven-website-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$optraseven_website_theme_description = get_bloginfo( 'description', 'display' );
			if ( $optraseven_website_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $optraseven_website_theme_description; ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'optraseven-website-theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</header>

	<body class="page-home"> -->
    <aside class="main-menu-responsive">
        <div class="main-menu-responsive__header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-menu-responsive__logo">OptraSeven</a>
            <div class="main-menu-responsive__close-btn">
                <span></span>
                <span></span>
            </div>
        </div>
        <nav class="main-menu">
            <a href="/about" class="main-menu__link">About</a>
            <a href="#" class="main-menu__link">Portfolio</a>
            <a href="#" class="main-menu__link">Services</a>
            <a href="#" class="main-menu__link">Case Studies</a>
            <a href="#" class="main-menu__link">Contact</a>
        </nav>
        <div class="start-project-btn-wrarpper">
            <button class="btn btn--secondary btn--medium">
                Start a Project
                <svg class="fee-icon" aria-hidden="true" focusable="false">
                    <use href="./svg/svg-icon-sprite.svg#arrow-up-right"></use>
                </svg>
            </button>
        </div>
    </aside>

    <header class="site-main-header">
        <div class="site-main-header__container">

            <div class="header-logo-wrapper">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo">OptraSeven</a>
            </div>

            <div class="main-menu-wrapper">
                <nav class="main-menu">
                    <a href="/about" class="main-menu__link">About</a>
                    <div class="megamenu megamenu-portfolio">
                        <a tabindex="0" class="main-menu__link">Portfolio</a>
                        <div class="megamenu__content-wrapper megamenu__content-wrapper--service">
                            <div class="megamenu__triangle-head"></div>
                            <div class="megamenu__content">
                                <div class="megamenu__left-panel">
                                    <div class="megamenu_tab-head">
                                        <div class="megamenu-tab__item">
                                            <div class="megamenu-tab__icon-wrapper">
                                                <svg width="16" height="22" viewBox="0 0 16 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.3183 7.68763C11.8535 5.86228 10.3211 3.94678 10.3662 0.453824C10.3662 0.273542 10.2761 0.138331 10.1183 0.0481902C9.96056 -0.0194155 9.78028 -0.0194155 9.64507 0.0707254C7.18873 1.82847 5.00282 5.68199 5.6338 10.3693C4.77746 9.87354 4.25915 9.03974 3.67324 8.16087C3.49296 7.86791 3.31268 7.57495 3.10986 7.30453C3.01972 7.19185 2.88451 7.10171 2.72676 7.12425C2.56901 7.12425 2.4338 7.21439 2.3662 7.32706C1.19437 9.15242 0 11.3609 0 13.7496C0 18.4595 3.31268 21.8623 7.88732 21.8623C12.507 21.8623 16 18.3693 16 13.7496C16 11.0228 14.6479 9.3327 13.3183 7.68763ZM7.88732 20.9609C3.83099 20.9609 0.901408 17.9186 0.901408 13.7496C0.901408 11.8341 1.78028 9.98622 2.77183 8.38622C2.8169 8.47636 2.88451 8.54397 2.92958 8.63411C3.53803 9.58059 4.14648 10.5271 5.1831 11.1355C5.47606 11.3158 5.83662 11.3158 6.12958 11.1355C6.42254 10.9552 6.58028 10.6172 6.53521 10.2566C5.99437 6.40312 7.5493 3.15805 9.48732 1.4003C9.71268 4.64537 11.2451 6.56087 12.6197 8.27354C13.9493 9.91861 15.0986 11.3383 15.0986 13.7496C15.0986 17.851 11.9887 20.9609 7.88732 20.9609Z" fill="#202020" stroke="#202020" stroke-width="0.000639992"/>
<path d="M13.9722 12.3984C13.7243 12.3984 13.5215 12.6013 13.5215 12.8491C13.5215 14.3365 13.1384 15.6886 12.3496 16.8829C12.2144 17.0858 12.282 17.3787 12.4849 17.5139C12.5525 17.559 12.6426 17.5815 12.7327 17.5815C12.8905 17.5815 13.0257 17.5139 13.1158 17.3787C13.9722 16.0266 14.4229 14.5167 14.4229 12.8491C14.4229 12.6013 14.2201 12.3984 13.9722 12.3984Z" fill="#202020" stroke="#202020" stroke-width="0.000639992"/>
<path d="M12.1218 17.918C11.9415 17.7602 11.6486 17.7828 11.4908 17.9631C11.3782 18.0983 11.2204 18.2335 11.0627 18.3687C10.8824 18.5264 10.8599 18.8194 11.0176 18.9997C11.1077 19.1124 11.243 19.1574 11.3556 19.1574C11.4683 19.1574 11.5584 19.1124 11.6486 19.0448C11.8289 18.887 12.0091 18.7293 12.1669 18.549C12.3246 18.3687 12.3021 18.0757 12.1218 17.918Z" fill="#202020" stroke="#202020" stroke-width="0.000639992"/>
</svg>
                                            </div>
                                            <span class="megamenu-tab__label">Most Popular</span>
                                            <span class="megamenu-tab__circle-shape"></span>
                                        </div>
                                        <div class="megamenu-tab__item">
                                            <div class="megamenu-tab__icon-wrapper">
                                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.9388 1.90421C10.9388 1.90421 10.7344 1.95529 10.3973 2.04542C10.3394 1.87717 10.2508 1.68488 10.135 1.47757C9.75358 0.831612 9.18483 0.483094 8.5105 0.483094C8.46623 0.483094 8.42195 0.483093 8.36406 0.495111C8.35043 0.468071 8.31978 0.456053 8.30616 0.432017C8.01327 0.146592 7.63183 0.0173996 7.17887 0.0324219C6.3002 0.0594622 5.42153 0.612286 4.71995 1.60677C4.22272 2.30381 3.84128 3.18111 3.73911 3.86613C2.72762 4.13653 2.02604 4.33183 2.01242 4.34384C1.50156 4.48505 1.48453 4.50008 1.42664 4.92371C1.38236 5.24519 0.0371094 14.3397 0.0371094 14.3397L11.1056 16.0312V1.89219C11.0137 1.89219 10.9694 1.90421 10.9388 1.90421ZM8.37768 2.60125C7.7919 2.75748 7.14822 2.93775 6.51817 3.106C6.69526 2.4991 7.04605 1.89219 7.45473 1.4926C7.6148 1.35139 7.83617 1.18314 8.08479 1.07798C8.33341 1.54367 8.3913 2.17762 8.37768 2.60125ZM7.17887 0.561209C7.38321 0.561209 7.56031 0.600268 7.70676 0.678384C7.47176 0.780537 7.23677 0.948787 7.0188 1.14408C6.46367 1.67287 6.03796 2.4991 5.86086 3.28927C5.33298 3.43048 4.8051 3.5747 4.32489 3.70389C4.64503 2.46004 5.83021 0.588249 7.17887 0.561209ZM5.47942 7.66679C5.53732 8.49302 8.01327 8.67329 8.15971 10.6232C8.26189 12.1615 7.23677 13.207 5.75869 13.2852C3.9741 13.3873 2.99326 12.4589 2.99326 12.4589L3.3747 11.0378C3.3747 11.0378 4.35554 11.6958 5.14567 11.6447C5.65652 11.6177 5.84724 11.2451 5.83362 10.9867C5.7621 9.90212 3.73911 9.96522 3.60969 8.18356C3.4939 6.68433 4.60416 5.17308 7.06648 5.03187C8.01668 4.98079 8.50029 5.1881 8.50029 5.1881L7.94516 7.04787C7.94516 7.04787 7.3151 6.78949 6.56925 6.84056C5.47942 6.90366 5.4658 7.51056 5.47942 7.66679ZM8.96346 2.44802C8.96346 2.06044 8.90556 1.50461 8.70122 1.03892C9.37555 1.1561 9.69569 1.81408 9.84213 2.21367C9.57989 2.27977 9.287 2.35789 8.96346 2.44802ZM11.4394 16.0102L16.0371 15.0037C16.0371 15.0037 14.0618 3.21116 14.0448 3.13304C14.0311 3.05492 13.9562 3.00385 13.8847 3.00385C13.8132 3.00385 12.5224 2.97681 12.5224 2.97681C12.5224 2.97681 11.7323 2.30381 11.4394 2.04542V16.0102Z" fill="#202020" stroke="#202020" stroke-width="0.064"/>
</svg>

                                            </div>
                                            <span class="megamenu-tab__label">Shopify</span>
                                            <span class="megamenu-tab__circle-shape"></span>
                                        </div>
                                        <div class="megamenu-tab__item">
                                            <div class="megamenu-tab__icon-wrapper">
                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_2644_2503" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="15">
<path d="M16 0H0V14.2871H16V0Z" fill="white"/>
</mask>
<g mask="url(#mask0_2644_2503)">
<path d="M7.50855 2.83715C7.23945 3.11647 7.01246 3.32814 6.8117 3.56497C6.21883 4.26984 5.74032 5.07449 5.39571 5.94605C4.4936 8.19419 3.83189 10.5284 3.24176 12.8866C3.18976 13.0946 3.17853 13.315 3.11844 13.5196C3.07974 13.6702 2.99576 13.8032 2.87933 13.8983C2.7629 13.9935 2.62039 14.0457 2.4735 14.0466C2.32675 14.0517 2.18241 14.0063 2.06187 13.9173C1.94133 13.8283 1.85103 13.7002 1.80432 13.5523C1.76393 13.4364 1.7336 13.3169 1.71376 13.1952C1.43818 11.5833 1.16418 9.97123 0.891726 8.35887C0.625426 6.77742 0.350886 5.19741 0.106632 3.61208C0.0294408 3.11104 0.0347869 2.59516 0.00976562 2.08563C0.0100136 1.96192 0.0193043 1.83842 0.0375248 1.71623C0.0414005 1.61429 0.0789398 1.51701 0.143576 1.44156C0.20821 1.36611 0.295795 1.3173 0.390956 1.30363C0.579892 1.26448 0.766356 1.39875 0.847632 1.64724C0.897709 1.82463 0.937513 2.00513 0.96679 2.1877C1.28815 3.77207 1.60935 5.35649 1.93037 6.94099C2.11795 7.86176 2.30831 8.78187 2.50151 9.7014C2.53239 9.84925 2.57333 9.99474 2.63351 10.2377C2.89852 9.38491 3.12909 8.62217 3.37266 7.86413C3.76713 6.63598 4.18815 5.41959 4.80244 4.28992C5.29607 3.37482 5.94539 2.56509 6.71733 1.90195C6.94379 1.70754 7.16233 1.50263 7.39051 1.31047C7.82352 0.945784 8.27849 1.04 8.48837 1.58408C8.62604 1.97398 8.72664 2.37757 8.78859 2.78876C9.18331 5.00644 9.56603 7.22656 9.95385 9.44569C9.97769 9.58132 10.0097 9.71623 10.0603 9.95875C10.1275 9.71831 10.169 9.57815 10.2059 9.43663C10.7788 7.24301 11.4461 5.08981 12.5443 3.11447C13.0428 2.21772 13.5956 1.36527 14.3164 0.654891C14.5562 0.432215 14.8199 0.240381 15.1019 0.0833314C15.3585 -0.0691254 15.6141 0.00935703 15.8217 0.221132C16.0066 0.409941 16.048 0.707149 15.8993 0.994334C15.7798 1.24201 15.6272 1.46988 15.4462 1.67081C13.9568 3.21174 13.0722 5.1295 12.3818 7.16912C11.7212 9.12096 11.2723 11.1363 10.8116 13.1478C10.773 13.3283 10.7238 13.5059 10.6643 13.6799C10.6131 13.8433 10.515 13.9856 10.384 14.0867C10.2528 14.188 10.0952 14.2431 9.93318 14.2443C9.76305 14.2504 9.59591 14.1958 9.45837 14.0893C9.32084 13.9828 9.22084 13.8305 9.17438 13.6565C9.04969 13.2444 8.95284 12.8234 8.88434 12.3968C8.38837 9.30199 7.81076 6.22015 7.56132 3.08573C7.558 3.03944 7.54277 2.99503 7.50855 2.83715Z" fill="#202020" stroke="#202020" stroke-width="0.00064"/>
</g>
</svg>
                                            </div>
                                            <span class="megamenu-tab__label">Webflow</span>
                                            <span class="megamenu-tab__circle-shape"></span>
                                        </div>
                                        <div class="megamenu-tab__item">
                                            <div class="megamenu-tab__icon-wrapper">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.66667 5.33268L2 7.79422L4.66667 10.666M11.3333 5.33268L14 7.79422L11.3333 10.666M9.33333 2.66602L6.66667 13.3327" stroke="#202020" stroke-width="0.96" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                            </div>
                                            <span class="megamenu-tab__label">Custom</span>
                                            <span class="megamenu-tab__circle-shape"></span>
                                        </div>
                                    </div>
                                    <a href="#" class="megamenu__service-view-all-card">
                                        <div class="megamenu__service-view-all-title-wrapper">
                                            <h2 class="megamenu__service-view-all-title">View All Service</h2>
                                            <img class="megamenu__link-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                        <p class="megamenu__service-view-all-description">We don’t stop there, check out all the services we offer here at OptraSeven</p>
                                        <figure class="megamenu__service-view-all-image-wrapper">
                                            <img class="megamenu__service-view-all-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/srevice-card-img.webp" alt="Service Card Image">
                                        </figure>
                                    </a>
                                </div>
                                <div class="megamenu__right-panel">
                                    right panel
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="megamenu">
                        <a tabindex="0" class="main-menu__link">Services</a>
                        <div class="megamenu__content-wrapper megamenu__content-wrapper--service">
                            <div class="megamenu__triangle-head"></div>
                            <div class="megamenu__content">
                                <div class="megamenu__content-container-left megamenu__content-container-left--service">
                                    <a class="megamenu__link-card megamenu__link-card--service" href="#">
                                        <div class="megamenu__link-card-text-wrapper">
                                            <p class="megamenu__link-card-title">
                                                Shopify
                                            </p>
                                            <p class="megamenu__link-card-subtitle">
                                                Shopify solutions that boost sales success.
                                            </p>
                                        </div>
                                        <div class="megamenu__link-card-icon-wrapper">
                                            <img class="megamenu__link-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                    </a>
                                    <a class="megamenu__link-card megamenu__link-card--service" href="#">
                                        <div class="megamenu__link-card-text-wrapper">
                                            <p class="megamenu__link-card-title">
                                                Webflow
                                            </p>
                                            <p class="megamenu__link-card-subtitle">
                                                Shopify solutions that boost sales success.
                                            </p>
                                        </div>
                                        <div class="megamenu__link-card-icon-wrapper">
                                            <img class="megamenu__link-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                    </a>
                                    <a class="megamenu__link-card megamenu__link-card--service" href="#">
                                        <div class="megamenu__link-card-text-wrapper">
                                            <p class="megamenu__link-card-title">
                                                CRO
                                            </p>
                                            <p class="megamenu__link-card-subtitle">
                                                Shopify solutions that boost sales success.
                                            </p>
                                        </div>
                                        <div class="megamenu__link-card-icon-wrapper">
                                            <img class="megamenu__link-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                    </a>
                                    <a class="megamenu__link-card megamenu__link-card--service" href="#">
                                        <div class="megamenu__link-card-text-wrapper">
                                            <p class="megamenu__link-card-title">
                                                Custom Application
                                            </p>
                                            <p class="megamenu__link-card-subtitle">
                                                Shopify solutions that boost sales success.
                                            </p>
                                        </div>
                                        <div class="megamenu__link-card-icon-wrapper">
                                            <img class="megamenu__link-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                    </a>
                                </div>
                                <div
                                    class="megamenu__content-container-right megamenu__content-container-right--service">
                                    <a href="#" class="megamenu__service-view-all-card">
                                        <div class="megamenu__service-view-all-title-wrapper">
                                            <h2 class="megamenu__service-view-all-title">View All Service</h2>
                                            <img class="megamenu__link-card-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                        <p class="megamenu__service-view-all-description">We don’t stop there, check out all the services we offer here at OptraSeven</p>
                                        <figure class="megamenu__service-view-all-image-wrapper">
                                            <img class="megamenu__service-view-all-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/srevice-card-img.webp" alt="Service Card Image">
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="main-menu__link">Case Studies</a>
                    <a href="/contact" class="main-menu__link">Contact</a>
                </nav>
                <div class="main-menu__responsive-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="start-project-btn-wrarpper">
                <button class="btn btn--secondary btn--medium">
                    Start a Project
                    <svg class="fee-icon" aria-hidden="true" focusable="false">
                        <use href=<?=get_template_directory_uri() . "/assets/icons/svg-icon-sprite.svg#arrow-up-right" ?>></use>
                    </svg>
                </button>
            </div>
        </div>
    </header>