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
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Ned Read, Creative Director and Designer based in London"/>
	<meta name="description" content="Ned Read is a Creative Director and Designer based in London, with an editorial background, now specialising in graphic communication, branding, editorial design, illustration, typography and web design.
"/>
	<meta property="og:description" content="Ned Read is a Creative Director and Designer based in London, with an editorial background, now specialising in graphic communication, branding, editorial design, illustration, typography and web design.
."/>
	<meta property="og:url" content="https://www.nedread.com/"/>
	<meta property="og:image" content="https://nedread.com/wp-content/uploads/2019/01/NR-LOGO-1.jpg"/>
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:site" content="@MrNedRead"/>
	<meta name="twitter:title" content="Ned Read, Creative Director and Designer based in London"/>
	<meta name="twitter:description" content="Ned Read is a Creative Director and Designer based in London, with an editorial background, now specialising in graphic communication, branding, editorial design, illustration, typography and web design.
"/>
	<meta name="twitter:image" content="https://nedread.com/wp-content/uploads/2019/01/NR-LOGO-1.jpg"/>
	<meta name="twitter:image:alt" content="Ned Read, Creative Director and Designer based in London"/>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Archivo|Staatliches" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edread' ); ?></a>

		<header id="masthead" class="site-header fixed w-100 top-0 left-0 ph1-ns">
			<?php get_template_part('template-parts/content-navigation'); ?>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
