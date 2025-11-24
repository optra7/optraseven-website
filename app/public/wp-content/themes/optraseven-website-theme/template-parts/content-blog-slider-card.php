<article class="o7-content-card o7-content-card--blogs o7-content-card--scrolling-snap">
    
    <div class="relative o7-content-card__image-wrapper o7-card__image-wrapper o7-card__image-wrapper--rounded">
        <div class="o7-content-card__image-frame o7-card__image-frame">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'o7-content-card__image content-image-blog o7-card__image']); ?>
                <?php endif; ?>
            </a>
        </div>
        

        <?php
        // Optional ACF platform (e.g. Shopify / Webflow)
        $platform = function_exists('get_field') ? get_field('platform') : '';
        if ($platform) :
            $icon_path = get_template_directory() . '/assets/icons/' . strtolower($platform) . '.svg';
            $icon_url  = get_template_directory_uri() . '/assets/icons/' . strtolower($platform) . '.svg';
            if (file_exists($icon_path)) : ?>
                <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($platform); ?> icon"
                     class="o7-content-card__hover--logo">
            <?php endif;
        endif;
        ?>
    </div>
    <div class="o7-card__info-block">
        <?php if ($platform) : ?>
        <div class="o7-card__title-wrapper">
            <p class="o7-card__title-decorative-dot o7-card__title">
                <?php echo esc_html($platform); ?>
            </p>
        </div>
        <?php endif; ?>

        <h3 class="o7-content-card__header">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <p class="o7-content-card__blog-para">
            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
        </p>

    </div>

    
   
</article>
