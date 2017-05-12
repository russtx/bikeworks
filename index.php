<?php get_header(); ?>


	<section id="hero-blog" style="background-image: url(<?php the_field('hero_image'); ?>);">
		<h1>STAY ON TRACK WITH US</h1>
		<div class="heroSocials">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-3.png" alt="Facebook" class="social-img"></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram" class="sociak-img"></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter" class="sociak-img"></a>
		</div>

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
							<div class="blogPost">
								<span><?php echo get_the_date('F'); ?></span>
								<span><?php echo get_the_date('j'); ?></span>
								<div class="postImage">
									<?php the_post_thumbnail(); ?>
								</div>
		            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<h3><?php echo  get_field('blog_sub-title');?></h3>
								<h4>By <?php echo  get_field('blog_author');?></h4>
		            <?php the_excerpt(); ?>
								<hr>
								</div>
		         <?php endif;

		        endwhile; else: ?>

		          <p>Sorry, the page could not be found.</p>

		      <?php endif; ?>
				</div><!-- row -->
    </div><!-- container -->

  </section>



<?php get_footer(); ?>
