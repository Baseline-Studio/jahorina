<div class="half-sec">
    <div class="container container--sm">
        <div class="half-sec__wrap fade-in">
            <?php if (have_rows('images')) : ?>
                <div class="swiper mySwiper half-sec__slider">
                    <div class="swiper-wrapper">
                        <?php while (have_rows('images')) : the_row(); ?>
                            <div class="swiper-slide">
                                <?php
                                $image = get_sub_field('image');
                                $video = get_sub_field('video'); // Povlači video URL iz ACF-a

                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                <?php elseif (!empty($video)) : ?>
                                    <video autoplay muted playsinline>
                                        <source src="<?php echo esc_url($video); ?>" type="video/mp4">
                                        Vaš pretraživač ne podržava video tag.
                                    </video>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            <?php endif; ?>

            <div class="half-sec__content fade-in">
                <?php
                $half_sec_title = get_sub_field('half_sec_title');
                $half_sec_text = get_sub_field('half_sec_text');
                ?>

                <?php if (!empty($half_sec_title)) : ?>
                    <div class="entry-content">
                        <h2><?php echo wp_kses_post($half_sec_title); ?></h2>
                    </div>
                <?php endif; ?>

                <?php if (!empty($half_sec_text)) : ?>
                    <div class="entry-content">
                        <?php echo wp_kses_post($half_sec_text); ?>
                    </div>
                <?php endif; ?>

                <?php
                $btn = get_sub_field('btn');
                if (!empty($btn['label']) && !empty($btn['link'])) :
                ?>
                    <div class="half-sec__btn">
                        <a class="btn" href="<?php echo esc_url($btn['link']); ?>">
                            <?php echo esc_html($btn['label']); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

