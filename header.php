<?php
/*
    @package Skeletos
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title><?php wp_title('|', true, 'right'); ?></title>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="header" role="banner"><div class="wrapper clearfix">

    <div class="hgroup">
        <h1 class="heading3"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <h2 class="heading5"><?php bloginfo('description'); ?></h2>
    </div><!--/end .hgroup-->

    <button id="show-nav" class="ss-text-button show-nav"><span>Menu</span></button>

    <nav id="nav" class="primary-nav" role="navigation">
        <?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'ss-list-primary-nav clearfix', 'container' => '')); ?>
    </nav><!--/end nav-->

</div></header><!--/end .header-->
