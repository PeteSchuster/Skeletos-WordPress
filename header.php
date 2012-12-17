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

<body <?php body_class(); ?> role="application">

<header id="top" class="header" role="banner"><div class="wrapper clearfix">

	<hgroup>
		
		<h1 class="heading2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		
		<h2 class="heading3"><?php bloginfo( 'description' ); ?></h2>
	
	</hgroup>

	<?php /*
	To use a logo instead of the site name.
	Styles are already in place in CSS. 
	<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	*/ ?>

	<a id="show_menu" class="button icon icon_menu show_menu" href="#"><span class="ir">Show Menu</span></a>

	<nav role="navigation">

		<?php wp_nav_menu( array( 'menu' => 'main', 'menu_class' => 'list_styled list_primary_nav clearfix', 'container' => '' ) ); ?>
	
	</nav><!--/end nav-->

</div></header><!--/end .header-->

<div id="container">