<?php
/**
 * Sidebar Section for Single Case Study or Portfolio
 * Variables: $post_id, $sidebar_fields (optional)
 */
$args = $args ?? [];
$args = wp_parse_args($args, ['post_id' => get_the_ID()]);
$post_id = $args['post_id'];

if (have_rows('sidebar_sections', $post_id)) :
    while (have_rows('sidebar_sections', $post_id)) : the_row();
        ?>
        <div class="o7-details-page-sidebar__item-wrapper">
            <div class="o7-details-page-sidebar__title"><?php the_sub_field('title'); ?></div>
            <?php if (have_rows('items')) :
                while (have_rows('items')) : the_row(); ?>
                    <div class="o7-details-page-sidebar__item"><?php the_sub_field('item'); ?></div>
                <?php endwhile;
            endif; ?>
        </div>
    <?php endwhile;
endif;

// Fallback for portfolio fields if $sidebar_fields is passed
if (!empty($sidebar_fields)) :
    foreach ($sidebar_fields as $title => $items) :
        if ($items) : ?>
            <div class="o7-details-page-sidebar__item-wrapper">
                <div class="o7-details-page-sidebar__title"><?php echo esc_html($title); ?></div>
                <?php foreach ($items as $item) : ?>
                    <div class="o7-details-page-sidebar__item"><?php echo esc_html($item); ?></div>
                <?php endforeach; ?>
            </div>
        <?php endif;
    endforeach;
endif;

// External link button
$external_link = get_field('external_link', $post_id);
if ($external_link) : ?>
    <div class="o7-details-page-sidebar__btn-wrapper">
        <a href="<?php echo esc_url($external_link); ?>" class="btn btn--secondary btn--medium" target="_blank" rel="noopener">
            View Site
            <svg class="fee-icon"><use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#arrow-up-right"></use></svg>
        </a>
    </div>
<?php endif; ?>
