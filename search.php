<?php
/*
    @package Skeletos
*/
get_header(); ?>

<div class="ss-page-content has-sidebar"><div class="wrapper clearfix">

    <?php

    echo '<h1 class="page-title">Search for "' . get_search_query() . '"</h1>';

    ?>

    <main class="ss-page-main" role="main">

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

    </main><!--/end ss-page-main-->
<?php get_sidebar(); ?>
</div></div><!--/end ss-page-content-->
<?php get_footer(); ?>
