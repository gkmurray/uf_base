<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uf_Base
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Force IE to use the latest rendering engine available -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta class="foundation-mq">
	
	<!-- If Site Icon isn't set in customizer -->
	<?php if ( !has_site_icon() ) : ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-icon-touch.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		
		<!-- Chrome/Android header color -->
		<meta name="theme-color" content="#A41E12">
	<?php endif; ?>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<!-- Drop Google Analytics here -->
	<!-- end analytics -->
</head>

<body <?php body_class(); ?>>

	<div class="off-canvas-wrapper">

		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<!-- original content goes in this container -->
			<div class="off-canvas-content" data-off-canvas-content>

				<header id="masthead" class="site-header" role="banner">

					<!-- This navs will be applied to the topbar, above all content 
					To see additional nav styles, visit the /parts directory -->
					<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
				</header><!-- #masthead -->

				<div id="page" class="site">
