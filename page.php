<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/
get_header(); ?>

<div class="content clearfix">
	<div class="content-main" role="main">
	
		<?php 
		
		while ( have_posts() ) : the_post();
		
			echo '<header><h1>' . get_the_title() . '</h1></header>';
			
			the_content();
			
		endwhile;
		
		edit_post_link( 'Edit this entry.', '<p>', '</p>' );
		wp_link_pages(); 
		?>
	</div><!--/end .content-main-->
	<?php get_sidebar(); ?>
</div><!--/end .content-->
<?php get_footer(); ?>