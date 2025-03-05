<?php
/**
 * Template Name: Information
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
			get_template_part( 'template-views/blocks/banner/banner-information' );
            get_template_part( 'template-views/blocks/half-sec/half-sec-information' );
            get_template_part( 'template-views/blocks/accordion/accordion' );
			get_template_part( 'template-views/blocks/cards/cards' );
			// get_template_part( 'template-views/blocks/cta/cta-information' );
		?>
	</main>
</div>

<?php
get_footer();