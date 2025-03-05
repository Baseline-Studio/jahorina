<div class="big-slider animate-section">
    <div class="container container--sm">
        <div class="section-head fade-in">
            <h2 class="section-head__title"><?php echo wp_kses_post(get_sub_field('title')); ?></h2>
        </div>

        <?php if (have_rows('images')) : ?>
            <div class="fade-in">
                <div class="swiper bigSwiper big-slider__wrap">
                    <div class="swiper-wrapper">
                        <?php while (have_rows('images')) : the_row(); ?>
                            <?php $image = get_sub_field('image'); ?>
                            <?php if ($image) : ?>
                                <div class="swiper-slide">
                                    <div class="brand-icon__item">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        <?php endif; ?>
        
        <?php 
        $text = get_sub_field('text');
        if (!empty($text)) : ?>
            <div class="big-slider__content">
                <div class="entry-content">
                    <p><?php echo wp_kses_post($text); ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php 
        $link = get_sub_field('button_link');
        $label = get_sub_field('button_label');
        if (!empty($link) && !empty($label)) : ?>
            <div class="big-slider__btn">
                <a class="btn" href="<?php echo esc_url($link); ?>"><?php echo esc_html($label); ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>

