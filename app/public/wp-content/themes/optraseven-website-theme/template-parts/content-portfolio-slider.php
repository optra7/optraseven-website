<section class="section portfolio-slider">
    <div class="container">
        <div class="section__inner">
            <div class="o7-section-header">
                <p class="o7-section-header__title">
                    <span class="o7-section-header__title-pointer"></span>
                    Our Works
                </p>
                <div class="o7-section-header__subtitle-container">
                    <h2 class="o7-section-header__sub-title">Projects That Shaped Our Story</h2>
                    <a href="<?php echo get_post_type_archive_link('portfolio'); ?>"
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
                    'post_type'      => 'portfolio',
                    'posts_per_page' => 6,
                ];
                $portfolio_query = new WP_Query($args);

                if ($portfolio_query->have_posts()) :
                    while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                        get_template_part('template-parts/content/content', 'portfolio-slider-card');
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

            <a href="<?php echo get_post_type_archive_link('portfolio'); ?>"
               class="btn btn--secondary btn--medium button__mobile--visible">
                Show All
                <svg class="fee-icon" aria-hidden="true" focusable="false">
                    <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-right'); ?>"></use>
                </svg>
            </a>
        </div>
    </div>
</section>
