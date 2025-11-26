<article class="o7-content-card o7-content-card--scrolling-snap">
    
    <div class="o7-content-card__image-wrapper o7-card__image-wrapper o7-card__image-wrapper--rounded o7-card__image-wrapper--with-bg">
        <div class="o7-content-card__image-frame o7-card__image-frame">
            <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', ['class' => 'o7-content-card__image o7-card__image']); ?>
            <?php endif; ?>
            </a>
            <a href="<?php the_permalink(); ?>" class="o7-content-card__circle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-up-right-svgrepo-com.svg"
                    alt="arrow"
                    class="o7-content-card__circle-arrow">
            </a>
        </div>
    </div>

    <div class="o7-card__info-block">
        <?php
        // Get Case Study categories
        $categories = get_the_terms(get_the_ID(), 'case_study_category');
        if ($categories && !is_wp_error($categories)) :
            foreach ($categories as $cat) :
                echo '<div class="o7-card__title-wrapper">';
                echo '<p class="o7-card__title">' . esc_html($cat->name) . '</p>';
                echo '<p class="o7-card__title-decorative-dot o7-card__title">' . esc_html(get_the_title()) . '</p>';
                echo '</div>';
            endforeach;
        endif;
        ?>

        <?php
        // Optional: Show a client name or industry via ACF (if exists)
        if (function_exists('get_field')) :
            $client_name = get_field('client_name'); // ACF field
            if ($client_name) : ?>
                <div class="o7-card-catagory__title-wrapper">
                    <p class="o7-card__title-decorative-dot o7-card__title"><?php echo esc_html($client_name); ?></p>
                </div>
            <?php endif;
        endif;
        ?>
    <?php if (function_exists('get_field')) :
        $subtitle = get_field('subtitle'); // ACF field
        if ($subtitle) : ?>
            <h3 class="o7-content-card__header">
                <a href="<?php the_permalink(); ?>">
                <?php echo esc_html($subtitle); ?>
                </a>
            </h3>
        <?php endif;
    endif; ?>
    </div>
</article>
