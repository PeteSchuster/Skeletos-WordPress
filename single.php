<?php
/*
    @package Skeletos
*/
get_header(); ?>

<div class="content"><div class="wrapper clearfix">

    <main class="content-main" role="main">

    <?php

    while (have_posts()) {

        the_post();

        get_template_part('partials/single', get_post_format());

    } //end while ?>

    </main><!--/end content-main-->
<?php get_sidebar(); ?>
</div></div><!--/end content-->
<?php get_footer(); ?>
