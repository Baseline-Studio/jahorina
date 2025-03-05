<div class="half-sec-map">
    <div class="container container--sm">
        <div class="section-head fade-in">
            <h2 class="section-head__title"><?php echo get_sub_field('title'); ?></h2>
            <p class="section-head__subtitle"><?php echo get_sub_field('text'); ?></p>
        </div>
        <div class="half-sec-map__container">
            <div class="half-sec-map-image fade-in">
                <?php
                    $image = get_sub_field('map');
                    if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endif;
                ?>
            </div>
            <div class="half-sec-map__distance fade-in">
                <h3><?php echo get_sub_field('table_title'); ?></h3>
                <div class="half-sec-map__distance-wrap">
                    <div class="half-sec-map__distance-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_demo/pin2a.svg" alt="">
                    </div>
                    <div class="half-sec-map__distance-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_demo/travel.svg" alt="">
                    </div>
                    <div class="half-sec-map__distance-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_demo/car.svg" alt="">
                    </div>
                </div>
                <ul>
                        <!-- repeater -->
                    <?php if ( have_rows('items') ) : ?>
                        <?php while ( have_rows('items') ) : the_row(); ?>
                            <li>
                                <span class="city-name"><?php echo get_sub_field('city_name'); ?></span>
                                <span class="travel-time"><?php echo get_sub_field('travel_time'); ?></span>
                                <span class="distance"><?php echo get_sub_field('distance'); ?></span>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                
                </ul>
            </div>
        </div>
    </div>
</div>