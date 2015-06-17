<?php
/*
    @package Skeletos
*/
get_header(); ?>

<div class="page-content"><div class="wrapper clearfix">
    <main class="page-main" role="main">

        <?php get_template_part('partials/404', get_post_format()); ?>

    </main><!--/end page-main-->
</div></div><!--/end page-content-->
<?php get_footer(); ?>
