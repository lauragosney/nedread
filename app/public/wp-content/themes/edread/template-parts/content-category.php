<article id="post-<?php the_ID(); ?>" <?php post_class("hero-image image-links relative w-db link w-100 mb2-ns"); ?>>


  <a href="<?php the_permalink(); ?>" class="db">

    <div class="overlay">
      <div class="overlay-text">
        <h2 class="tc ph3 white"><?php the_title(); ?></h2>
        <p class="tc ph3 white mt3">– view project –</h2>
      </div>
    </div>
      <div class="vh-50 cover bg-center" style="<?php if( get_field('hero_image')): ?>
        background-image: url(<?php the_field('hero_image'); ?>);
        <?php endif; ?>">
      </div>
  </a>
</article>
