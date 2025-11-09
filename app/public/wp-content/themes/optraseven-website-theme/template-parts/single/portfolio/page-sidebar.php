<?php
/**
 * Sidebar for Single Portfolio
 * Variables:
 * - $args['post_id']
 * - $args['sidebar_fields']
 */

$args = $args ?? [];
$args = wp_parse_args($args, [
    'post_id' => get_the_ID(),
    'sidebar_fields' => [],
]);

$post_id = $args['post_id'];
$sidebar_fields = $args['sidebar_fields'];

// Define the exact order of fields
$fields_order = ['Services', 'Industries', 'Apps', 'Themes', 'Platform'];
?>

<div class="o7-details-page-sidebar__inner">

    <?php foreach ($fields_order as $label) :

        $value = $sidebar_fields[$label] ?? null;

//        if (empty($value)) continue; // skip if empty

        ?>
        <div class="o7-details-page-sidebar__item-wrapper">
            <div class="o7-details-page-sidebar__title">
                <?php echo esc_html($label); ?>
            </div>

            <?php if (is_array($value)) : ?>
                <?php foreach ($value as $v) : ?>
                    <?php if (!empty($v)) : ?>
                        <div class="o7-details-page-sidebar__item">
                            <?php echo esc_html($v); ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="o7-details-page-sidebar__item">
                    <?php echo esc_html($value); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <?php
    // Optional external link button (View Site)
    $external_link = get_field('project_link', $post_id);
    if ($external_link) : ?>
        <div class="o7-details-page-sidebar__btn-wrapper">
            <a href="<?php echo esc_url($external_link); ?>"
               class="btn btn--secondary btn--medium"
               target="_blank" rel="noopener">
                View Site
                <svg class="fee-icon">
                    <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#arrow-up-right"></use>
                </svg>
            </a>
        </div>
    <?php endif; ?>

</div> <!-- /.o7-details-page-sidebar__inner -->
