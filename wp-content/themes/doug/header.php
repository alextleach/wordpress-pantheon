<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>oug</title>
		<!-- <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title> -->

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="apple-touch-icon" sizes="57x57" href="<?=get_template_directory_uri()?>/img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?=get_template_directory_uri()?>/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=get_template_directory_uri()?>/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?=get_template_directory_uri()?>/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=get_template_directory_uri()?>/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?=get_template_directory_uri()?>/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?=get_template_directory_uri()?>/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?=get_template_directory_uri()?>/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri()?>/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?=get_template_directory_uri()?>/img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri()?>/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?=get_template_directory_uri()?>/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri()?>/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?=get_template_directory_uri()?>/img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/conditionizr/4.5.1/conditionizr.min.js"></script>

		<?php wp_head(); ?>
		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
	      assets: '<?php echo get_template_directory_uri(); ?>',
	      tests: {}
      });
    </script>

	</head>
	<body <?php body_class(); ?>>

		<?php include 'templates/modules/header/mobile-menu.php'; ?>

		<!-- wrapper -->
		<div class="wrapper" id="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="hidden-xs">

					<!-- split nav with logo in middle -->
					<?php include 'templates/modules/header/navbar-split.php'; ?>

					<!-- single nav with logo on left -->
					<?php // include 'templates/modules/header/navbar.php'; ?>

				</div>

				<div class="visible-xs">

					<?php include 'templates/modules/header/mobile-navbar.php'; ?>

				</div>

			</header>
			<!-- /header -->
