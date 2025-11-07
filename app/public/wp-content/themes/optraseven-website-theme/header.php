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
                    <a href="#" class="main-menu__link">Portfolio</a>

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
                                            <img class="megamenu__link-card-icon"
                                                src="./images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                    </a>
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
                                            <img class="megamenu__link-card-icon"
                                                src="./images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                    </a>
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
                                            <img class="megamenu__link-card-icon"
                                                src="./images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                    </a>
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
                                            <img class="megamenu__link-card-icon"
                                                src="./images/homepage/tab-accordion-icon.webp" alt="accordion-icon">
                                        </div>
                                    </a>
                                </div>
                                <div
                                    class="megamenu__content-container-right megamenu__content-container-right--service">
                                    <a class="megamenu__service-view-all-card">
                                        <div class="megamenu__service-view-all-title-wrapper">
                                            <p class="megamenu__service-view-all-title">
                                                View All Service
                                            </p>
                                            <p class="megamenu__service-view-all-subtitle">
                                                We don’t stop there, check out all the services we offer here at
                                                OptraSeven
                                            </p>
                                        </div>

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