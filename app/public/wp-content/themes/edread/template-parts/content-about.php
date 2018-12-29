
<article id="post-<?php the_ID(); ?>" <?php post_class("about"); ?>>


	<div class="entry-content mb4 measure-wide">
    <header class="entry-header mb4">

  	</header><!-- .entry-header -->

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


	<div class="w-100 profile">
		<?php edread_post_thumbnail(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
