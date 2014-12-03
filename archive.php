<?php
/*
    @package Skeletos
*/
get_header(); ?>

<div class="ss-page-content has-sidebar"><div class="wrapper clearfix">

    <?php

    $archive_title = 'Archives';

    if (is_day()) {

        $archive_title = 'Daily Archives: ' . get_the_date();

    } elseif (is_month()) {

        $archive_title =  'Monthly Archives: ' . get_the_date('F Y');

    } elseif (is_year()) {

        $archive_title =  'Yearly Archives: ' . get_the_date('Y');

    } else if (is_category()) {

        $archive_title = 'Category: ' . single_cat_title('', false);

    } else if (is_tag()) {

        $archive_title = 'Tag: ' . single_cat_title('', false);

    }

    echo '<h1 class="page-title">' . $archive_title . '</h1>';

    ?>

    <main class="ss-page-main" role="main">

    <?php

    if (have_posts() ){

        while (have_posts() ){

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
