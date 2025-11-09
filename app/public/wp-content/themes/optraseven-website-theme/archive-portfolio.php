<?php
get_header();
?>

<main id="primary" class="site-main archive-portfolio">

    <!-- 🔹 Hero / Banner Section -->
    <section class="section">
        <div class="container o7-page-banner">
            <div class="o7-page-banner__heading">
                <h1 class="o7-page-banner__title">
                    <span class="o7-page-banner__decorative-dot"></span>
                    Our Works
                </h1>
                <h2 class="o7-page-banner__sub-title">
                    Discover the digital stories we’ve built for our clients
                </h2>
            </div>

            <?php
            // Optional: Add a banner image via ACF or fallback
            $banner_image = get_field('portfolio_banner_image', 'option');
            if ($banner_image) :
                $banner_url = esc_url($banner_image['url']);
                $banner_alt = esc_attr($banner_image['alt']);
            else :
                $banner_url = get_template_directory_uri() . '/images/portfolio-pages/portfolio-list-images/portfolio-banner-image.webp';
                $banner_alt = 'portfolio-banner';
            endif;
            ?>
            <div class="o7-page-banner__image-wrapper">
                <div class="o7-page-banner__image">
                    <img src="<?php echo $banner_url; ?>" alt="<?php echo $banner_alt; ?>" loading="lazy" decoding="async" />
                </div>
                <div class="o7-page-banner__image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- 🔹 Filter Section -->
    <section class="section">
        <div class="container">
            <div class="o7-list-page-filter">

                <!-- Filter List -->
                <div class="o7-list-page-filter__list-wrapper">
                    <ul class="o7-list-page-filter__list">
                        <li class="o7-list-page-filter__filter-item active" data-filter="*">All</li>
                        <?php
                        $categories = get_terms([
                            'taxonomy' => 'portfolio_category',
                            'hide_empty' => true,
                        ]);
                        foreach ($categories as $cat) :
                            echo '<li class="o7-list-page-filter__filter-item" data-filter=".' . esc_attr($cat->slug) . '">' . esc_html($cat->name) . '</li>';
                        endforeach;
                        ?>
                    </ul>
                </div>

                <!-- Portfolio Grid -->
                <div class="o7-list-page-filter__data-list">

                    <div class="o7-list-page-filter__column-left">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php
                            // Get taxonomy terms
                            $cats = get_the_terms(get_the_ID(), 'portfolio_category');
                            $cat_classes = '';
                            if ($cats && !is_wp_error($cats)) {
                                foreach ($cats as $c) {
                                    $cat_classes .= ' ' . $c->slug;
                                }
                            }

                            // Get custom fields
                            $tagline = get_field('tagline');
                            $brand_name = get_field('brand_name');
                            $platform_icon = get_field('platform_icon'); // image
                            $services = get_field('services'); // array
                            ?>
                            <article <?php post_class('o7-list-page-filter__card' . $cat_classes); ?>>
                                <a href="<?php the_permalink(); ?>">

                                    <!-- Image -->
                                    <div class="o7-list-page-filter__card-image-wrapper">
                                        <?php if (has_post_thumbnail()) :
                                            the_post_thumbnail('large', [
                                                'class' => 'o7-list-page-filter__card-image',
                                                'loading' => 'lazy',
                                                'decoding' => 'async'
                                            ]);
                                        endif; ?>

                                        <!-- Hover Chips (Services) -->
                                        <?php if ($services) : ?>
                                            <div class="o7-hover-chip">
                                                <div class="o7-hover-chip__bg">
                                                    <svg class="o7-hover-chip__icon">
                                                        <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#chip-radius-1"></use>
                                                    </svg>
                                                    <div class="o7-hover-chip__bg-span-wrapper">
                                                        <span class="o7-hover-chip__bg-span"></span>
                                                        <svg class="o7-hover-chip__bg-span-icon">
                                                            <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#chip-radius-2"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="o7-hover-chip__inner">
                                                    <?php
                                                    $count = 0;
                                                    foreach ($services as $service) {
                                                        $count++;
                                                        $hidden_class = ($count > 2) ? ' o7-hover-chip__buton--hidden-mobile' : '';
                                                        echo '<div class="o7-hover-chip__buton' . $hidden_class . '">' . esc_html($service) . '</div>';
                                                    }
                                                    if ($count > 2) {
                                                        echo '<div class="o7-hover-chip__buton o7-hover-chip__buton--hidden-pc">+' . ($count - 2) . '</div>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Platform Icon -->
                                        <?php if ($platform_icon) : ?>
                                            <div class="o7-hover-icon o7-hover-icon--shopify">
                                                <div class="o7-hover-icon__bg">
                                                    <svg class="o7-hover-icon__icon">
                                                        <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#card-curve-img-1"></use>
                                                    </svg>
                                                    <div class="o7-hover-icon__bg-span-wrapper">
                                                        <span class="o7-hover-icon__bg-span"></span>
                                                        <svg class="o7-hover-icon__bg-span-icon">
                                                            <use href="<?php echo get_template_directory_uri(); ?>/svg/svg-icon-sprite.svg#card-curve-img-2"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="o7-hover-icon__inner">
                                                    <img src="<?php echo esc_url($platform_icon['url']); ?>" alt="<?php echo esc_attr($platform_icon['alt']); ?>" loading="lazy" decoding="async" width="80" height="80" />
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                    <!-- Title + Tagline -->
                                    <div class="o7-list-page-filter__card-title-wrapper">
                                        <div class="o7-card-category">
                                            <?php
                                            if ($cats) :
                                                foreach ($cats as $c) :
                                                    echo '<div class="o7-card-catagory__title-wrapper">';
                                                    echo '<p class="o7-card-catagory__title">' . esc_html($c->name) . '</p>';
                                                    echo '</div>';
                                                endforeach;
                                            endif;
                                            if ($brand_name) :
                                                echo '<div class="o7-card-catagory__title-wrapper"><span class="o7-card-catagory__decorative-dot"></span><p class="o7-card-catagory__title">' . esc_html($brand_name) . '</p></div>';
                                            endif;
                                            ?>
                                        </div>
                                        <?php if ($tagline) : ?>
                                            <h3 class="o7-list-page-filter__card-tagline"><?php echo esc_html($tagline); ?></h3>
                                        <?php endif; ?>
                                    </div>

                                </a>
                            </article>

                        <?php endwhile;
                            wp_reset_postdata();
                        else : ?>
                            <p>No portfolio items found.</p>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
