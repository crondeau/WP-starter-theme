<?php
/**
 * The header for our theme.
 *
  * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package blm_basic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part( 'inc/favicons' ); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">	
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'blm_basic' ); ?></a>

	<header id="masthead" class="site__header row" role="banner">	
		<div class="site__header--wrapper">	
		
			<div id="branding" class="site__branding">
			<?php if ( is_front_page() || is_home() ) : ?>
				<h1 class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site__description"><?php bloginfo( 'description' ); ?></h2>
			<?php else: ?>
				<p class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
				<p class="site__description"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
			</div>
		
			<nav id="site__nav" class="site__nav main__nav" role="navigation">
				<button class="main__nav--toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'blm_basic' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>	

		</div>	
	</header>

	<div id="content" class="site__content">