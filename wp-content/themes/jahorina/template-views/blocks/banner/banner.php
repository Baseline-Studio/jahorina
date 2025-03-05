<?php
$bg_image = get_sub_field('bg_image');
$bg_image_url = $bg_image ? esc_url($bg_image['url']) : ''; // Nema default slike

$banner_sm_image = get_sub_field('banner_sm_image');
$subtitle = get_sub_field('subtitle');
$use_small_subtitle = get_sub_field('subtitle_class'); // True/False iz ACF-a

// Postavljamo klasu za subtitle (ako je čekirano, dodaje se dodatna klasa)
$subtitle_class = 'banner__content__subtitle' . ($use_small_subtitle ? ' banner__content__subtitle--sm' : '');
?>

<div class="banner" style="background-image: url('<?php echo $bg_image_url; ?>');">
    <div class="container container--sm">
        <div class="banner__content">
            <h1 class="banner__content__title"><?php echo wp_kses_post(get_sub_field('banner_title')); ?></h1>
            <div class="banner__content-wrap">
                <?php if (!empty($banner_sm_image) && isset($banner_sm_image['url'])) : ?>
                    <div class="banner__img">
                        <img src="<?php echo esc_url($banner_sm_image['url']); ?>" alt="<?php echo esc_attr($banner_sm_image['alt'] ?? ''); ?>">
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($subtitle)) : ?>
                    <p class="<?php echo esc_attr($subtitle_class); ?>"><?php echo wp_kses_post($subtitle); ?></p>
                <?php endif; ?>
            </div>

            <?php if (have_rows('banner_btn')) : ?>
                <div class="banner-btn">
                    <?php while (have_rows('banner_btn')) : the_row(); 
                        $link = get_sub_field('link'); 
                        $label = get_sub_field('label'); 
                        if ($link && $label) : ?> 
                            <a class="btn btn--green" href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
                                <?php echo esc_html($label); ?>
                            </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php
            $banner_card_img = get_sub_field('banner_card_img'); // Povlači sliku iz ACF-a
        ?>

        <?php if (!empty($banner_card_img) && isset($banner_card_img['url'])) : ?>
            <div class="banner_img2 banner_img-mobile-none">
                <img src="<?php echo esc_url($banner_card_img['url']); ?>" alt="<?php echo esc_attr($banner_card_img['alt'] ?? ''); ?>">
            </div>
        <?php endif; ?>

    </div>
</div>

