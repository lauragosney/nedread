<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edread
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Archivo|Staatliches" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="barba-wrapper">
	<div id="page" class="barba-container relative">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edread' ); ?></a>

		<header id="masthead" class="site-header mb4">
			<?php get_template_part('template-parts/content-navigation'); ?>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
