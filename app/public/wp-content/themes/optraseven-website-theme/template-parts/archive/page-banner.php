<?php

?>

<section class="section">
    <div class="container o7-page-banner">
        <div class="o7-page-banner__heading">
            <h1 class="o7-page-banner__title">
                <span class="o7-page-banner__decorative-dot"></span>
                <?php echo esc_html(get_field('banner_title', 'option') ?: 'Highlights From Our Journey'); ?>
            </h1>
            <h2 class="o7-page-banner__sub-title">
                <?php echo esc_html(get_field('banner_subtitle', 'option') ?: 'Stories of Collaboration, Strategy, and Results'); ?>
            </h2>
        </div>

        <div class="o7-page-banner__image-wrapper">
            <?php
            $banner_img = get_field('banner_image', 'option');
            if ($banner_img): ?>
                <div class="o7-page-banner__image">
                    <img src="<?php echo esc_url($banner_img['url']); ?>" alt="<?php echo esc_attr($banner_img['alt']); ?>" width="1520" height="506" />
                </div>
            <?php endif; ?>
            <div class="o7-page-banner__image-overlay"></div>
        </div>
    </div>
</section>