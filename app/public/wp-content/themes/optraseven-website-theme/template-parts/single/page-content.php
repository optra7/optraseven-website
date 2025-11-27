<?php
/**
 * Main Content Section
 * Variables: $post_id
 */
$args = $args ?? [];
$args = wp_parse_args($args, ['post_id' => get_the_ID()]);
$post_id = $args['post_id'];
?>
<?php if (!wp_is_mobile()) :?>
<h1 class="o7-details-page-post__title o7-details-page-post__title--pc"><?php echo get_the_title($post_id); ?></h1>
<?php endif; ?>
<?php if ($subtitle = get_field('sub_title', $post_id)) : ?>
    <h2 class="o7-details-page-post__sub-title"><?php echo esc_html($subtitle); ?></h2>
<?php endif; ?>

<?php if ($intro = get_field('intro_description', $post_id)) : ?>
    <p class="o7-details-page-post__description"><?php echo esc_html($intro); ?></p>
<?php endif; ?>

<?php
if (have_rows('key_sections', $post_id)) :
    while (have_rows('key_sections', $post_id)) : the_row();
        $section_image = get_sub_field('section_image');
        ?>
        <div class="o7-details-page-post__key-point-wrapper">
            <h3 class="o7-details-page-post__key-point-title"><?php the_sub_field('section_title'); ?></h3>

            <?php if ($text = get_sub_field('section_text')) : ?>
                <p class="o7-details-page-post__key-point"><?php echo esc_html($text); ?></p>
            <?php endif; ?>

            <?php if ($list = get_sub_field('section_list')) : ?>
                <ul>
                    <?php foreach ($list as $item) : ?>
                        <li class="o7-details-page-post__key-point o7-details-page-post__key-point--list"><?php echo esc_html($item['list_item']); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?php if ($section_image) : ?>
                <div class="o7-details-page-post__image">
                    <?php echo wp_get_attachment_image($section_image['ID'], 'large', false, ['alt' => $section_image['alt'], 'loading' => 'lazy', 'decoding' => 'async']); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endwhile;
endif;
?>

<div class="o7-details-page-post__details-wrapper">
    <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>
</div>

<?php
// Portfolio gallery
$portfolio_images = get_field('portfolio_images', $post_id);
if ($portfolio_images) :
    foreach ($portfolio_images as $image) : ?>
        <div class="o7-details-page-post__image">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async" width="1200" height="800">
        </div>
    <?php endforeach;
endif;
?>
