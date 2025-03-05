<?php
/**
 * Template Name: Design
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
	<main id="main" class="site-main" role="main">
		<?php // get content blocks
			get_template_part( 'template-views/blocks/video-banner/video-banner' );
			get_template_part( 'template-views/blocks/text-block/text-block' );
			get_template_part( 'template-views/blocks/gallery/gallery' );
			get_template_part( 'template-views/blocks/text-block/text-block-yellow' );
			// get_template_part( 'template-views/blocks/cta/cta-design' );
		?>
	</main>
</div>

<?php
get_footer();