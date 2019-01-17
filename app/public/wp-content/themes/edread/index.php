<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

			$args = array(
				'category_name' => 'work',
	    );

	    $query = new WP_Query( $args );

	    if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

				<?php get_template_part('template-parts/content-category'); ?>

			<?php endwhile; endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
