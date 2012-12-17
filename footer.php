<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/
?>

</div><!--/end container-->

<footer class="footer" role="contentinfo"><div class="wrapper clearfix">

	<a id="back_to_top" class="icon icon_top back_to_top" href="#"><span>Back to Top</span></a>

	<nav>
		<?php wp_nav_menu( array( 'menu' => 'footer', 'menu_class' => 'list_styled list_footer_nav clearfix', 'container' => '' ) ); ?>  
	</nav>

	<p>&copy; <?php echo date( 'Y' ) . ' ' . get_bloginfo( 'name' ); ?></p>

	<p>Built with <a href="http://peteschuster.com/site-skeleton/" target="_blank">Site Skeleton</a> | Powered by <a href="http://wordpress.org/" target="_blank">WordPress</a></p>

</div></footer><!--/end footer-->

<?php wp_footer(); ?>

</body>
</html>