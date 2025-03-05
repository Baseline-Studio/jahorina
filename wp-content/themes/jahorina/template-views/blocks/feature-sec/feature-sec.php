<div class="feature-sec">
    <div class="container container--sm">
        <div class="section-head">
            <h2 class="section-head__title fade-in"><?php echo wp_kses_post(get_sub_field('title')); ?></h2>
        </div>
        <div class="feature-sec__container fade-in">
            <div class="feature-sec__item">
                <?php 
                $image = get_sub_field('left_img'); 
                if ($image) : ?>
                    <div class="brand-icon__item">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">
                    </div>
                <?php endif; ?>
            </div>

            <div class="feature-sec__item">
                <p><?php echo wp_kses_post(get_sub_field('feature_text')); ?></p>
                <div 
                    id="trnovo-animation" 
                    data-animation-path="<?php echo esc_url(get_template_directory_uri() . '/assets/videos/40m.json'); ?>" 
                    class="lottie-animation">
                </div>
            </div>

            <div class="feature-sec__item">
                <?php 
                $image2 = get_sub_field('right_image'); 
                if ($image2) : ?>
                    <div class="brand-icon__item">
                        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt'] ?? ''); ?>">
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if (have_rows('btn')) : ?>
            <div class="feature-sec__btn fade-in">
                <?php while (have_rows('btn')) : the_row(); 
                    $link = get_sub_field('link');
                    $label = get_sub_field('label');
                    if ($link && $label) : ?>
                        <a class="btn" href="<?php echo esc_url($link); ?>"><?php echo esc_html($label); ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
