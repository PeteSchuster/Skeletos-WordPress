<?php
/*
    @package Skeletos
*/
get_header(); ?>

<main class="content clearfix" role="main">

    <?php

    if ( have_posts() ){

    ?>

    <h1><?php single_cat_title(); ?></h1>

    <?php

        while ( have_posts() ){

            the_post();

    ?>

            <div class="content-block"><div class="wrapper">

                <article <?php post_class(); ?>>

                    <header>
                        <h1 class="heading2"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

                        <h6>Posted by <?php the_author_link(); ?> on <a href="<?php the_permalink() ?>"><time datetime="<?php the_time( 'c' ); ?>"><?php the_time( get_option( 'date_format' ) ) ?></time></a></h6>
                    </header>

                    <?php the_excerpt(); ?>

                </article><!--/end article-->

                <p class="heading6"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?> Posted in <?php the_category( ', ' ) ?> | <?php edit_post_link( 'Edit', '', ' | ' ); ?>  <?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?></p>

            </div></div><!--/end .content-block-->

        <?php

        } //end while

    ?>

        <div class="content-block"><div class="wrapper">

            <div class="clearfix">
                <p class="right"><?php previous_posts_link( 'Newer Entries &raquo;' ) ?></p>
                <p class="left"><?php next_posts_link( '&laquo; Older Entries' ) ?></p>
            </div>

        </div></div><!--/end .content-block-->

    <?php

    } else {

    ?>

        <div class="content-block"><div class="wrapper">

            <h1>Sorry nothing here yet...</h1>

            <p>Please check back later for future updates.</p>

        </div></div><!--/end .content-block-->

    <?php

    } //end if

    ?>

</main><!--/end .content-->
<?php get_footer(); ?>