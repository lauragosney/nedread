<?php
/**
 * The template for displaying all pages
 * Template Name: About Page
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
  <main id="main" class="site-main mb5">

  <?php
  while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content-about');

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

  endwhile; // End of the loop.
  ?>

  </main><!-- #main -->
</div><!-- #primary -->

<div>
  <a class="insta-headline" href="https://www.instagram.com/mrnedread/" target="_blank"><h2>@mrnedread</h2></a>
  <div class="flex flex-wrap mb5 justify-between"  id="instafeed"></div>
      <script type="text/javascript">
       var feed = new Instafeed({
          get: 'user',
          userId: 19240815,
          accessToken: '19240815.ee202c5.2b4f5c93c4494914b2dcbee0c566d6e4',
          limit: 3,
          resolution: 'standard_resolution',
          template: '<div class="insta-pic"><a target="_blank" href="{{link}}"><div class="overlay"><div class="caption"><div class="likes"><div class="heart"><?php echo wp_get_attachment_image(102, 'full'); ?></div><h5>{{likes}}</h5></div><h6>{{caption}}</h6></div></div><img src="{{image}}"/></a></div>'
        });

        feed.run();
      </script>

  </div>
</div>

<?php
get_footer();
