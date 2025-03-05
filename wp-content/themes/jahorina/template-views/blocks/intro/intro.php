<?php
$bg_image = get_sub_field('bg_image');
$bg_image_url = $bg_image ? esc_url($bg_image['url']) : get_template_directory_uri() . '/assets/images/_demo/banner-blog.jpg'; 
?>

<div class="intro">
    <div class="parallax-container">
        <div class="parallax-image" style="background-image: url('<?php echo $bg_image_url; ?>');"></div>
        <div class="container container--sm">
            <div class="section-head fade-in">
                <span class="section-head__pretitle"><?php echo get_sub_field('pretitle'); ?></span>
                <h2 class="section-head__title"><?php echo get_sub_field('title'); ?></h2>
                <span class="section-head__subtitle"><?php echo get_sub_field('subtitle'); ?></span>
            </div>
        </div>
        <div class="intro__container">
            <div class="intro__wrap">
                <div class="intro__container">
                    <!-- repeater -->
                    <?php if ( have_rows('info_items') ) : ?>
                        <?php while ( have_rows('info_items') ) : the_row(); ?>

                        <div class="intro-info">
                            <div class="intro-info__top-wrap">
                                <span class="intro-info__pretitle"><?php echo get_sub_field('faza'); ?></span>
                                <span class="intro-info__number"><?php echo get_sub_field('number'); ?></span>
                            </div>
                            <div class="intro-info__bottom-wrap">
                                <p class="intro-info__text"><?php echo get_sub_field('text'); ?></p>
                                <p class="intro-info__text"><?php echo get_sub_field('garage'); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
