<?php
/*
  @package Skeletos
*/
get_header();
?>

<div class="ss-page-content"><div class="wrapper clearfix">

  <main class="ss-page-main" role="main">

  <?php

  while (have_posts()) {

    the_post();

    echo '<h1 class="page-title">' . get_the_title() . '</h1>';

    the_content();

  } //end while

  edit_post_link('Edit this entry.', '<p class="clear">', '</p>');
  wp_link_pages();

  ?>

  </main><!--/end ss-page-main-->
</div></div><!--/end ss-page-content-->
<?php get_footer(); ?>
