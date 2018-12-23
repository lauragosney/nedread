<nav id="site-navigation" class="main-navigation flex flex-wrap justify-between">
  <a href="<?php echo get_site_url(); ?>"	class="logo">
    <h1>Ned Read</h1>
  </a>

  <?php
  wp_nav_menu( array(
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
    'menu_class'		 => 'main-menu',
  ) );
  ?>
</nav><!-- #site-navigation -->
