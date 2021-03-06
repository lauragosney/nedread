<?php
/**
 * The template for displaying all pages
 * Template Name: Contact Page
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
  <main id="main" class="site-main mb6-l mb5 mh1-ns">

  <?php
  while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content-contact');
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  endwhile; // End of the loop.
  ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_template_part('template-parts/content-instagram'); ?>


</div>
<?php
get_footer();
