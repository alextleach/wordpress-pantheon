<div class="container-fluid navbar-split">

  <nav class="nav nav-left" role="navigation">
    <?php
      wp_nav_menu(
        array(
          'menu'            => 'header-menu-left',
          'menu_class'      => '',
          'menu_id'         => '',
          'echo'            => true,
          'depth'           => 2
        )
      );
    ?>
  </nav>

  <div class="logo">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/doug.jpg" alt="Doug" class="logo-img">
    </a>
  </div>

  <nav class="nav nav-right" role="navigation">
    <?php
      wp_nav_menu(
        array(
          'menu'            => 'header-menu-right',
          'menu_class'      => '',
          'menu_id'         => '',
          'echo'            => true,
          'depth'           => 2
        )
      );
    ?>
  </nav>

</div><!-- /.container -->
