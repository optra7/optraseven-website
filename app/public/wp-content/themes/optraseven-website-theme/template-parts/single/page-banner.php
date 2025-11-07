<?php
/**
 * Hero Section for Single Case Study or Portfolio
 * Variables: $post_id
 */
$args = $args ?? [];
$args = wp_parse_args($args, ['post_id' => get_the_ID()]);
$post_id = $args['post_id'];
$hero_image = get_field('hero_image', $post_id) ?: get_the_post_thumbnail($post_id, 'full', ['alt' => get_the_title($post_id)]);
?>

<div class="o7-details-page-hero">
    <div class="o7-details-page-hero__image">
        <?php
        if (is_array($hero_image) && isset($hero_image['ID'])) {
            echo wp_get_attachment_image($hero_image['ID'], 'full', false, [
                'alt' => $hero_image['alt'],
                'decoding' => 'async',
                'fetchpriority' => 'high'
            ]);
        } elseif (is_string($hero_image)) {
            echo $hero_image; // fallback for_post_thumbnail
        }
        ?>
    </div>
</div>
