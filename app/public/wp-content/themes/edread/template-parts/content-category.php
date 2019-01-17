<article id="post-<?php the_ID(); ?>" <?php post_class("image-links fade link relative rel-image db link w-100"); ?>>
  <a href="<?php the_permalink(); ?>">

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
</article>
