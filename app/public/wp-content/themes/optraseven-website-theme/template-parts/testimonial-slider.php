<?php
/**
 * Template Part: Testimonials Section
 *
 * Usage:
 * get_template_part('template-parts/testimonial-slider', null, [
 *     'title_pointer' => 'Our Clients',
 *     'title' => 'What They Say',
 *     'subtitle' => 'Real feedback from real partners',
 *     'testimonials' => [
 *         [
 *             'client_image' => 'https://via.placeholder.com/80',
 *             'client_name' => 'John Doe',
 *             'client_title' => 'CEO, Example Inc.',
 *             'blockquote' => 'Working with this team was an excellent experience!',
 *             'company_logo' => 'https://via.placeholder.com/100x40',
 *         ],
 *     ],
 * ]);
 */

if (!defined('ABSPATH')) exit;

/* --- Defaults (like FAQ) --- */
$defaults = [
    'title_pointer' => '',
    'title'         => 'Testimonials',
    'subtitle'      => 'What our clients are saying',
    'testimonials'  => [],
];

$args  = isset($args) && is_array($args) ? $args : [];
$data  = wp_parse_args($args, $defaults);


if (empty($data['testimonials'])) {
return;
}

$uid = 'o7-testimonial-' . uniqid();
?>

<section id="<?= esc_attr($uid); ?>" class="section o7-testimonial-section">
  <div class="container">
    <div class="o7-testimonial">
      <div class="o7-section-header">
        <?php if (!empty($data['title'])): ?>
          <p class="o7-section-header__title">
            <?php if (!empty($data['title_pointer'])): ?>
              <span class="o7-section-header__title-pointer"><?= esc_html($data['title_pointer']); ?></span>
            <?php endif; ?>
            <?= esc_html($data['title']); ?>
          </p>
        <?php endif; ?>

        <?php if (!empty($data['subtitle'])): ?>
          <div class="o7-section-header__subtitle-container">
            <h2 class="o7-section-header__sub-title"><?= esc_html($data['subtitle']); ?></h2>
          </div>
        <?php endif; ?>
      </div>

      <?php if (!empty($data['testimonials'])): ?>
        <div class="o7-testimonial__card-container section__card-wrapper--scroll-x">
          <?php foreach ($data['testimonials'] as $testimonial): ?>
            <article class="o7-testimonial__card o7-content-card--scrolling-snap">
              <header class="o7-testimonial__customer-card">
                <?php if (!empty($testimonial['client_image'])): ?>
                  <img src="<?= esc_url($testimonial['client_image']); ?>" alt="<?= esc_attr($testimonial['client_name']); ?>" class="o7-testimonial__client-image">
                <?php endif; ?>

                <div class="o7-testimonial__client-nameplate">
                  <?php if (!empty($testimonial['client_name'])): ?>
                    <h3 class="o7-testimonial__client-name-wrapper">
                      <cite class="o7-testimonial__client-name"><?= esc_html($testimonial['client_name']); ?></cite>
                    </h3>
                  <?php endif; ?>
                  <?php if (!empty($testimonial['client_title'])): ?>
                    <p class="o7-testimonial__client-title"><?= esc_html($testimonial['client_title']); ?></p>
                  <?php endif; ?>
                </div>
              </header>

              <?php if (!empty($testimonial['blockquote'])): ?>
                <div class="o7-testimonial__para">
                  <svg class="o7-icon o7-testimonial__para--left-vector" aria-hidden="true">
                    <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#quote-left"></use>
                  </svg>
                  <blockquote class="o7-testimonial__blockquote"><?= esc_html($testimonial['blockquote']); ?></blockquote>
                  <svg class="o7-icon o7-testimonial__para--right-vector" aria-hidden="true">
                    <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/svg-icon-sprite.svg#quote-right"></use>
                  </svg>
                </div>
              <?php endif; ?>

              <?php if (!empty($testimonial['company_logo'])): ?>
                <footer class="o7-testimonial__card-footer">
                  <img src="<?= esc_url($testimonial['company_logo']); ?>" alt="<?= esc_attr($testimonial['client_title']); ?> logo" class="o7-testimonial__company--logo">
                </footer>
              <?php endif; ?>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div class="o7-slider-control">
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
    </div>
  </div>
</section>
