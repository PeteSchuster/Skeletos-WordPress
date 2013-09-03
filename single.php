<?php
/*
    @package WordPress
    @subpackage Skeletos
*/
get_header(); ?>

<main class="content clearfix" role="main">

    <div class="content-block"><div class="wrapper">

    <?php

    while ( have_posts() ){

        the_post();

    ?>

        <article <?php post_class(); ?>>

            <?php if ( has_post_thumbnail() ){

                the_post_thumbnail( 'full', array( 'class' => 'aligncenter' ) );

            } ?>

            <header>
                <h1><?php the_title(); ?></h1>

                <b class="heading6">Posted by <cite><?php the_author_link(); ?></cite> on <time datetime="<?php the_time('c'); ?>"><?php the_time( get_option( 'date_format' ) ) ?></time></b>
            </header>

            <?php the_content(); ?>

        </article>

        <p class="heading6"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?> Posted in <?php the_category( ', ' ) ?> | <?php edit_post_link( 'Edit', '', ' | ' ); ?>  <?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?></p>

        <?php comments_template(); ?>

    <?php } //end while ?>

    </div></div><!--/end .content-block-->

</main><!--/end .content-->
<?php get_footer(); ?>
