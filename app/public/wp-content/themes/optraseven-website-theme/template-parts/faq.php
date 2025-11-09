<?php

/**
 * Template part: FAQ (reusable)
 *
 * Usage:
 * get_template_part( 'template-parts/faq', null, array(
 *    'title_pointer' => '...',
 *    'sub_title'     => '...',
 *    'title'         => 'Frequently Asked Questions',
 *    'button_text'   => 'Get In Touch',
 *    'sprite_path'   => get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg',
 *    'questions'     => [ ['q' => 'Question?', 'a' => 'Answer...'], ... ],
 * ) );
 *
 * The template safely falls back to sensible defaults.
 */

if (! defined('ABSPATH')) {
    exit;
}

$defaults = array(
    'title_pointer' => '',
    'title'         => 'Frequently Asked Questions',
    'sub_title'     => 'Answers to Things You Might Be Wondering',
    'button_text'   => 'Get In Touch',
    'sprite_path'   => get_template_directory_uri() . '/assets/icons/svg-icon-sprite.svg',
    'questions'     => array(),
);

$args = isset($args) && is_array($args) ? $args : array();
$data = wp_parse_args($args, $defaults);

/* If no questions passed, populate from the example content you gave */
if (empty($data['questions'])) {
    $data['questions'] = array(
        array(
            'q' => 'How much does a website cost?',
            'a' => 'Timelines depend on the spec of the website project, but here\'s some guidelines...'
        ),
        array(
            'q' => 'How long does a website project usually take to complete?',
            'a' => 'Timelines depend on the spec of the website project, but here\'s some guidelines...'
        ),
        array(
            'q' => 'How easy is it for me to change content myself?',
            'a' => 'Timelines depend on the spec of the website project, but here\'s some guidelines...'
        ),
        array(
            'q' => 'Can I create PPC landing pages myself?',
            'a' => 'Timelines depend on the spec of the website project, but here\'s some guidelines...'
        ),
        array(
            'q' => 'We have limited budget, will you still work with us?',
            'a' => 'Timelines depend on the spec of the website project, but here\'s some guidelines...'
        ),
        array(
            'q' => 'Do you outsource any work?',
            'a' => 'Timelines depend on the spec of the website project, but here\'s some guidelines...'
        ),
    );
}

/* Unique ID so multiple FAQ blocks can co-exist */
$uid = 'o7-faq-' . uniqid();

$sprite = esc_url($data['sprite_path']);
?>
<section id="<?php echo esc_attr($uid); ?>" class="section section-faq">
    <div class="container">
        <div class="o7-faq__container">
            <div class="o7-faq__block-left">
                <div class="o7-section-header o7-accordion-header">
                    <p class="o7-section-header__title">
                        <span class="o7-section-header__title-pointer"><?php echo esc_html($data['title_pointer']); ?></span>
                        <?php echo esc_html($data['title']); ?>
                    </p>
                    <div class="o7-section-header__subtitle-container flex-col align-start">
                        <h2 class="o7-section-header__sub-title">
                            <?php echo esc_html($data['sub_title']); ?>
                        </h2>
                        <a href="#" class="btn btn--secondary btn--medium button__mobile--invisible">
                            <?php echo esc_html($data['button_text']); ?>
                            <svg class="fee-icon" aria-hidden="true" focusable="false">
                                <use href="<?php echo $sprite . '#arrow-up-right'; ?>"></use>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="o7-section-header o7-section-header-tab-visible">
                    <p class="o7-section-header__title">
                        <span class="o7-section-header__title-pointer"><?php echo esc_html($data['title_pointer']); ?></span>
                        <?php echo esc_html($data['title']); ?>
                    </p>
                    <div class="o7-section-header__subtitle-container">
                        <h2 class="o7-section-header__sub-title">
                            <?php echo esc_html($data['sub_title']); ?>
                        </h2>
                        <a href="#" class="btn btn--secondary btn--medium button__mobile--invisible">
                            <?php echo esc_html($data['button_text']); ?>
                            <svg class="fee-icon" aria-hidden="true" focusable="false">
                                <use href="<?php echo $sprite . '#arrow-up-right'; ?>"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="o7-faq__block-right">
                <ol class="o7-accordion" aria-labelledby="<?php echo esc_attr($uid); ?>-heading">
                    <?php foreach ($data['questions'] as $index => $qa) :
                        $item_id = $uid . '-item-' . $index;
                        $expanded = 'false';
                    ?>
                        <li
                            id="<?php echo esc_attr($item_id); ?>"
                            class="o7-accordion__item"
                            role="button"
                            tabindex="0"
                            aria-expanded="<?php echo esc_attr($expanded); ?>"
                            data-o7-accordion-item>
                            <div class="o7-accordion__question" data-o7-accordion-toggle>
                                <p class="o7-accordion__question-text"><?php echo esc_html($qa['q']); ?></p>
                                <div class="o7-accordion__icon-wrapper">
                                    <svg class="o7-icon o7-accordion__icon" aria-hidden="true" focusable="false">
                                        <use href="<?php echo $sprite . '#arrow-up-right'; ?>"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="o7-accordion__answer" hidden data-o7-accordion-panel>
                                <p class="o7-accordion__answer-text"><?php echo wp_kses_post(nl2br(esc_html($qa['a']))); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>

            <a href="#" class="btn btn--secondary btn--medium button__mobile--visible">
                <?php echo esc_html($data['button_text']); ?>
                <svg class="fee-icon" aria-hidden="true" focusable="false">
                    <use href="<?php echo $sprite . '#arrow-up-right'; ?>"></use>
                </svg>
            </a>
        </div>
    </div>
</section>