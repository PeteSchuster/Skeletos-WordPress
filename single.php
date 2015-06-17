<?php
/*
    @package Skeletos
*/
get_header(); ?>

<div class="page-content has-sidebar"><div class="wrapper clearfix">

    <main class="page-main" role="main">

    <?php

    while (have_posts()) {

        the_post();

        get_template_part('partials/single', get_post_format());

    } //end while ?>

    </main><!--/end page-main-->
<?php get_sidebar(); ?>
</div></div><!--/end page-content-->
<?php get_footer(); ?>
