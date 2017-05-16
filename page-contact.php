<?php get_header(); ?>

<div class="clearfix">
	<!-- section -->
	<section id="contactUs">
		<div class=" container-fluid ">
			<div class="row">


						<?php if (have_posts()): while (have_posts()) : the_post(); ?>



								<div class="hidden-xs col-sm-4 contactLeft ">

									<?php // check if the post has a Post Thumbnail assigned to it.
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}  ?>

								</div>

								<div class="col-xs-12 col-sm-8 contactRight ">

									<h1><?php the_title(); ?></h1>

									<?php the_content(); ?>





									<?php edit_post_link(); ?>
									<a href="<?php echo home_url(); ?>/about/" class="btn-main">ABOUT US</a>
								</div>


						<?php endwhile; ?>

						<?php else: ?>

				</div><!-- row -->
			</div><!-- container-fluid -->

								<h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>



				<?php endif; ?>



	</section><!-- contactUs -->
	<section id="map-2">
 		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 contactMap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3130.948554626611!2d-77.46115148438868!3d38.30385968931475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b6c20f89f2a0a7%3A0xc6037d4b696e1099!2sBike+Works!5e0!3m2!1sen!2sus!4v1494872291201" max-width="1900" width=100% height="346" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section><!-- map -->

	<section id="contact">

		<div class="container">
			<div class="row">
				<div class="col-cs-12 col-sm-6 facebookLink">
					<h2>GET ON TRACK WITH US<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-2.png" alt="Facebook-2" class="facebook-2-img" /></h2>
					<div class="fbBikeWorks">
						<div class="fb-page" data-href="https://www.facebook.com/Fredericksburgwebsitedesign/" data-tabs="timeline" data-width="366px" data-height="440" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Fredericksburgwebsitedesign/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Fredericksburgwebsitedesign/">The Childress Agency, Inc.</a></blockquote></div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 contactLink">
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- contact -->



<?php get_footer(); ?>
