<article class="o7-content-card o7-content-card--scrolling-snap">
    <div class="o7-content-card__image-wrapper">
        <?php the_post_thumbnail('large', ['class' => 'o7-content-card__image']); ?>
    </div>

    <a href="<?php the_permalink(); ?>">
        <div class="o7-content-card__circle">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon/arrow-up-right-svgrepo-com.svg" alt="arrow" class="o7-content-card__circle-arrow">
        </div>
    </a>

    <div class="o7-card-category o7-card-category--home-sec">
        <?php
        $categories = get_the_terms(get_the_ID(), 'case_study_category');
        if ($categories) :
            foreach ($categories as $cat) :
                echo '<div class="o7-card-catagory__title-wrapper"><span class="o7-card-catagory__decorative-dot"></span><p class="o7-card-catagory__title">' . esc_html($cat->name) . '</p></div>';
            endforeach;
        endif;
        ?>
    </div>

    <h3 class="o7-content-card__header"><?php the_title(); ?></h3>
</article>
