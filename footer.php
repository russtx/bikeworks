<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs 12 col-md-2">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="FooterLogo" class="footer-logo-img"></a>
      </div>

      <nav class="col-xs-12 col-md-7 footer-nav ">
        <?php

                $footer_1_defaults = array(

                  'theme_location' => 'footer-nav-1',

                  'menu' => 'Footer Bikeworks Menu',

                  'container' => '',

                  'container_class' => '',

                  'container_id' => '',

                  'menu_class' => 'footer-nav',

                  'menu_id' => '',

                  'echo' => true,

                  'fallback_cb' => 'bikeworks_footer_1_menu',

                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',

                  'depth' => 1

                );

                wp_nav_menu($footer_1_defaults); ?>
      </nav>
      <div class="col-xs-12 col-md-3 footerTel">
        <a href="tel:5403738900">Tel:540-373-8900</a><br />
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
