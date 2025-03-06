<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NM_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer fade-in">
		<!-- <div class="container">
			<p class="site-footer__copyright">&copy; <?php echo date('Y'); ?> All Rights Reserved.</p>
		</div> -->
		
		<?php 
			$bg_image = get_field('prefooter_bg_image', 'option');
			$bg_image_url = $bg_image ? esc_url($bg_image['url']) : ''; 
			?>

			<div class="footer-top" style="background-image: url('<?php echo $bg_image_url; ?>');">
				<div class="container container--sm">
					<div class="footer-top__wrap">
						<div class="footer-top-title">
							<div class="section-head">
								<h2 class="section-head__title section-head__title--xl">
									<?php the_field('prefooter_title', 'option'); ?>
								</h2>
							</div>
						</div>
						<div class="footer-top-content">
							<div class="entry-content">
								<p><?php the_field('prefooter_text', 'option'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

		<div class="footer-bottom">
			<div class="container container--sm">
				<div class="footer-bottom__wrap">
					<div class="footer-bottom__left">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-footer.svg" alt="">
					</div>
					<div class="footer-bottom__right">
						<div class="footer-bottom__btns">
							<?php if ( have_rows('footer_btns', 'option') ) : ?>
								<?php while ( have_rows('footer_btns', 'option') ) : the_row(); ?>
									<?php 
										$link = get_sub_field('link'); // ACF polje za href
										$label = get_sub_field('label'); // ACF polje za tekst
										$opacity = get_sub_field('add_opacity') ? 'opacity ' : ''; // Provera da li je opcija uključena
									?>
									<?php if ($label) : ?>
										<a href="<?php echo esc_url($link); ?>" class="<?php echo esc_attr($opacity); ?>btn btn--white">
											<?php echo esc_html($label); ?>
										</a>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="footer-bottom__content">
					<div class="footer-bottom__content-left">
						<h3><?php the_field('footer_desc', 'option'); ?></h3>
						<a href="https://www.google.com/maps/place/%D0%91%D1%83%D0%BB%D0%B5%D0%B2%D0%B0%D1%80+%D0%B2%D0%BE%D1%98%D0%B2%D0%BE%D0%B4%D0%B5+%D0%A1%D1%82%D0%B5%D0%BF%D0%B5+52,+%D0%9D%D0%BE%D0%B2%D0%B8+%D0%A1%D0%B0%D0%B4+21000/@45.2557631,19.7906478,17z/data=!3m1!4b1!4m6!3m5!1s0x475b11c735e2b159:0x5a33add61342043e!8m2!3d45.2557631!4d19.7932227!16s%2Fg%2F11c3rn26lb?hl=sr&entry=ttu&g_ep=EgoyMDI1MDIwNC4wIKXMDSoASAFQAw%3D%3D">
							<?php the_field('footer_location', 'option'); ?>
						</a>
						<!-- <div class="footer-bottom__content-left-countries">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_demo/serbia.png" alt="">
							<a href="tel:+381648208603">+381 64 8208603</a>
							<a href="mailto:office@emeraldjahorina.com">office@emeraldjahorina.com</a>
						</div>
						<div class="footer-bottom__content-left-countries">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/_demo/serbia.png" alt="">
							<a href="tel:+381648208603">+381 64 8208603</a>
							<a href="mailto:office@emeraldjahorina.com">office@emeraldjahorina.com</a>
						</div> -->
					</div>
					<div class="footer-bottom__content-center">
						<ul>
							    <!-- repeater -->
							<?php if ( have_rows('footer_items_left','option') ) : ?>
								<?php while ( have_rows('footer_items_left','option') ) : the_row(); ?>
									<?php 
										$link = get_sub_field('link'); // ACF polje za href
										$label = get_sub_field('label'); // ACF polje za text
									?>
									<?php if ($link && $label) : ?>
										<li><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($label); ?></a></li>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
							
							<!-- <li><a href="/apartmani/">Apartmani</a></li>
							<li><a href="/dizajn/">Dizajn</a></li>
							<li><a href="/informacije-za-kupce">Informacije za kupce</a></li>
							<li><a href="/kontakt/">Kontakt</a></li> -->
						</ul>
					</div>
					<div class="footer-bottom__content-right">
						<ul>
						<?php if ( have_rows('footer_items_right', 'option') ) : ?>
							<div class="footer-bottom__content-right">
								<ul>
									<?php while ( have_rows('footer_items_right', 'option') ) : the_row(); ?>
										<?php 
											$link = get_sub_field('link'); // Page Link polje
											$label = get_sub_field('label'); // Tekstualno polje za naziv linka
											$id = get_sub_field('id'); // Tekstualno polje za hash

											// Proveri da li postoji vrednost u 'id' polju i dodaj je u link
											if ($link) {
												$link = is_array($link) ? $link['url'] : $link; // Ako je ACF Page Link, uzmi njegov URL
												if ($id) {
													$link .= '#' . ltrim($id, '#'); // Spoji URL sa hashom, uklanjajući višak #
												}
											}
										?>
										<?php if ($link && $label) : ?>
											<li><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($label); ?></a></li>
										<?php endif; ?>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>

							<!-- <li><a href="/informacije-za-kupce">EMR klub</a></li>
							<li><a href="/informacije-za-kupce#rentiranje">Program rentiranja</a></li>
							<li><a href="/informacije-za-kupce#investicija">Investicija</a></li>
							<li><a href="/politika-privatnosti">Politika privatnosti</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
