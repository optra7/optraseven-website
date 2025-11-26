<?php
/**
 * Single Blog Post Template
 */

get_header();
?>

<main id="primary" class="site-main single-blog">
    <?php while (have_posts()) : the_post();

        $post_id = get_the_ID();

        // ACF fields
        $subtitle           = get_field('subtitle', $post_id);
        $platform           = get_field('platform', $post_id);
        $author_id = get_post_field('post_author', get_the_ID());
        $author_name = get_the_author_meta('display_name', $author_id);
        $featured_image     = get_the_post_thumbnail_url($post_id, 'large');
        $banner_image = get_field('banner_image');

        // Explore links
        $explore_service    = get_field('explore_service', $post_id);
        $explore_case_study = get_field('explore_case_study', $post_id);
        $explore_portfolio  = get_field('explore_portfolio', $post_id);

        ?>
    <section class="section">
        <div class="container">
            <article <?php post_class('o7-blog-post'); ?> id="post-<?php the_ID(); ?>">

                <!-- Title & Subtitle -->
                <header class="o7-blog-post__header">
                    <h1 class="o7-blog-post__title"><?php the_title(); ?></h1>
                    <div class="o7-blog-post__platfrom-wrapper">
                        <?php if ($platform) : ?>
                            <span class="o7-blog-post__platfrom"><?php echo esc_html($platform); ?></span>
                        <?php endif; ?>

                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            $category_names = wp_list_pluck($categories, 'name');
                            ?>
                            <span class="o7-blog-post__platfrom o7-blog-post__category">
                                <?php echo esc_html(implode(', ', $category_names)); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="o7-blog-post__author-name-wrapper">
                        <p class="o7-blog-post__author-name">By <cite><?php echo esc_html($author_name); ?></cite></p>
                        <p class="o7-blog-post__date"><?php echo get_the_date(); ?></p>
                    </div>
                </header>

                <?php if (!empty($banner_image)) : ?>
                    <!-- Show Banner Image -->
                    <div class="o7-blog-post__banner-image">
                        <img src="<?php echo esc_url($banner_image); ?>" alt="<?php the_title_attribute(); ?>" width="1000" height="500">
                    </div>
                <?php elseif (!empty($featured_image)) : ?>
                    <!-- Featured Image -->
                    <div class="o7-blog-post__banner-image">
                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php the_title_attribute(); ?>" width="1000" height="500">
                    </div>
                <?php endif; ?>

                <!-- Post Content -->
                <div class="o7-blog-post__content entry-content">
                    <?php the_content(); ?>
                </div>

            </article>
        </div>
    </section>

        <!-- Comments -->
        <div class="o7-blog-post__comment-section">
            <h2 class="o7-blog-post-comment__heading">Leave A Comment</h2>

            <!-- Comment Form -->
            <div class="o7-blog-post-comment__input-box">
                <?php
                comment_form([
                    'title_reply'          => '',
                    'comment_notes_before' => '',
                    'comment_notes_after'  => '',
                    'label_submit'         => 'Submit',
                    'class_submit'         => 'btn btn--secondary btn--small',
                    'comment_field'        => '<textarea name="comment" placeholder="Type your comment here" required></textarea>',
                ]);
                ?>
            </div>

            <!-- Display Comments -->
            <div class="o7-blog-post__comments-list">
                <?php
                $comments = get_comments([
                    'post_id' => get_the_ID(),
                    'status'  => 'approve'
                ]);

                if ($comments) :
                    foreach ($comments as $comment) : ?>
                        <div class="o7-blog-post-comment__card">
                            <div class="o7-blog-post-comment__avatar-wrapper">
                                <div class="o7-blog-post-comment__avatar">
                                    <?php echo get_avatar($comment, 50); ?>
                                </div>
                                <h4 class="o7-blog-post-comment__author">
                                    <?php echo esc_html($comment->comment_author); ?>
                                </h4>
                            </div>
                            <div class="o7-blog-post-comment__content">
                                <div class="o7-blog-post-comment__text">
                                    <?php echo esc_html($comment->comment_content); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                else : ?>
                    <p>No comments yet. Be the first to comment!</p>
                <?php endif; ?>
            </div>
        </div>


        <!-- Explore More Section -->
        <?php
        // Build explore fields array
        $explore_fields = [
            'Portfolio'   => $explore_portfolio,
            'Service'     => $explore_service,
            'Case Study'  => $explore_case_study,
        ];
        $explore_fields = array_filter($explore_fields);
        ?>

        <?php if (!empty($explore_fields)) : ?>
            <section class="section o7-explore-more">
                <div class="container o7-arrow-card">
                    <h2 class="o7-arrow-card__title">Explore More</h2>

                    <div class="o7-arrow-card__card-wrapper">
                        <?php foreach ($explore_fields as $label => $url) :
                            $post_id_linked = url_to_postid($url);
                            if (!$post_id_linked) continue;

                            $linked_post = get_post($post_id_linked);
                            if (!$linked_post) continue;

                            $type_label = get_post_type_object($linked_post->post_type)->labels->singular_name ?? ucfirst($linked_post->post_type);
                            $title = get_the_title($linked_post->ID);
                            $subtitle = get_field('subtitle', $linked_post->ID);
                            $image = get_the_post_thumbnail($linked_post->ID, 'medium_large', [
                                'alt' => esc_attr($title),
                                'loading' => 'lazy',
                                'decoding' => 'async'
                            ]);
                            ?>
                            <article class="o7-arrow-card__card o7-arrow-card__card--<?php echo esc_attr($linked_post->post_type); ?>">
                                <a href="<?php echo esc_url(get_permalink($linked_post->ID)); ?>" class="o7-arrow-card__card-link">
                                    <div class="o7-arrow-card__card-image-wrapper">
                                        <?php echo $image ?: '<div class="o7-arrow-card__card-placeholder"></div>'; ?>
                                        <div class="o7-arrow-card__card-hover-chip">
                                            <svg class="o7-arrow-card__card-hover-icon" aria-hidden="true">
                                                <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="o7-arrow-card__card-title-wrapper">
                                        <div class="o7-arrow-card__card-category-wrapper">
                                            <span class="o7-arrow-card__card-decorative-dot"></span>
                                            <p class="o7-arrow-card__card-catagory-title"><?php echo esc_html($title); ?></p>
                                        </div>
                                        <h3 class="o7-arrow-card__card-tagline"><?php echo esc_html($subtitle); ?></h3>
                                    </div>
                                </a>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
