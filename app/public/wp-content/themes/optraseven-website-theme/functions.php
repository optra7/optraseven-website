<?php

/**
 * optraseven official theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package optraseven_official_theme
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function optraseven_website_theme_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on optraseven official theme, use a find and replace
		* to change 'optraseven-website-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('optraseven-website-theme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'optraseven-website-theme'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'optraseven_website_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'optraseven_website_theme_setup');



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function optraseven_website_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('optraseven_website_theme_content_width', 640);
}
add_action('after_setup_theme', 'optraseven_website_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function optraseven_website_theme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'optraseven-website-theme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'optraseven-website-theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'optraseven_website_theme_widgets_init');

/**
 * Enqueue google fonts
 */
// functions.php
function mytheme_enqueue_google_fonts()
{
	// Enqueue the Google Fonts normally
	wp_enqueue_style(
		'mytheme-google-fonts',
		'https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
		array(),
		null
	);

	// Add preconnects for fonts
	add_action('wp_head', function () {
		echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
		echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
	}, 1); // priority 1 ensures it goes at the very top
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_google_fonts');



/**
 * Enqueue scripts and styles.
 */
function optraseven_website_theme_scripts()
{
	wp_enqueue_style('optraseven-website-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('optraseven-website-reboot-style', get_template_directory_uri() . '/css/reboot.css', array('optraseven-website-theme-style'), '1.0');
	wp_enqueue_style('optraseven-website-main-style', get_template_directory_uri() . '/css/main.css', array('optraseven-website-reboot-style'), '1.0');
	wp_enqueue_style('optraseven-website-temp-style', get_template_directory_uri() . '/css/temp.css', array('optraseven-website-main-style'), '1.0');
	// wp_enqueue_style("animate-css", "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css");
	wp_style_add_data('optraseven-website-theme-style', 'rtl', 'replace');


	wp_enqueue_script('optraseven-website-shared-scripts', get_template_directory_uri() . '/js/shared.js', [], _S_VERSION, true);

    wp_enqueue_script('optraseven-custom-megamenu-mobile-scripts', get_template_directory_uri() . '/js/custom-mobile-megamenu.js', [], _S_VERSION, true);

    wp_enqueue_script('optraseven-custom-megamenu-tabs-scripts', get_template_directory_uri() . '/js/custom-megamenu-tabs.js', [], _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'optraseven_website_theme_scripts');

/**
 * Enqueue scrollspy for some pages
 */
function optraseven_website_enqueue_scrollspy()
{
	if (
		is_page_template(['page-dsar.php', 'page-privacy-policy.php', 'page-terms-of-use.php']) ||
		is_singular('service')
	) {
		wp_enqueue_script(
			'scrollspy-pages',
			get_template_directory_uri() . '/js/scrollspy.js',
			[],
			_S_VERSION,
			true
		);
	}
}
add_action('wp_enqueue_scripts', 'optraseven_website_enqueue_scrollspy');

function optraseven_archive_filter_scripts() {
    if (is_home() || is_post_type_archive(['case-study', 'portfolio'])) {
        wp_enqueue_script(
            'o7-archive-filter',
            get_template_directory_uri() . '/js/filter.js',
            [],
            _S_VERSION,
            true
        );

        wp_localize_script('o7-archive-filter', 'archiveFilterData', [
            'current_filter' => isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : 'all',
        ]);
    }
}
add_action('wp_enqueue_scripts', 'optraseven_archive_filter_scripts');


/**
 * ----------------------------------------------------
 * ACF JSON Save/Load Points
 * ----------------------------------------------------
 */
if (function_exists('acf_add_local_field_group')) {
	// Save ACF JSON in theme folder
	add_filter('acf/settings/save_json', function ($path) {
		return get_stylesheet_directory() . '/acf-json';
	});

	// Load ACF JSON from theme folder
	add_filter('acf/settings/load_json', function ($paths) {
		unset($paths[0]);
		$paths[] = get_stylesheet_directory() . '/acf-json';
		return $paths;
	});
}
/**
 * ----------------------------------------------------
 * POST FORMS
 * ----------------------------------------------------
 */

// For non-logged-in users
add_action('admin_post_nopriv_contact_form_submit', 'optraseven_contact_form_handler');
// For logged-in users
add_action('admin_post_contact_form_submit', 'optraseven_contact_form_handler');

function optraseven_contact_form_handler()
{
    if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'contact_form_submit')) {
        wp_die('Security check failed');
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $transient_key = 'form_submission_' . md5($ip . '_contact_form');
    if (get_transient($transient_key)) {
        wp_die('Please wait before submitting another message.');
    }
    set_transient($transient_key, true, MINUTE_IN_SECONDS * 5);

    // Check honeypot
    if (!empty($_POST['website'])) {
        wp_safe_redirect(home_url('/contact/'));
        exit;
    }

    require_once get_template_directory() . '/utils/sanitize-forms.php';

	$name     = sanitize_text_field($_POST['name'] ?? '');
	$email    = sanitize_email($_POST['email'] ?? '');
	$whatsapp = sanitize_tel_field($_POST['whatsapp'] ?? '');
	$subject  = sanitize_text_field($_POST['subject'] ?? '');
	$message  = sanitize_textarea_field($_POST['message'] ?? '');

	$errors = [];

	if (!$name || !$email || !$subject || !$message) {
		$errors[] = 'All fields are required.';
	}

	if (!is_email($email)) {
		$errors[] = 'Invalid email address.';
	}

    if ($whatsapp && !preg_match('/^[\d\s\-\+\(\)]+$/', $whatsapp)) {
        $errors[] = 'Invalid WhatsApp number format.';
    }

    if (empty($errors)) {
        $to      = 'info@optraseven.com';
        $subject_line = 'Contact Form: ' . $subject;
        $body    = "CONTACT FORM SUBMISSION\n";
        $body   .= "=======================\n\n";
        $body   .= "Name: $name\n";
        $body   .= "Email: $email\n";
        $body   .= "WhatsApp: $whatsapp\n";
        $body   .= "Subject: $subject\n\n";
        $body   .= "Message:\n";
        $body   .= "--------\n";
        $body   .= "$message\n\n";
        $body   .= "---\n";
        $body   .= "Submitted via website contact form.";

        $headers = [
            "From: Website Contact <noreply@optraseven.com>",
            "Reply-To: $name <$email>",
            "Content-Type: text/plain; charset=UTF-8"
        ];

		if (!wp_mail($to, $subject_line, $body, $headers)) {
			$errors[] = 'Error sending email. Please try again later.';
		}
	}

    $redirect = wp_get_referer() ?: home_url('/contact/');
    if (!empty($errors)) {
        $redirect = add_query_arg('contact_error', base64_encode(implode('|', $errors)), $redirect);
    } else {
        $redirect = add_query_arg('contact_success', '1', $redirect);
    }
    wp_safe_redirect($redirect);
    exit;
}
/**
 * ----------------------------------------------------
 * Enqueuing qoute form dependencies
 * ----------------------------------------------------
 */

function enqueue_quote_form_assets()
{
    if (
        is_page_template('page-get-a-quote.php')
    ) {
        wp_enqueue_script('flatpickr', 'https://cdn.jsdelivr.net/npm/flatpickr', [], null, true);
        wp_enqueue_script('o7-quote-form', get_template_directory_uri() . '/js/quote-form.js', ['flatpickr'], null, true);
        wp_enqueue_style('flatpickr-style', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css');
        wp_enqueue_style('choice-style', get_template_directory_uri() . '/css/choices.min.css');
        wp_enqueue_script('choices-js', get_template_directory_uri() . '/js/choices.min.js', ['flatpickr'], null, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_quote_form_assets');

/**
 * ----------------------------------------------------
 * QOUTE FORM
 * ----------------------------------------------------
 */
add_action('admin_post_nopriv_get_quote_form_submit', 'optraseven_get_quote_form_handler');
add_action('admin_post_get_quote_form_submit', 'optraseven_get_quote_form_handler');

function optraseven_get_quote_form_handler()
{
    if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'get_quote_form_submit')) {
        wp_die('Security check failed');
    }

    if (!empty($_POST['hp_email']) || !empty($_POST['website_url'])) {
        // Log for debugging (optional)
        error_log('Honeypot triggered from IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));

        // Silent fail - redirect without error (bots expect this)
        wp_safe_redirect(home_url('/'));
        exit;
    }

    // Rate limiting - prevents spam submissions
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $transient_key = 'form_submission_' . md5($ip . '_quote_form');
    if (get_transient($transient_key)) {
        wp_die('Please wait a few minutes before submitting another request.');
    }
    set_transient($transient_key, true, MINUTE_IN_SECONDS * 5); // 5 minute cooldown

    require_once get_template_directory() . '/utils/sanitize-forms.php';

    $name         = sanitize_text_field($_POST['name'] ?? '');
    $country_code = sanitize_text_field($_POST['country-code'] ?? '');
    $phone        = sanitize_text_field($_POST['phone'] ?? '');
    $email        = sanitize_email($_POST['email'] ?? '');
    $company_name = sanitize_text_field($_POST['company-name'] ?? '');
    $website_url  = esc_url_raw($_POST['website-url'] ?? '');
    $service_type = sanitize_text_field($_POST['service-type'] ?? '');
    $industry     = sanitize_text_field($_POST['industry-category'] ?? '');
    $budget_min   = sanitize_text_field($_POST['budget-min'] ?? '');
    $budget_max   = sanitize_text_field($_POST['budget-max'] ?? '');
    $country      = sanitize_text_field($_POST['country-select'] ?? '');
    $date         = sanitize_text_field($_POST['date'] ?? '');
    $message      = sanitize_textarea_field($_POST['message'] ?? '');

	$phone_full = trim($country_code . ' ' . $phone);
	$errors = [];

	if (!$name || !$email || !$message) {
		$errors[] = 'Name, email, and message are required.';
	}

	if (!is_email($email)) {
		$errors[] = 'Invalid email address.';
	}

    $uploaded_file = $_FILES['file-attachment'] ?? null;
    $attachment_path = '';

    if ($uploaded_file && $uploaded_file['size'] > 0) {
        require_once ABSPATH . 'wp-admin/includes/file.php';

        $allowed_types = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx', 'txt'];
        $file_ext = strtolower(pathinfo($uploaded_file['name'], PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_types)) {
            $errors[] = 'Invalid file type. Allowed: ' . implode(', ', $allowed_types);
        }

        $max_size = 5 * 1024 * 1024; // 5MB
        if ($uploaded_file['size'] > $max_size) {
            $errors[] = 'File too large (max 5MB)';
        }

        if (empty($errors)) {
            $upload = wp_handle_upload($uploaded_file, ['test_form' => false]);

            if (!empty($upload['error'])) {
                $errors[] = 'File upload error: ' . esc_html($upload['error']);
            } else {
                $attachment_path = $upload['file'];
            }
        }
    }

    if (empty($errors)) {
        $to = 'info@optraseven.com';
        $subject_line = 'Quote Request from ' . $name;
        $body = "Name: $name\nEmail: $email\nPhone: $phone_full\nCompany: $company_name\nWebsite: $website_url\nService: $service_type\nIndustry: $industry\nBudget: \$$budget_min - \$$budget_max\nCountry: $country\nDate: $date\n\nMessage:\n$message";

        $headers = ["From: noreply@optraseven.com", "Reply-To: $email"];

        if ($attachment_path) {
            wp_mail($to, $subject_line, $body, $headers, [$attachment_path]);
        } else {
            wp_mail($to, $subject_line, $body, $headers);
        }

        if ($attachment_path && file_exists($attachment_path)) {
            unlink($attachment_path);
        }
    }

    $redirect = wp_get_referer() ?: home_url('/');
    if (!empty($errors)) {
        $redirect = add_query_arg('quote_error', base64_encode(implode('|', $errors)), $redirect);
    } else {
        $redirect = add_query_arg('quote_success', '1', $redirect);
    }
    wp_safe_redirect($redirect);
    exit;
}




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('comment_form_defaults', function ($defaults) {
    $defaults['logged_in_as'] = ''; // remove "Logged in as" text
    return $defaults;
});

/**
 * ----------------------------------------------------
 * Include Modular Theme Files
 * ----------------------------------------------------
 */

$theme_includes = [
	'/inc/custom-post-types.php',
	'/inc/custom-taxonomies.php',
	'/inc/enqueue.php',
	'/inc/hooks.php',
	'/inc/shortcodes.php',
];

// Load files
foreach ($theme_includes as $file) {
	$filepath = get_template_directory() . $file;
	if (file_exists($filepath)) {
		require_once $filepath;
	}
}
