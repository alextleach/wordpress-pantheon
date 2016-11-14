<nav class="nav" id="mobile-menu" role="navigation">
  <?php
    wp_nav_menu(
      array(
        'menu'            => 'header-menu',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => true,
        'depth'           => 2
      )
    );
  ?>
</nav>
