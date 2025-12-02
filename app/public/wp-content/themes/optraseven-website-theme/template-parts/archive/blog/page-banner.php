<?php
/**
 * Page Banner (for archive pages without ACF Pro)
 */

// Get banner data from the "Case Study Archive Settings" page
$settings_page = get_page_by_path('blog-posts');
if ($settings_page) {
    $settings_id = $settings_page->ID;
    $banner_title = get_field('banner_title', $settings_id);
    $banner_subtitle = get_field('banner_subtitle', $settings_id);
    $banner_img = get_field('banner_image', $settings_id);
}
?>

<section class="section section-no-space-top">
    <div class="container o7-page-banner">
        <div class="o7-page-banner__heading">
            <h1 class="o7-page-banner__title">
                <span class="o7-page-banner__decorative-dot"></span>
                <?php echo esc_html($banner_title ?: 'Insights'); ?>
            </h1>
            <h2 class="o7-page-banner__sub-title">
                <?php echo esc_html($banner_subtitle ?: 'Discover the digital stories we’ve built for our clients'); ?>
            </h2>
        </div>

        <div class="o7-page-banner__image-wrapper">
            <?php if (!empty($banner_img['url'])): ?>
                <div class="o7-page-banner__image">
                    <img src="<?php echo esc_url($banner_img['url']); ?>" fetchpriority="high"
                         alt="<?php echo esc_attr($banner_img['alt'] ?? 'Blog Post Banner'); ?>"
                         width="1520" height="506" />
                </div>
            <?php endif; ?>
            <div class="o7-page-banner__image-overlay"></div>
        </div>
    </div>
</section>
