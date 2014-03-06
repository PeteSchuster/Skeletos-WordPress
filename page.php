<?php
/*
    @package Skeletos
*/
get_header();
?>

<main class="content" role="main"><div class="wrapper clearfix">

    <?php

    while (have_posts() ){

        the_post();

        echo '<h1 class="page-title">' . get_the_title() . '</h1>';

        the_content();

    } //end while

    edit_post_link('Edit this entry.', '<p class="clear">', '</p>' );
    wp_link_pages();

    ?>

</div></main><!--/end .content-->
<?php get_footer(); ?>
