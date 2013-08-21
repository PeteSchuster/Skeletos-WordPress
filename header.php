<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title><?php wp_title( '&laquo;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="header content-block clearfix" role="banner"><div class="wrapper">

	<div class="hgroup">

		<h1 class="heading2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		<h2 class="heading3"><?php bloginfo( 'description' ); ?></h2>

	</div><!--/end .hgroup-->

	<a id="show-nav" class="button icon-menu show-nav" href="#"><span>Menu</span></a>

	<nav id="nav" class="nav" role="navigation">
		<h1 class="visuallyhidden">Main Navigation</h1>

		<?php wp_nav_menu( array( 'menu' => 'main', 'menu_class' => 'list-primary-nav clearfix', 'container' => '' ) ); ?>

	</nav><!--/end nav-->

	<?php echo get_search_form( true ); ?>

</div></header><!--/end .header-->