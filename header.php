<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=724983870970769";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="masthead bricks">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-xs-12 col-sm-4 hours">
            <h3>MON-FRI 10a-7p</h3>
            <h3>SAT 10a-5p</h3>
            <h3>SUN Closed</h3>
          </div>
          <div class="col-xs-12 col-sm-4 logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo-img"></a>
          </div>
          <div class="col-xs-12 col-sm-4 phone">
            <a href="tel:5403738900">540-373-8900</a><br />
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" class="facebook-img"></a>
          </div>
        </div><!-- row -->
      </div><!-- container-fluid -->
    </div><!-- masthead -->

    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse">
           <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav ', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
          </div><!-- /.navbar-collapse -->

    </nav>

    <div id="main-container" >
