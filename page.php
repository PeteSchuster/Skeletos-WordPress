<?php
/*
    @package Skeletos
*/
get_header();
?>

<div class="page-content"><div class="wrapper clearfix">

    <main class="page-main" role="main">

    <?php

    while (have_posts()) {

        the_post();

        echo '<h1 class="page-title">' . get_the_title() . '</h1>';

        the_content();

    } //end while

    edit_post_link('Edit this entry.', '<p class="clear">', '</p>');
    wp_link_pages();

    ?>

    </main><!--/end page-main-->
</div></div><!--/end page-content-->
<?php get_footer(); ?>
