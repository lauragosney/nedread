<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package edread
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content mb5 mb6-ns ph1-ns fade">
		<div class="intro flex-l flex-wrap-l justify-between mb4">
				<h2><?php the_title(); ?><h2>

				<?php if( get_field('subhead') ): ?>
					 <h3 class="measure-wide-subhead"><?php the_field('subhead'); ?></h3>
				<?php endif; ?>
		</div>

		<div class="w-100 profile mb2 ph1-ns">
			<?php edread_post_thumbnail(); ?>
		</div>




		<div>
			<!-- if we have some flexible content, let’s loop through it -->
			<?php if( have_rows('content') ): while ( have_rows('content')) : the_row();
			  // if it’s a header, go through the data

				if ( get_row_layout() == 'gallery'): ?>

					<?php get_template_part('template-parts/content-gallery'); ?>


				<?php elseif ( get_row_layout() == 'text_block' ): ?>

				 <!-- here we seperate our text into its own component file -->
				 <?php get_template_part('template-parts/content-text'); ?>

				<?php endif;
			endwhile; endif; ?>



		</div>

	</div><!-- .entry-content -->

	<div class="mb5 fade">
		<?php get_template_part('template-parts/content-explore'); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
