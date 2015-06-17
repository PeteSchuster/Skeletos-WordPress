<?php
/*
    @package Skeletos
*/
get_header(); ?>

<div class="ss-page-content"><div class="wrapper clearfix">
    <main class="ss-page-main" role="main">

        <?php get_template_part('partials/404', get_post_format()); ?>

    </main><!--/end ss-page-main-->
</div></div><!--/end ss-page-content-->
<?php get_footer(); ?>
