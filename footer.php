<?php
/*
  @package Skeletos
*/
?>

<footer class="ss-page-footer" role="contentinfo"><div class="wrapper">

  <a id="back-to-top" class="ss-text-button" href="#"><span>Back to Top</span></a>

  <nav class="ss-footer-nav">
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'footer',
        'menu_class' => 'ss-footer-nav__list clearfix',
        'container' => ''
      )
    );
    ?>
  </nav>

  <p class="copyright">&copy; <?php bloginfo('name'); ?></p>

</div></footer><!--/end .footer-->

<?php wp_footer(); ?>

</body>
</html>
