<?php
$bg_image = get_sub_field('bg_image');
$bg_image_url = $bg_image ? esc_url($bg_image['url']) : '';

$name = get_sub_field('name');
$position = get_sub_field('position');
$text = get_sub_field('text');

// Uzimamo boju teksta iz ACF-a (ako nije podešeno, default je tamno plava #052541)
$text_color = get_sub_field('text_color');
$allowed_colors = ['052541', '575D46']; // Dozvoljene boje
$text_color = in_array($text_color, $allowed_colors) ? '#' . $text_color : '#052541'; // Default ako nije validna boja
?>

<div class="text-block" <?php echo $bg_image_url ? 'style="background-image: url(' . esc_url($bg_image_url) . ');"' : ''; ?>>
    <div class="container container--sm">
        <div class="section-head fade-in" style="color: <?php echo esc_attr($text_color); ?>;">
            <?php if ($name || $position) : ?>
                <span class="section-head__pretitle">
                    <?php echo esc_html($name); ?>
                    <?php if ($position) : ?>
                        <span class="section-head__pretitle--sm"> <?php echo esc_html($position); ?></span>
                    <?php endif; ?>
                </span>
            <?php endif; ?>
            
            <?php if ($text) : ?>
                <h2 class="section-head__title"><?php echo wp_kses_post($text); ?></h2>
            <?php endif; ?>
        </div>
    </div>
</div>

