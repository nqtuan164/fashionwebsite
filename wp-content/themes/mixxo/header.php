<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body>
<div id="page" class="hfeed site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a> -->
	
	<!-- LOGO -->
	<div id="header" class="row">
		<div id="logo" class="container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img id="img-logo" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() . '/img/logo.png'; ?>" height="94" width="268" alt="">
			</a>
		</div>
	</div>
	<!-- END of LOGO -->

	<!-- MENU -->
	
	<div id="menu">
		<div class="nav-menu">
			<nav class="navbar container navbar-default">
			<?php 
				wp_nav_menu( 
					array( 
						'theme_location' => 'primary', 
						'menu_class' => 'nav navbar-nav',
						'container'       => 'div',
						'container_class' => 'navbar-collapse collapse',
						'container_id'    => 'main-menu',
					) 
				); 
			?>
			</nav>
		</div>
	</div>


	<!-- <div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding --
		</header><!-- .site-header --

		<?php get_sidebar(); ?>
	</div><!-- .sidebar --> 
	<!-- END of MENU -->



	<div id="main-content" class="row">
