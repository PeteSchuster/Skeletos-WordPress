<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/

/* TEMPLATE NAME: Sitemap */

get_header(); ?>

<main class="content clearfix" role="main">

	<div class="content-block"><div class="wrapper">
	
	<?php
		
		while ( have_posts() ) : the_post();
		
			echo '<header><h1>' . get_the_title() . '</h1></header>';
			
			wp_nav_menu( array( 'menu' => 'sitemap', 'menu_class' => '', 'container' => '' ) );

		endwhile;
	
	edit_post_link('Edit this entry.', '<p>', '</p>');
	
	?>
	
	</div></div><!--/end .content-block-->

</main><!--/end .content-->
<?php get_footer(); ?>