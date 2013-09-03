<?php
/*
    @package WordPress
    @subpackage Skeletos
*/

/* TEMPLATE NAME: No Title */

get_header(); ?>

<main class="content clearfix" role="main">

    <div class="content-block"><div class="wrapper">

    <?php

        while ( have_posts() ){

            the_post();

            the_content();

        }

    edit_post_link( 'Edit this entry.', '<p class="clear">', '</p>' );

    ?>

    </div></div><!--/end .content-block-->

</main><!--/end .content-->
<?php get_footer(); ?>
