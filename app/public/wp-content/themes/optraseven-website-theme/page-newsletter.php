<?php get_header(); ?>

<main class="main">
    <div class="subscription-success-container">
        <div class="icon-wrapper">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_3861_1268)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0C46.5575 0 60 13.4425 60 30C60 46.5575 46.5575 60 30 60C13.4425 60 0 46.5575 0 30C0 13.4425 13.4425 0 30 0ZM30 2.5C45.1775 2.5 57.5 14.8225 57.5 30C57.5 45.1775 45.1775 57.5 30 57.5C14.8225 57.5 2.5 45.1775 2.5 30C2.5 14.8225 14.8225 2.5 30 2.5ZM47.5 21.1425L24.9875 45.055L12.5 30.3925L14.4025 28.77L25.08 41.31L45.68 19.43L47.5 21.1425Z" fill="black"></path>
                </g>
                <defs>
                <clipPath id="clip0_3861_1268">
                <rect width="60" height="60" fill="white"></rect>
                </clipPath>
                </defs>
            </svg>
        </div>
        <?php
            while (have_posts()): the_post();
                the_title('<h1>', '</h1>');
                the_content();
            endwhile;
        ?>
            <a href="<?php echo home_url(); ?>" class="btn btn--secondary btn--medium">
                Go back homepage
                <svg class="fee-icon" aria-hidden="true" focusable="false">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#arrow-up-right"></use>
                 </svg>
            </a>
            </div>
            
</main>

<?php get_footer(); ?>
