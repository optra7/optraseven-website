<article class="o7-content-card o7-content-card--scrolling-snap">
    <div class="o7-content-card__image-wrapper">
        <div class="o7-content-card__image-frame">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', ['class' => 'o7-content-card__image']); ?>
            <?php endif; ?>
        </div>
    </div>

    <a href="<?php the_permalink(); ?>">
        <div class="o7-content-card__circle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-up-right-svgrepo-com.svg"
                 alt="arrow"
                 class="o7-content-card__circle-arrow">
        </div>
    </a>

    <div class="o7-card-category o7-card-category--home-sec-portfolio">
        <?php
        // Example: if you add a taxonomy for portfolio categories later
        $categories = get_the_terms(get_the_ID(), 'portfolio_category');
        if ($categories && !is_wp_error($categories)) :
            foreach ($categories as $cat) :
                echo '<div class="o7-card-catagory__title-wrapper">';
                echo '<span class="o7-card-catagory__decorative-dot"></span>';
                echo '<p class="o7-card-catagory__title">' . esc_html($cat->name) . '</p>';
                echo '<span class="o7-card-catagory__decorative-dot"></span>';
                echo '<p class="o7-card-portfolio__title">' . the_title() . '</p>';
                echo '</div>';
            endforeach;
        endif;
        ?>

        <!-- Example: If you want to display client/brand name from custom field -->
        <?php if (function_exists('get_field')) :
            $brand_name = get_field('brand_name'); // ACF field
            if ($brand_name) : ?>
                <div class="o7-card-catagory__title-wrapper">
                    <span class="o7-card-catagory__decorative-dot"></span>
                    <p class="o7-card-catagory__title"><?php echo esc_html($brand_name); ?></p>
                </div>
            <?php endif;
        endif; ?>
    </div>
    <?php if (function_exists('get_field')) :
        $subtitle = get_field('subtitle'); // ACF field
        if ($subtitle) : ?>
            <h3 class="o7-content-card__header"><?php echo esc_html($subtitle); ?></h3>
        <?php endif;
    endif; ?>
</article>
