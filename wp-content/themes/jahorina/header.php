<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NM_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>

	<!-- Preload fonts -->
	<!-- <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/OpenSans-Regular.woff2" as="font" crossorigin /> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( is_front_page() ) : ?>
    <div id="preloader" class="preloader" data-animation-path="<?php echo get_template_directory_uri(); ?>/assets/videos/preloader.json">
        <!-- Lottie animacija se učitava ovde putem JavaScript-a -->
    </div>
<?php endif; ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nm_theme' ); ?></a>

	
	<header id="masthead" class="site-header <?php echo is_front_page() ? 'site-header--transparent' : 'site-header--default'; ?>">
		<div class="container">
			<div class="site-header__container">
				<div class="site-header__branding">
					<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img
						id="logo"
						class="site-header__logo-img"
						src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg"
						data-default-logo="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg"
						data-scroll-logo="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-on-scroll.svg"
						alt="<?php bloginfo( 'name' ); ?> Logo"
						title="<?php bloginfo( 'name' ); ?>"
					>
					</a>
				</div>
				<div class="site-header__nav">
					<nav id="site-navigation" class="main-navigation">
						<div class="main-navigation__menu-wrap js-navigation">
						<div class="site-header__branding site-header__branding--mobile">
							<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img class="site-header__logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mobile-logo.svg" alt="<?php bloginfo( 'name' ); ?> Logo" title="<?php bloginfo( 'name' ); ?>">
							</a>
						</div>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'main-navigation__menu',
								)
							);
							?>
							<?php do_action('wpml_add_language_selector'); ?>
							
						</div>
						<button type="button" class="main-navigation__toggle js-menu-btn">
							<span class="main-navigation__toggle-stripe"></span>
							<span class="main-navigation__toggle-stripe"></span>
							<span class="main-navigation__toggle-stripe"></span>
						</button>
					</nav><!-- #site-navigation -->
				</div>
				<div class="site-header-custom-lang-switch desktop">
					<span class="circle"></span>
					<span class="font-down"></span>
					<?php do_action('wpml_add_language_selector'); ?>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
