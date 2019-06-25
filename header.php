<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="indicator">
	<div class="xxl">xxl 1380</div>
	<div class="xl">xl 1180</div>
	<div class="lg">lg 990</div>
	<div class="md">md 760</div>
	<div class="sm">sm 600</div>
	<div class="xs">xs 400</div>
	<div class="xxs">xxs 100%</div>
</div>

<div class="oh">

<header class="header">
	<div class="container">
	<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?=_e( 'Home Page', 'emp_wpst' ); ?>" /></a>

	<?php
		wp_nav_menu( array(
		    'container'         => 'nav',
		    'theme_location'    => 'primary'
		) );
	?>


	<button class="menu-toggle">
		<span class="label">Menu</span>
		<span class="ico"><i></i></span>
	</button>

	</div>
</header>

<div class="offscreen-menu">
    <div class="close">Close</div>
    <nav class="main_menu">
        <?php
			wp_nav_menu( array(
			    'container'         => 'nav',
			    'theme_location'    => 'primary'
			) );
		?>
    </nav>
</div>