<?php
/**
 * Logo Slider Template Part
 *
 * Usage:
 *   get_template_part('template-parts/logo-slider', null, [
 *       'images' => ['AZUNA.webp', 'Magemontreal.webp', 'Ruggable.webp']
 *   ]);
 *
 * @param array $args ['images'] Array of image filenames (with extension)
 */

$images = $args['images'] ?? [];
$path = $args['path'] ?? '/assets/images/';

if (empty($images)) return;

// Base path for images
$base_uri = get_template_directory_uri() . $path;
?>

<section class="section-infinity-logo-slider">
    <div class="section-infinity-logo-slider__container">
        <div class="o7-logo-slider">
            <?php for ($i = 0; $i < 2; $i++): ?>
                <div class="o7-logo-slider__logos">
                    <?php foreach ($images as $img): ?>
                        <img src="<?= esc_url($base_uri . $img) ?>" alt="logo-<?= esc_attr(pathinfo($img, PATHINFO_FILENAME)) ?>">
                    <?php endforeach; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
