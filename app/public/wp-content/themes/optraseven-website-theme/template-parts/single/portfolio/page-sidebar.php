<?php
/**
 * Sidebar Section for Single Case Study or Portfolio (dynamic ACF Free version)
 */

$args = $args ?? [];
$args = wp_parse_args($args, ['post_id' => get_the_ID()]);
$post_id = $args['post_id'];

// Fetch all ACF fields for this post
$fields = get_field_objects($post_id);

if ($fields) :
    foreach ($fields as $field_key => $field) :
        // Skip some known fields if needed
        if (in_array($field['name'], ['external_link', 'content_blocks'])) {
            continue;
        }

        $label = $field['label'];
        $value = $field['value'];

        if (empty($value)) continue; // skip empty
        ?>
        <div class="o7-details-page-sidebar__item-wrapper">
            <div class="o7-details-page-sidebar__title">
                <?php echo esc_html($label); ?>
            </div>
            
            <?php
            // If it’s an array field (checkbox, select multiple, etc.)
            if (is_array($value)) :
                foreach ($value as $v) : ?>
                    <div class="o7-details-page-sidebar__item">
                        <?php echo esc_html($v); ?>
                    </div>
                <?php endforeach;
            else : ?>
                <div class="o7-details-page-sidebar__item">
                    <?php echo esc_html($value); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach;
endif;

// Optional: External link button
$external_link = get_field('external_link', $post_id);
if ($external_link) : ?>
    <div class="o7-details-page-sidebar__btn-wrapper">
        <a href="<?php echo esc_url($external_link); ?>" class="btn btn--secondary btn--medium" target="_blank" rel="noopener">
            View Site
            <svg class="fee-icon">
                <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#arrow-up-right"></use>
            </svg>
        </a>
    </div>
<?php endif; ?>
