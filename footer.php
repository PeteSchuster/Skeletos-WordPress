<?php
/*
    @package WordPress
    @subpackage SiteSkeleton
*/
?>

<footer class="footer content-block" role="contentinfo"><div class="wrapper">

    <a id="back-to-top" class="icon-top back-to-top heading6" href="#"><span>Back to Top</span></a>

    <nav>
        <h1 class="visuallyhidden">Footer Navigation</h1>
        <?php wp_nav_menu( array( 'menu' => 'footer', 'menu_class' => 'list-footer-nav clearfix', 'container' => '' ) ); ?>
    </nav>

    <p>&copy; <?php echo date( 'Y' ) . ' ' . get_bloginfo( 'name' ); ?></p>

    <p>Built with <a href="http://peteschuster.com/site-skeleton/" target="_blank">Site Skeleton</a> | Powered by <a href="http://wordpress.org/" target="_blank">WordPress</a></p>

</div></footer><!--/end .footer-->

<?php wp_footer(); ?>

</body>
</html>