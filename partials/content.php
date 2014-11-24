<?php
/*
    @package Skeletos
*/
?>

<div class="entry">

    <article <?php post_class(); ?>>

        <?php get_template_part('partials/featured-image', get_post_format()); ?>

        <header>

            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

            <p class="date">
                posted by: <?php the_author_link(); ?><br />
                <a href="<?php the_permalink(); ?>"><time datetime="<?php the_time('c'); ?>"><?php the_time(get_option('date_format')); ?></time></a><br />
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
            </p>

        </header>

        <?php

        the_content();

        get_template_part('partials/meta', get_post_format());

        ?>

    </article><!--/end article-->

</div><!--/end .entry-->