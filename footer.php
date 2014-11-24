<?php
/*
    @package Skeletos
*/
?>

<footer class="footer" role="contentinfo"><div class="wrapper">

    <a id="back-to-top" class="ss-text-button" href="#"><span>Back to Top</span></a>

    <nav>
        <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'list-footer-nav clearfix', 'container' => '')); ?>
    </nav>

</div></footer><!--/end .footer-->

<?php wp_footer(); ?>

</body>
</html>