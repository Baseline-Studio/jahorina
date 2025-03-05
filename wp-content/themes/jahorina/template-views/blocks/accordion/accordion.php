<div class="accordion fade-in">
    <div class="container container--sm">
        <div class="section-head">
            <h2 class="section-head__title">
                <?php echo esc_html(get_sub_field('accordion_title')); ?>
            </h2>
        </div>
        <div class="accordion__container">
            <?php if (have_rows('accordion_items')) : ?>
                <?php while (have_rows('accordion_items')) : the_row(); ?>
                    <div class="accordion-item">
                        <h2 class="accordion-item__title js-title">
                            <?php echo esc_html(get_sub_field('question')); ?>
                        </h2>
                        <div class="accordion-item__text js-text">
                            <?php echo wp_kses_post(get_sub_field('answer')); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>