<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/
get_header(); ?>

<main class="content clearfix" role="main">

	<?php

	if ( have_posts() ){

		while ( have_posts() ){

			the_post();

	?>

			<div <?php post_class( 'content-block entry' ); ?>><div class="wrapper">

				<article>

                    <?php if ( has_post_thumbnail() ){

                        the_post_thumbnail( 'full', array( 'class' => 'aligncenter' ) );

                    } ?>

					<header>
						<h1><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

						<b class="heading6">Posted by <?php the_author_link(); ?> on <time datetime="<?php the_time( 'c' ); ?>"><?php the_time( get_option( 'date_format' ) ) ?></time></b>
					</header>

					<?php the_content(); ?>

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

		<header>
			<h1>Not Found</h1>
		</header>
		<p>Sorry, but you are looking for something that isn't here.</p>

	</div></div><!--/end .content-block-->

	<?php

	} //end if

	?>

</main><!--/end .content-->
<?php get_footer(); ?>
