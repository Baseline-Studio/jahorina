<div class="home-container">
    <div class="container container--m">
        <div class="home-wrap">
            <div class="video-content">
                <h1 class="banner-head__title"><?php echo wp_kses_post(get_sub_field('title')); ?></h1>
                <p><?php echo wp_kses_post(get_sub_field('subtitle')); ?></p>

                <?php if (have_rows('btn')) : ?>
                    <div class="banner-btn">
                        <?php while (have_rows('btn')) : the_row(); ?>
                            <?php 
                                $link = get_sub_field('link'); 
                                $label = get_sub_field('label');
                            ?>
                            <?php if ($link && $label) : ?>
                                <a class="btn btn--green" href="<?php echo esc_url($link); ?>">
                                    <?php echo esc_html($label); ?>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <video id="myVideo" muted playsinline>
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/emerald44.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>

