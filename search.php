<?php
/*
    @package Skeletos
*/
get_header(); ?>

<main class="content"><div class="wrapper clearfix">

    <?php

    echo '<h1 class="page-title">Search for "' . get_search_query() . '"</h1>';

    ?>

    <div class="content-main" role="main">

    <?php

    if (have_posts()) {

        while (have_posts()) {

            the_post();

            get_template_part('partials/excerpt', get_post_format());

        } //end while

        get_template_part('partials/pagination', get_post_format());

    } else {

        get_template_part('partials/404', get_post_format());

    } //end if ?>

    </div><!--/end content-main-->
<?php get_sidebar(); ?>
</div></main><!--/end content-->
<?php get_footer(); ?>
