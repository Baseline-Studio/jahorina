<?php
/**
 * Template Name: Flex Content
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NM_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="primary" class="site-main">
        <?php if (have_rows('content')) : ?>
            <?php while (have_rows('content')) : the_row(); ?>

                <?php if (get_row_layout() == 'hero') : ?>
                    <?php get_template_part('template-views/blocks/hero/hero'); ?>

                <?php elseif (get_row_layout() == 'intro') : ?>
                    <?php get_template_part('template-views/blocks/intro/intro'); ?>

                <?php elseif (get_row_layout() == 'half_sec') : ?>
                    <?php get_template_part('template-views/blocks/half-sec/half-sec'); ?>

                <?php elseif (get_row_layout() == 'feature_sec') : ?>
                    <?php get_template_part('template-views/blocks/feature-sec/feature-sec'); ?>

                <?php elseif (get_row_layout() == 'big_slider') : ?>
                    <?php get_template_part('template-views/blocks/big-slider/big-slider'); ?>

                <?php elseif (get_row_layout() == 'banner') : ?>
                    <?php get_template_part('template-views/blocks/banner/banner'); ?>

                <?php elseif (get_row_layout() == 'half_sec_map') : ?>
                    <?php get_template_part('template-views/blocks/half-sec-map/half-sec-map'); ?>

                <?php elseif (get_row_layout() == 'big_map') : ?>
                    <?php get_template_part('template-views/blocks/big-map/big-map'); ?>

                <?php elseif (get_row_layout() == 'cards') : ?>
                    <?php get_template_part('template-views/blocks/cards/cards'); ?>

                <?php elseif (get_row_layout() == 'apartments_fields') : ?>
                    <?php get_template_part('template-views/blocks/apartments-fields/apartments-fields'); ?>

                <?php elseif (get_row_layout() == 'gallery') : ?>
                    <?php get_template_part('template-views/blocks/gallery/gallery-apartmani'); ?>

                <?php elseif (get_row_layout() == 'video_banner') : ?>
                    <?php get_template_part('template-views/blocks/video-banner/video-banner'); ?>

                <?php elseif (get_row_layout() == 'text_block') : ?>
                    <?php get_template_part('template-views/blocks/text-block/text-block'); ?>

                <?php elseif (get_row_layout() == 'accordion') : ?>
                    <?php get_template_part('template-views/blocks/accordion/accordion'); ?>

                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>