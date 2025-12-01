<section class="section o7-blog-section animate__fade-in">
    <div class="container">
        <div class="o7-blog-section__container">
            <div class="o7-section-header o7-section-blog-header">
                <div class="o7-blog-section__title-and-button-wrapper">
                    <p class="o7-section-header__title">
                        <span class="o7-section-header__title-pointer"></span>
                        Insights
                    </p>
                    <div class="o7-section-header__subtitle-container flex-col align-start">
                        <h2 class="o7-section-header__sub-title">The latest from our design studio</h2>
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                           class="btn btn--secondary btn--medium button__mobile--invisible">
                            Show All
                            <svg class="fee-icon" aria-hidden="true" focusable="false">
                                <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-up-right'); ?>"></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="o7-slider-control o7-blog-section__slider-container justify-content-start button__mobile--invisible">
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
            </div>

            <div class="o7-section-header o7-section-header-tab-visible">
                <p class="o7-section-header__title">
                    <span class="o7-section-header__title-pointer"></span>
                    Insights
                </p>
                <div class="o7-section-header__subtitle-container">
                    <h2 class="o7-section-header__sub-title">The latest from our design studio</h2>
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                       class="btn btn--secondary btn--medium button__mobile--invisible">
                        Show All
                        <svg class="fee-icon" aria-hidden="true" focusable="false">
                            <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-up-right'); ?>"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="o7-blog-section__card-container section__card-wrapper--scroll-x">
                <?php
                $args = [
                    'post_type'      => 'post',
                    'posts_per_page' => -1,
                    'meta_key'       => 'item_order',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'ASC',
                ];
                $loop = new WP_Query($args);

                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                        get_template_part('template-parts/content', 'blog-slider-card');
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>

        <div class="o7-slider-control button__tab--visible">
            <a href="#" class="o7-slider-control__prev-button">
                <div class="o7-slider-control__button o7-slider-control__button--aquamarine">
                    <svg class="o7-icon slider__arrow">
                        <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-left'); ?>"></use>
                    </svg>
                </div>
            </a>
            <a href="#" class="o7-slider-control__next-button">
                <div class="o7-slider-control__button o7-slider-control__button--aquamarine">
                    <svg class="o7-icon slider__arrow">
                        <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-right'); ?>"></use>
                    </svg>
                </div>
            </a>
        </div>

        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
           class="btn btn--secondary btn--medium button__mobile--visible-mobile">
            Show All
            <svg class="fee-icon" aria-hidden="true" focusable="false">
                <use href="<?= esc_url(get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg#arrow-up-right'); ?>"></use>
            </svg>
        </a>
    </div>
</section>
