<article id="post-<?php the_ID(); ?>" <?php post_class("hero-image image-links relative w-db link w-100 mb2-ns"); ?>>


  <a href="<?php the_permalink(); ?>" class="db">

    <div class="overlay">
      <div class="overlay-text tc ph3">
        <h2 class="white"><?php the_title(); ?></h2>
        <p class="white mt3">– view project –</p>
      </div>
    </div>
      <div class="cat-image cover bg-center" style="<?php nice_background('hero_image'); ?>">
      </div>
  </a>
</article>
