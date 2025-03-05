<div id="investicija" class="cards">
    <div class="container container--sm">
        <div class="section-head fade-in">
            <h2 class="section-head__title"><?php echo get_sub_field('cards_title'); ?></h2>
        </div>
        <div class="cards__container">
            <?php if( have_rows('cards_repeater') ): ?>
                <?php while( have_rows('cards_repeater') ): the_row(); ?>
                    <div class="card-item fade-in <?php echo get_sub_field('reverse_layout') ? 'card-item--reverse' : ''; ?>">
                        <div class="card-item__text">
                            <p><?php the_sub_field('card_text'); ?></p>
                        </div>
                        
                        <!-- Slike za desktop -->
                        <div class="card-item__images">
                            <?php if( have_rows('desktop_images') ): ?>
                                <?php while( have_rows('desktop_images') ): the_row(); ?>
                                    <div class="card-item__image">
                                        <?php
                                            $image = get_sub_field('desktop_image'); // Ispravno polje
                                            if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                            <?php endif;
                                        ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <!-- Slider za mobilne uređaje -->
                        <div class="card-item__slider swiper">
                            <div class="swiper-wrapper">
                                <?php if( have_rows('mobile_images') ): ?>
                                    <?php while( have_rows('mobile_images') ): the_row(); ?>
                                        <div class="swiper-slide">
                                            <?php
                                                $image2 = get_sub_field('mobile_image'); // Ispravno polje
                                                if ($image2) : ?>
                                                    <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
                                                <?php endif;
                                            ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
