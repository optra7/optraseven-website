<?php
/**
 * Universal Archive Template (for filtering)
 */
get_header();

$post_type = get_post_type();
$taxonomy  = 'category'; // default for blog

if ($post_type === 'case-study') {
    $taxonomy = 'case_study_category';
} elseif ($post_type === 'portfolio') {
    $taxonomy = 'portfolio_category';
} elseif ($post_type === 'service') {
    $taxonomy = 'service_category';
}

// Pass current filter to JS
$current_filter = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : 'all';
wp_localize_script('o7-archive-filter', 'archiveFilterData', [
    'current_filter' => $current_filter,
]);
?>

<main id="primary" class="site-main archive-service">

    <!-- ====== Banner Section ====== -->
    <?php get_template_part('template-parts/archive/case-study/page-banner', null, ['post_id' => get_the_ID()]); ?>
    <!-- ====== Filter Section ====== -->

</main>

<?php get_footer(); ?>
