<footer>
  <div class="fluid-container">
    <div class="row">
      <div class="col-xs 12">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="FooterLogo" class="footer-logo-img"></a>
      </div>

      <nav class="col-xs-12 footer-nav ">
          <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav ', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
      </nav>
      <div class="col-xs-12 footerTel">
        <a href="tel:5403738900">Tel:540-373-8900</a>
        <a href="tel:5403730836">Tel:540-373-0836</a>
      </div>

    </div><!-- row -->

  </div><!-- fluid-container -->

  <p class="copyright">
    &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
  </p>

  <p class="childress">
  Built by<a href="#" target="_blank">The Childress Agency</a>
  </p>



<?php wp_footer(); ?>


</footer>

</div> <!-- close main container -->
</body>
</html>
