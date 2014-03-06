<?php
/*
    @package Skeletos
    TEMPLATE NAME: No Title
*/
get_header(); ?>

<main class="content"><div class="wrapper clearfix">

    <div class="content-main" role="main">

        <?php

        while (have_posts() ){

            the_post();

            the_content();

        }

        edit_post_link('Edit this entry.', '<p class="clear">', '</p>' );

        ?>

    </div><!--/end content-main-->
<?php get_sidebar(); ?>
</div></main><!--/end .content-->
<?php get_footer(); ?>
