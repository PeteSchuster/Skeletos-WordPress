<?php
/*
    @package Skeletos
*/
get_header(); ?>

<main class="content"><div class="wrapper clearfix">

    <div class="content-main" role="main">

    <?php

    while (have_posts()) {

        the_post();

        get_template_part('partials/single', get_post_format());

    } //end while ?>

    </div><!--/end content-main-->
<?php get_sidebar(); ?>
</div></main><!--/end content-->
<?php get_footer(); ?>
