<?php
/*
    @package WordPress
    @subpackage Skeletos
*/
?>

<footer class="footer content-block" role="contentinfo"><div class="wrapper">

    <a id="back-to-top" class="icon-top back-to-top heading6" href="#"><span>Back to Top</span></a>

    <nav>
        <h1 class="visuallyhidden">Footer Navigation</h1>
        <?php wp_nav_menu( array( 'menu' => 'footer', 'menu_class' => 'list-footer-nav clearfix', 'container' => '' ) ); ?>
    </nav>

    <p>Skeletos WordPress theme, Copyright &copy; <?php echo date( 'Y' ); ?> <a href="#" target="_blank">Pete Schuster.</a><br />
    Skeletos WordPress theme is licenced under the GPL.</p>

</div></footer><!--/end .footer-->

<?php wp_footer(); ?>

</body>
</html>