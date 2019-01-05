<?php
/**
 * The template for displaying all pages
 * Template Name: Blog Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package edread
 */

get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main mb6-l mb5 wide">
    <?php

    $args = array(
      'tag' => 'blog',
    );

    $query = new WP_Query( $args );
    if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
      <?php get_template_part( 'template-parts/content-blog'); ?>
    <?php endwhile; endif; ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_template_part( 'template-parts/content-instagram'); ?>

<?php
get_footer();
