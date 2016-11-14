<div class="container-fluid navbar-single">

  <div class="logo">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/doug.jpg" alt="Doug" class="logo-img">
    </a>
  </div>

  <nav class="nav" role="navigation">
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

</div><!-- /.container -->
