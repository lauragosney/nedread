<div class="rel">
  <h2 class="mb4-l mb3 bold tc">Featured</h2>



  <div class="flex-m flex-l flex-wrap justify-between">

    <?php

    $args = array(
      'category_name' => 'work',
      'posts_per_page' => 3,
      'orderby' => 'rand',
      'post__not_in' => array($post->ID)
    );

    $query = new WP_Query( $args );

    if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>

    <a href="<?php the_permalink(); ?>" class="relative feature-image db link w-100 mb2 mb0-ns">

      <div class="overlay">
        <div class="overlay-text tc ph3">
          <h2 class="white"><?php the_title(); ?></h2>
          <p class="white mt3">– view project –</p>
        </div>
      </div>

      <div class="aspect-ratio aspect-ratio--1x1">
        <div class="aspect-ratio--object bg-center cover" style="<?php nice_background('hero_image'); ?>">
        </div>
      </div>
    </a>

    <?php endwhile; endif; ?>

  </div>

</div>
