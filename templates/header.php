<header class="banner">
  <div class="container">
    <span class="icon-bar"></span>
    <a class="brand" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><span class="logo"></span><span class="logo-mobile"></span></a>
  </div>
  <div class="close-zone"><span class="close-menu"></span></div>
  <nav class="nav-primary">
    <div class="container">
      <div class="text-right visible-xs"><span class="logo-menu"></span></div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-bar']);
      endif;
      ?>
    </div>
  </nav>
</header>
