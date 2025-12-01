<section class="section case-study-slider animate__fade-in">
    <div class="container">
        <div class="section__inner">
            <div class="o7-section-header">
                <p class="o7-section-header__title">
                    <span class="o7-section-header__title-pointer"></span>
                    Highlights From Our Journey
                </p>
                <div class="o7-section-header__subtitle-container">
                    <h2 class="o7-section-header__sub-title">From Idea to Impact: Project Highlights</h2>
                    <a href="<?php echo get_post_type_archive_link('case-study'); ?>"
                       class="btn btn--secondary btn--medium button__mobile--invisible">
                        Show All
                        <svg class="fee-icon" aria-hidden="true" focusable="false">
                            <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-up-right'); ?>"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="section__card-wrapper section__card-wrapper--scroll-x">
                <?php
                $args = [
                    'post_type'      => 'case-study',
                    'posts_per_page' => -1,
                    'meta_key'       => 'item_order',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'ASC',
                ];
                $loop = new WP_Query($args);
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                        get_template_part('template-parts/content', 'case-study-slider-card');
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <div class="o7-slider-control">
                <a href="#" class="o7-slider-control__prev-button">
                    <div class="o7-slider-control__button">
                        <svg class="o7-icon slider__arrow">
                            <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-left'); ?>"></use>
                        </svg>
                    </div>
                </a>
                <a href="#" class="o7-slider-control__next-button">
                    <div class="o7-slider-control__button">
                        <svg class="o7-icon slider__arrow">
                            <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-right'); ?>"></use>
                        </svg>
                    </div>
                </a>
            </div>

            <a href="<?php echo get_post_type_archive_link('case-study'); ?>"
               class="btn btn--secondary btn--medium button__mobile--visible">
                Show All
                <svg class="fee-icon" aria-hidden="true" focusable="false">
                    <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-right'); ?>"></use>
                </svg>
            </a>
        </div>
    </div>
</section>
