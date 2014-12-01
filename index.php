<?php
/*
    @package Skeletos
*/
get_header(); ?>

<div class="content"><div class="wrapper clearfix">

    <main class="content-main" role="main">

        <?php

        if (have_posts()) {

            while (have_posts()) {

                the_post();

                get_template_part('partials/content', get_post_format());

            } //end while

            get_template_part('partials/pagination', get_post_format());

        } else {

            get_template_part('partials/404', get_post_format());

        } //end if ?>

    </main><!--/end content-main-->
<?php get_sidebar(); ?>
</div></div><!--/end content-->
<?php get_footer(); ?>
