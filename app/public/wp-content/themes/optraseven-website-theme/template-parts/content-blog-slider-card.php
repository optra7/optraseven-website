<article class="o7-content-card o7-content-card--blogs o7-content-card--scrolling-snap">
    <a href="<?php the_permalink(); ?>">
    <div class="relative o7-content-card__image-wrapper">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', ['class' => 'o7-content-card__image content-image-blog']); ?>
        <?php endif; ?>

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

    <?php if ($platform) : ?>
        <p class="o7-content-card__title">
            <span class="o7-content-card__title-pointer"></span>
            <?php echo esc_html($platform); ?>
        </p>
    <?php endif; ?>

    <h3 class="o7-content-card__header">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

    <p class="o7-content-card__blog-para">
        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
    </p>
    </a>
</article>
