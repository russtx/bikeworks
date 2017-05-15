<?php get_header(); ?>


	<section id="hero-blog" style="background-image: url(<?php the_field('hero_image'); ?>);">
    <div class="container">
      <div class="row">
        <h1>STAY ON TRACK WITH US</h1>
          <div class="col-xs-6 col-xs-offset-3">
        		<div class="heroSocials">
        			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-3.png" alt="Facebook" class="social-img"></a>
        			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram" class="sociak-img"></a>
        			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter" class="sociak-img"></a>
        		</div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
	</section>
  <section id="content">

    <div class="container">
			<div class="row">
					<div class="col-xs-12 col-sm-6 blogHeader">
						<h2>BIKE WORKS BLOG POSTS</h2>
					</div>
					<div class="col-xs-12 col-sm-6 blogSwitch">
						<span>
							<img src="<?php echo get_template_directory_uri(); ?>/images/month-icon.png" alt="Month Icon" class="month-icon">
							<h5>Month</h5>
						</span>
						<span>
							<img src="<?php echo get_template_directory_uri(); ?>/images/list-icon.png" alt="List Icon" class="list-icon">
							<h5>List</h5>
						</span>
					</div>
		      <?php

		        if(have_posts()): while(have_posts()): the_post();

		          if(is_single() || is_singular()):

		            the_content();

		          else: ?>
							<div class="blogPost col-xs-12">
								<div class="postDate col-xs-4 col-sm-2 ">
									<span><?php echo get_the_date('F'); ?></span>
									<span><?php echo get_the_date('j'); ?></span>
                </div>
                  <div class="postImage col-xs-8 col-sm-4">
									<?php the_post_thumbnail(); ?>
								</div>
                <div class="postContent col-xs-12 col-sm-6">
  		            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  								<h3><?php echo  get_field('blog_sub-title');?></h3>
  								<h4>By <?php echo  get_field('blog_author');?></h4>
  		            <?php the_excerpt(); ?>

                </div>
              </div><!-- blogPost -->
		         <?php endif;

		        endwhile; else: ?>

		          <p>Sorry, the page could not be found.</p>

		      <?php endif; ?>
				</div><!-- row -->
    </div><!-- container -->

  </section><!-- content -->
  <section id="followUs">
    <div class="container">
      <div class="row">
        <span><h2>FOLLOW US <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-3.png" alt="Facebook-2" class="facebook-2-img" /></h2></span>
        <div class="col-cs-12 col-md-5 facebookLink">

          <div class="fbBikeWorks">
            <div class="fb-page" data-href="https://www.facebook.com/Fredericksburgwebsitedesign/" data-tabs="timeline" data-width="366px" data-height="440" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Fredericksburgwebsitedesign/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Fredericksburgwebsitedesign/">The Childress Agency, Inc.</a></blockquote></div>
          </div>
        </div>
        <div class="col-cs-12 col-md-7 videoLink">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/images/video.png" alt="Video Image" />
          </a>
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- followUs -->
  <section id="contact-2">
    <div class="container">
			<div class="row">

        <div class="col-xs-12 col-sm-6 contactLink">
					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
				</div>

				<div class="col-cs-12 col-sm-6 facebookLink">
					<h2>GET ON TRACK WITH US<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-2.png" alt="Facebook-2" class="facebook-2-img" /></h2>
					<div class="fbBikeWorks">
						<div class="fb-page" data-href="https://www.facebook.com/Fredericksburgwebsitedesign/" data-tabs="timeline" data-width="366px" data-height="440" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Fredericksburgwebsitedesign/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Fredericksburgwebsitedesign/">The Childress Agency, Inc.</a></blockquote></div>
					</div>
				</div>

			</div><!-- row -->
		</div><!-- container -->

  </section><!-- contact-2 -->
  <section id="location">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 locationContent">
					<h2>OUR LOCATION</h2>
					<p>
						Since 1996 Bike Works has been a mainstay in the Fredricksburg area cycling community. We are located in the heart
						of downtown Fredericksburg at 104 William Street. Our location has made us a meeting spot for local cyclist ans a haven for those
						using U.S. Bike Route 1 to travel the eastern seaboard.
					</p>
					<span class="mapLink">
						<a href="https://www.google.com/maps/place/104+William+St,+Fredericksburg,+VA+22401/@38.3038555,-77.4611515,17z/data=!3m1!4b1!4m5!3m4!1s0x89b6c20560e591d1:0xd29abf1e9b981e60!8m2!3d38.3038555!4d-77.4589628">104 William Street Fredericksburg Virginia 22401</a>
					</span>
					<p>
						Monday-Friday 10a-7p<br />
						Saturday 10a-5p<br />
						Sunday Closed
					</p>
					<span class="telLink">
						<a href="tel:5403738900">Tel:540-373-8900</a><br />
						<a href="tel:5403730836">Tel:540-373-0836</a>
					</span>

				</div>
				<div class="col-xs-12 col-sm-6 locationMap">
					<div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3130.9487363246258!2d-77.46115148429051!3d38.30385547966664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b6c20560e591d1%3A0xd29abf1e9b981e60!2s104+William+St%2C+Fredericksburg%2C+VA+22401!5e0!3m2!1sen!2sus!4v1494514367527" width="536" height="405" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- location -->


<?php get_footer(); ?>
