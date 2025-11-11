<?php
/**
 * Case Study Archive
 */
get_header();
?>

<main id="primary" class="site-main archive-case-study">

    <!-- ====== Banner Section ====== -->
    <?php get_template_part('template-parts/archive/case-study/page-banner', null, ['post_id' => get_the_ID()]); ?>
    <!-- ====== Filter Section ====== -->
    <section class="section">
        <div class="container">
            <div class="o7-list-page-filter">

                <!-- === Filter Buttons === -->
                <div class="o7-list-page-filter__list-wrapper">
                    <ul class="o7-list-page-filter__list">
                        <li class="o7-list-page-filter__filter-item active" data-filter="all">All</li>
                        <?php
                        $terms = get_terms([
                            'taxonomy'   => 'case_study_category',
                            'hide_empty' => true,
                        ]);

                        if (!empty($terms) && !is_wp_error($terms)) :
                            foreach ($terms as $term) : ?>
                                <li class="o7-list-page-filter__filter-item"
                                    data-filter="<?php echo esc_attr($term->slug); ?>">
                                    <?php echo esc_html($term->name); ?>
                                </li>
                            <?php endforeach;
                        endif;
                        ?>
                    </ul>
                </div>

                <!-- === Case Study Cards Grid === -->
                <div class="o7-list-page-filter__data-list">
                    <div class="o7-list-page-filter__column-left"></div>
                    <div class="o7-list-page-filter__column-right"></div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const leftCol = document.querySelector('.o7-list-page-filter__column-left');
            const rightCol = document.querySelector('.o7-list-page-filter__column-right');
            const filterButtons = document.querySelectorAll('.o7-list-page-filter__filter-item');

            // Load all case studies from PHP
            const allCardsHTML = `
        <?php
            $args = [
                'post_type'      => 'case-study',
                'posts_per_page' => -1,
            ];
            $case_query = new WP_Query($args);

            if ($case_query->have_posts()) :
            while ($case_query->have_posts()) : $case_query->the_post();
            $post_id = get_the_ID();
            $subtitle  = get_field('subtitle', $post_id);
            $platform  = get_field('platform', $post_id);
            $services  = get_field('service', $post_id);
            $industry  = get_field('industry', $post_id);
            $featured_img = get_the_post_thumbnail_url($post_id, 'large');
            $categories = wp_get_post_terms($post_id, 'case_study_category', ['fields' => 'slugs']);
            $category_classes = !empty($categories) ? implode(' ', $categories) : '';
            ?>
            <article class="o7-list-page-filter__card <?php echo esc_attr($category_classes); ?>" data-category="<?php echo esc_attr($category_classes); ?>">
                <a href="<?php echo get_permalink($post_id); ?>">
                    <div class="o7-list-page-filter__card-image-wrapper">
                        <?php if ($featured_img): ?>
                            <img src="<?php echo esc_url($featured_img); ?>" alt="<?php echo esc_attr(get_the_title($post_id)); ?>" width="780" height="680" loading="lazy" decoding="async">
                        <?php endif; ?>

                        <?php if ($platform): ?>
                            <div class="o7-hover-icon o7-hover-icon--<?php echo strtolower($platform); ?> o7-hover-icon--left-icon-box">
                                <div class="o7-hover-icon__inner o7-hover-icon__inner--left-icon-box">
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/case-study-pages/case-study-list/hover-icon-<?php echo strtolower($platform); ?>.webp" alt="<?php echo esc_attr($platform); ?>" width="80" height="80" />
                                    </picture>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="o7-list-page-filter__card-title-wrapper">
                        <div class="o7-card-category">
                            <?php if ($industry): ?>
                                <div class="o7-card-catagory__title-wrapper">
                                    <p class="o7-card-catagory__title"><?php echo esc_html($industry); ?></p>
                                </div>
                            <?php endif; ?>
                            <div class="o7-card-catagory__title-wrapper">
                                <?php if ($industry): ?><span class="o7-card-catagory__decorative-dot"></span><?php endif; ?>
                                <p class="o7-card-catagory__title"><?php echo esc_html(get_the_title($post_id)); ?></p>
                            </div>
                        </div>
                        <?php if ($subtitle): ?>
                            <h3 class="o7-list-page-filter__card-tagline"><?php echo esc_html($subtitle); ?></h3>
                        <?php endif; ?>
                    </div>
                </a>
            </article>
        <?php
            endwhile;
            wp_reset_postdata();
            endif;
            ?>
    `;

            // Insert all cards and split into columns
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = allCardsHTML.trim();
            const allCards = Array.from(tempDiv.children);

            function renderColumns(cards) {
                leftCol.innerHTML = '';
                rightCol.innerHTML = '';
                cards.forEach((card, index) => {
                    if (index % 2 === 0) {
                        leftCol.appendChild(card);
                    } else {
                        rightCol.appendChild(card);
                    }
                });
            }

            renderColumns(allCards);

            // === Filter Function ===
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filter = button.dataset.filter;

                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    const filteredCards = filter === 'all'
                        ? allCards
                        : allCards.filter(card => card.classList.contains(filter));

                    renderColumns(filteredCards);
                });
            });
        });
    </script>
</main>

<?php get_footer(); ?>
