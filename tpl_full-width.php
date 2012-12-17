<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/

/* TEMPLATE NAME: Full Width */

get_header(); ?>

<div class="content clearfix" role="main">

	<?php 
	
	while ( have_posts() ) : the_post();
	
		echo '<header><h1>' . get_the_title() . '</h1></header>';
		
		the_content();
		
	endwhile;
	
	edit_post_link( 'Edit this entry.', '<p>', '</p>' );
	
	?>
</div><!--/end .content-->
<?php get_footer(); ?>