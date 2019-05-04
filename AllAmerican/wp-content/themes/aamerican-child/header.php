<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body>
<div id="home" class="full-wrapper">			

	<?php if ( has_nav_menu( 'social' ) ) : ?>							
		<?php
			wp_nav_menu( array(
				'theme_location' => 'social',
				'menu_class'     => 'social-links-menu',
				container => ''
			) );
		?>							
	<?php endif; ?>
	<?php /* <div class="rihno-icon"><a href="#rhino-linings"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rhino-logo.png"></a></div>
	<div class="facebook-icon"><a href="https://www.facebook.com/AAOLLC/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png"></a></div>			
	*/ ?>			

		<header  class="header">
			<div class="inner-wrapper header-wrapper">
				<div class="logo-left">
					<div class="logo-div"><a href="#home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a></div>
				</div>
				<div class="menu-right">
					<div class="mobile-menu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mobile-menu-white.png"></div>
					<div class="menu-wrapper">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>						
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
										container => ''
									 ) );
								?>						
						<?php endif; ?>
						<?php /* <ul>
							<li><a href="#about-us">About Us</a></li><li><a href="#Archery">Archery</a></li><li><a href="#firearm">Firearms</a></li><li><a href="#fishing">Fishing</a></li><li><a href="#trapping">Trapping</a></li><li><a href="#contact-us">Contact</a></li>
						</ul> */ ?>
					</div>

				</div>
			</div>
		</header>