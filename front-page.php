<?php get_header(); ?>
<section id="inventory">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-6 inventoryTitle">
			<h1>
				FIND THE RIGHT<br />
				BIKE FOR YOUR<br />
				NEXT ADVENTURE
			</h1>
			<a href="<?php echo home_url(); ?>/inventory/" class="btn-main">INVENTORY</a>
		</div>
		<a href="#links" id="scrollDown">SCROLL
			<span class="glyphicon glyphicon-menu-down"></span>
		</a>
	</div><!-- row -->
</section><!-- inventory -->
<section id="links">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-6 linkBox">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/images/tools.png" alt="Tools" class="links-img" />
						<br />
						REPAIR SERVICE
					</a>
				</div>
				<div class="col-xs-6 linkBox">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/images/bike.png" alt="Bike" class="links-img" />
						<br />
						INVENTORY
					</a>
				</div>
				<div class="col-xs-6 linkBox">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/images/trails.png" alt="Trails" class="links-img" />
						<br />
						LOCAL TRAILS
					</a>
				</div>
				<div class="col-xs-6 linkBox">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wheel.png" alt="Wheel" class="links-img" />
						<br />
						THE RIGHT FIT
					</a>
				</div>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- links -->
<div class="row">

	<div class="col-md-8">

		<?php if(have_posts()) : ?>
		   <?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		 		<?php the_content(); ?>
			</div>

		   <?php endwhile; ?>

		<?php else : ?>

		<div class="alert alert-info">
		  <strong>No content in this loop</strong>
		</div>

		<?php endif; ?>
	</div>

	<div class="col-md-4">


	</div>

</div>



<?php get_footer(); ?>
