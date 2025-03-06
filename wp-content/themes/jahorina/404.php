<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package NM_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php the_field('error_title', 'option'); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php the_field('error_content', 'option'); ?></p>
				
			</div><!-- .page-content -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--green"><?php the_field('error_button_name', 'option'); ?></a>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
