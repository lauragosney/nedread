<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package edread
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main mb5 mh1-ns grid">
			<?php
				while (have_posts() ) : the_post();
					get_template_part( 'template-parts/content-category');
				endwhile;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
