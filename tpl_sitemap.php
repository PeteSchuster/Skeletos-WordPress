<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/

/* TEMPLATE NAME: Sitemap */

get_header(); ?>

<div class="content clearfix">
	<div class="content-main" role="main">
	
	<?php
		
		while ( have_posts() ) : the_post();
		
			echo '<header><h1>' . get_the_title() . '</h1></header>';
			
			wp_nav_menu( array( 'menu' => 'sitemap', 'menu_class' => '', 'container' => '' ) );

		endwhile;
	
	edit_post_link('Edit this entry.', '<p>', '</p>');
	
	?>
	
	</div><!--/end .content-main-->
	<?php get_sidebar(); ?>
</div><!--/end .content-->
<?php get_footer(); ?>