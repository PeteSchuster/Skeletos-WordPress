<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/
get_header(); ?>

<main class="content clearfix" role="main">

	<div class="content-block"><div class="wrapper">
	
		<?php 
		
		while ( have_posts() ){

			the_post();
		
			echo '<header><h1>' . get_the_title() . '</h1></header>';
			
			the_content();
			
		} //end while
		
		edit_post_link( 'Edit this entry.', '<p class="clear">', '</p>' );
		wp_link_pages(); 
		?>

	</div></div><!--/end .content-block-->

</main><!--/end .content-->
<?php get_footer(); ?>
