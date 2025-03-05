<div class="scroll-container2">
  <div class="horizontal-scroll-section2">
        <!-- repeater -->
        <?php if ( have_rows('panels') ) : ?>
            <?php while ( have_rows('panels') ) : the_row(); ?>

            <section class="panel fade-in">
                <div class="panel-content">
                    <?php 
                    $name = get_sub_field('name');
                    $position = get_sub_field('position');
                    ?>

                    <?php if ($name || $position) : ?>
                        <span class="panel-content__name">
                            <?php echo esc_html($name); ?>
                            <?php if ($position) : ?>
                                <span class="panel-content__position"><?php echo esc_html($position); ?></span>
                            <?php endif; ?>
                        </span>
                    <?php endif; ?>

                    <p><?php echo wp_kses_post(get_sub_field('text')); ?></p>
                </div>
                
                <div class="panel-images">
                    <div class="panel-single__img">
                        <?php
                        $image = get_sub_field('image');
                        if (!empty($image) && isset($image['url'])) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php endwhile; ?>
        <?php endif; ?>
  </div>
</div>