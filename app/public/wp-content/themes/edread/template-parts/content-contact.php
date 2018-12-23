
<article id="post-<?php the_ID(); ?>" <?php post_class("contact"); ?>>


	<div class="entry-content w-60 pr4">
    <header class="entry-header">
  		<?php
  		if ( is_singular() ) :
  			the_title( '<h2 class="entry-title">', '</h2>' );
  		else :
  			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  		endif;

  		if ( 'post' === get_post_type() ) :
  			?>
  		<?php endif; ?>
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

  <div class="w-40 profile">
    <?php edread_post_thumbnail(); ?>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->
