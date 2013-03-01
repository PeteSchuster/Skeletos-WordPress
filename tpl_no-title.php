<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/

/* TEMPLATE NAME: No Title */

get_header(); ?>

<div class="content clearfix">
	<div class="content-main" role="main">

	<?php
	
		while ( have_posts() ) : the_post();

			the_content();

		endwhile;
		
	edit_post_link( 'Edit this entry.', '<p>', '</p>' ); 
	
	?>
	
	</div><!--/end .content-main-->
	<?php get_sidebar(); ?>
</div><!--/end .content-->
<?php get_footer(); ?>