
<article id="post-<?php the_ID(); ?>" <?php post_class("about fade flex-wrap flex"); ?>>


	<div class="entry-content mb4 w-50-l full-width pr5-l">

		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'edread' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'edread' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->


	<div class="w-50-l full-width mb4 profile">
		<?php edread_post_thumbnail(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
