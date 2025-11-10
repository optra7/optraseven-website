<article class="o7-content-card o7-content-card--scrolling-snap">
    <div class="o7-content-card__image-wrapper">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', ['class' => 'o7-content-card__image']); ?>
        <?php endif; ?>
    </div>

    <a href="<?php the_permalink(); ?>">
        <div class="o7-content-card__circle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-up-right-svgrepo-com.svg" alt="arrow" class="o7-content-card__circle-arrow">
        </div>
    </a>

    <div class="o7-card-category o7-card-category--home-sec">
        <?php
        // Get Case Study categories
        $categories = get_the_terms(get_the_ID(), 'case_study_category');
        if ($categories && !is_wp_error($categories)) :
            foreach ($categories as $cat) :
                echo '<div class="o7-card-catagory__title-wrapper">';
                echo '<span class="o7-card-catagory__decorative-dot"></span>';
                echo '<p class="o7-card-catagory__title">' . esc_html($cat->name) . '</p>';
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
                    <span class="o7-card-catagory__decorative-dot"></span>
                    <p class="o7-card-catagory__title"><?php echo esc_html($client_name); ?></p>
                </div>
            <?php endif;
        endif;
        ?>
    </div>


    <h3 class="o7-content-card__header"><?php the_title(); ?></h3>
</article>
