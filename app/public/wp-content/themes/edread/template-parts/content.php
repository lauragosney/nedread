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

	<div class="entry-content">
		<section class="intro flex flex-wrap justify-between mb4">
				<h2><?php the_title(); ?><h2>

				<?php if( get_field('subhead') ): ?>
					 <h3><?php the_field('subhead'); ?></h3>
				<?php endif; ?>
		</section>

		<section class="hero mb4 vh-100-ns bg-center cover" style="<?php if(get_field('hero_image') ): ?>
			background-image: url(<?php the_field('hero_image'); ?>);
		<?php endif; ?>">
		</section>

		<?php the_content();?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
