<?php
/**
 * Hero Section for Single Case Study or Portfolio
 * Variables: $post_id
 */
$args = $args ?? [];
$args = wp_parse_args($args, ['post_id' => get_the_ID()]);
$post_id = $args['post_id'];

// Get ACF fields
$banner_image = get_field('banner_image', $post_id); // returns URL (your ACF field setting)
$hero_image   = get_field('hero_image', $post_id);

// Fallback to featured image if hero_image is empty
if (!$hero_image) {
    $hero_image = get_the_post_thumbnail($post_id, 'full', [
        'alt'   => get_the_title($post_id),
        'class' => '',
        'fetchpriority' => 'high'
    ]);
}
?>

<div class="o7-details-page-hero">
    <div class="o7-details-page-hero__image">

        <?php
        if (!empty($banner_image)) {
            echo '<img src="' . esc_url($banner_image) . '" alt="' . esc_attr(get_the_title($post_id)) . '" fetchpriority="high">';

        } elseif (is_array($hero_image) && isset($hero_image['ID'])) {
            echo wp_get_attachment_image($hero_image['ID'], 'full', false, [
                'alt'           => $hero_image['alt'] ?? get_the_title($post_id),
                'fetchpriority' => 'high'
            ]);
        } else {
            echo $hero_image;
        }
        ?>

    </div>
</div>
