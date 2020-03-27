<?php
/*
  @package Skeletos
*/
?>


<!doctype html>
<html lang="en">

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title('|', true, 'right'); ?></title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="ss-page-header" role="banner"><div class="wrapper clearfix">

  <div class="hgroup">
    <h1 class="heading3"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
    <h2 class="heading5"><?php bloginfo('description'); ?></h2>
  </div><!--/end .hgroup-->

  <a class="ss-button ss-primary-nav__show-nav" href="#ss-primary-nav"><span>Show Menu</span></a>

  <nav id="ss-primary-nav" class="ss-primary-nav">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'main',
        'menu_class' => 'ss-primary-nav__list clearfix',
        'container' => ''
      )
    );
    ?>
  </nav><!--/end primary-nav-->

</div></header><!--/end .ss-page-header-->
