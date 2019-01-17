<article id="post-<?php the_ID(); ?>" <?php post_class("blog fade"); ?>>


  <div class="entry-content mb6-l mb5">

    <?php if( get_field('date') ): ?>
       <h6 class="mb2"><?php the_field('date'); ?></h6>
    <?php endif; ?>

    <h2 class="mb4"><?php the_title(); ?></h2>


    <div class="w-100 profile mb4">
  		<?php edread_post_thumbnail(); ?>
  	</div>

  <?php if( have_rows('content') ): while ( have_rows('content')) : the_row();
      if ( get_row_layout() == 'text_block' ): ?>
       <!-- here we seperate our text into its own component file -->
       <div class="measure-wide center">
         <?php the_sub_field('text_content'); ?>
       </div>

  <?php endif;
  endwhile; endif; ?>
</div>

</article><!-- #post-<?php the_ID(); ?> -->
