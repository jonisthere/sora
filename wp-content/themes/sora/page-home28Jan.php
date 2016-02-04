<?php
/**

 * Template Name: Home Page

**/ ?>

<?php get_header(); ?>
	<!-- main content area -->
	<div class="row">
		<div class="col-xs-12">
			<div id="content">

				<div id="inner-content" class="cf">

						<div id="main" class="top-page-margin" role="main">
						
							<p id="logo" class="h1">
								<a href="<?php echo home_url(); ?>" rel="nofollow">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/durban-logo.png"/>
								</a>
							</p>


							<?php if (have_posts()) : while (have_posts()) : the_post(); 
								
								$content_area_one = get_field('content_area_one');
								$content_area_two = get_field('content_area_two'); 
								$content_area_three_header =  get_field('content_area_three_header');
								$content_area_three =  get_field('content_area_three');
								
							?>
							

								<section class="entry-content cf about-us-content">
									<div class="homepage-titles">
										<h1 class="no-bottom-margin"><a href="">
											<?php the_title(); ?>
										</a></h1>
										
										<h2 class="subtitle"><?php the_field('subtitle'); ?></h2>
									</div>
									<div class="homepage-polaroid"><img src="<?php echo get_template_directory_uri() ?>/library/images/homepage-polaroid.png"/></div>
									
									<?php the_content(); ?>
								</section>
							<?php endwhile; else : endif; ?>
								
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<div class="">
		<div class="row">
			<div class="col-xs-12">
	
							<section class="homepage-section replacement-nav-line"></section>
							
							<!-- Sticky nav -->
							<!--
							<div id="sticky-anchor"></div>
								<div id="sticky" class="homepage-header-bar">
									<div class="green-arrow">
									
										<nav role="navigation" class="homepage-nav-bar">
											<div class="inner-nav-sticky">
												<?php wp_nav_menu(array(
						    					'container' => false,                           // remove nav container
						    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
						    					'menu' => __( 'Main Menu', 'bonestheme' ),  // nav name
						    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
						    					'theme_location' => 'main-nav',                 // where it's located in the theme
						    					'before' => '',                                 // before the menu
							        			'after' => '',                                  // after the menu
							        			'link_before' => '',                            // before each link
							        			'link_after' => '',                             // after each link
							        			'depth' => 0,                                   // limit the depth of the nav
						    					'fallback_cb' => ''                             // fallback function (if there is one)
												)); ?>
		
												<div id="social-media-buttons" class="hide-responsive-nav">
													<ul>
														<li><a href="#"><div class="linkedin"></div></a></li>
														<li><a href="#"><div class="twitter"></div></a></li>
														<li><a href="#"><div class="facebook"></div></a></li>
													</ul>
												</div>
											</div>
										</nav>
									</div>
								</div>
								-->
								<!-- End sticky nav -->
			</div>
		</div>
	</div>

<div id="container" class="container-fluid middle-container">


	
	<div class="row">
		<div class="col-xs-12">
			<div>
				<div class="cf">
						<div>

				
								
								<section class="homepage-section social-section">
									<div class="row">
										<div class="col-xs-3 col-sm-2">
											<div class="img-left">
												<img src="<?php echo get_template_directory_uri() ?>/library/images/homepage-img-left.png"/>
											</div>
										</div>
										<div class="col-xs-6 col-sm-8">
											<div class="middle">
												<h2>#DURBANCALLING</h2>
												<div class="facebook-middle">
													<div class="facebook-connect-button">
														<img src="<?php echo get_template_directory_uri() ?>/library/images/fb-connect.png"/>
													</div>
													<div class="facebook-group">
														<h3>
															<a href="<?php echo get_site_url() ?>/registration-form/">
																JOIN OUR GROUP
															</a>
														</h3>
													</div>
												</div>									
											</div>
										</div>
								
										<div class="col-xs-3 col-sm-2">
											<div class="img-right">
												<img src="<?php echo get_template_directory_uri() ?>/library/images/homepage-img-right.png"/>
											</div>
										</div>
								
									</div>
								
								</section>
								
								<div class="make-anchor">
									<a id="make" name="make"/>Make</a>
								</div>
								<section class="homepage-section video-section">
								

									<h2>SEE HOW YOU CAN MAKE A DIFFERENCE</h2>
									<div class="video-box">
										<a href="<?php the_field('video_link'); ?>" class="fancybox-media" >
											<img src="<?php echo get_template_directory_uri() ?>/library/images/video-box.png"/>
										</a>
										<h3><?php the_field('video_text'); ?></h3>												</div>
								<div class="tothetop" href="#top">
									<a href="#top">
										top
									</a>
								</div>
								<div style="clear:right"></div>	
								</section>
								
								<div class="support-anchor">
									<a name="support" />Support</a>
								</div>
								
								<?php 
								$gallery = new WP_Query(array(
									'post_type'=>'we-support',
									'post_status'=>'publish', 
									'posts_per_page'=>10, 
									'order'=>'ASC',
								));	
								?>
								
								<section class="homepage-section we-support-section">
									<h2>WE SUPPORT</h2>
									<div class="homepage-gallery">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<div class="left-col">	
													<div class="left-gallery-nav">
														<ul>
														
														<?php 
														$x = 1;
														while ($gallery->have_posts()) : 
														$gallery->the_post(); ?>
															<li id=<?php echo $x; ?> class="front-page-gallery <?php 
											echo ($x <= 1 ? 'active-li' : ''); ?>"><h5><?php the_title(); ?></h5></li>
														<?php 
														$x++;
														endwhile; ?>
														</ul>
													</div>
													<div class="cart-img remove-on-tablet">
														<img src="<?php echo get_template_directory_uri() ?>/library/images/cart.png"/>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-8">
												<?php 
												$x = 1; 
												while ($gallery->have_posts()) : $gallery->the_post(); ?>
			
													<div class="gallery-content <?php echo ($x <= 1 ? 'active-class' : '') ?>" id="slide-<?php echo $x; ?>" <?php echo ($x <= 1 ? '' : 'style="display:none"') ?>>
														<div class="gallery-image">
															
															<?php $img = get_field('gallery_image'); ?>
															
															<img src="<?php echo $img['sizes']['homepage-gallery'] ?>"/>
														</div>
														<div class="gallery-text">
															<?php the_content(); ?>
														</div>
													</div>
												<?php 
												$x++;
												endwhile; ?>
											</div>
										</div>
									</div>
								<div class="tothetop" href="#top">
									<a href="#top">
										top
									</a>
								</div>
								
								<div style="clear:right"></div>
								</section>
								
								<section class="homepage-section goals-section">
									<div class="goals-inner">
										<div class="row goals-row-one">
											<div class="col-xs-12 col-sm-6 our-goals-wrapper">
												<img src="<?php echo get_template_directory_uri() ?>/library/images/our-goals.png"/>
												<div class="goals-content">
													<?php echo $content_area_one; ?>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<img src="<?php echo get_template_directory_uri() ?>/library/images/key-numbers.png"/>
												<div class="goals-content">
													<?php echo $content_area_two; ?>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<img src="<?php echo get_template_directory_uri() ?>/library/images/ball-rolling.png"/>
											</div>
										</div>
										<div class="goals-row-three">
											<div class="row">
												<div class="col-xs-12 col-sm-9">
													<div class="goals-row-three-content-inner">
														<h3><?php echo $content_area_three_header; ?></h3>
														<div class="goals-content">
															<?php echo $content_area_three; ?>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-3">
													<div class="you-img"><img src="<?php echo get_template_directory_uri() ?>/library/images/you.png"/></div>
												</div>
											</div>
										</div>
									</div>
								<div class="tothetop" href="#top">
									<a href="#top">
										top
									</a>
								</div>
								<div style="clear:right"></div>
								</section>
								
								
							
							
							
							
							<div class="feed-section homepage-section">
								<h2>Feed</h2>
								
								<div class="social-feed-boxes">
									<div class="facebook-feed-box">
										<div class="feed-box-header">
											<!-- <img src="<?php echo get_template_directory_uri() ?>/library/images/feed-img.png"/> -->
										</div>
										<div class="fed-box-main">
											<div id="tweetfeed"></div>
										</div>
									</div>
									<div class="twitter-feed-box">
										<div class="feed-box-header">
											<!-- <img src="<?php echo get_template_directory_uri() ?>/library/images/feed-img.png"/> -->
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/durban-logo.png"/>
										</div>
										<div class="fed-box-main">
											<?php
											$fb_posts = fb_get_last_posts(1);
											$i = 1;
											foreach($fb_posts as $fb_post): ?>
												<?php if ($i == 1 ) { ?>
												    <div>
												        <!-- <span class="author"><?php print esc_html($fb_post['author_name']);?></span>, -->
												        <span class="date"><?php print date(get_option('date_format'), strtotime($fb_post['created_time']));?></span>
												        <p class="facebook-feed-text">
												        	<?php // print esc_html($fb_post['message']); ?>
												        	<?php $zz = esc_html($fb_post['message']);
															if( !empty($zz) ) {												        	
														        	$pos=strpos($zz, ' ', 200);
																	echo substr($zz,0,$pos ); 
																	?>...<?php
															} else {
																echo 'Test post';
															}
												        	?>
												        	
												        	<?php // echo front_excerpt(18, ' Read more...', $page->post_content); ?>
												        	
												        </p>
												        <a class="read-more-link" href="<?php print $fb_post['permalink'];?>">Read the full post here.</a>
												    </div>
												 <?php } else {}
												 $i++; ?>
											<?php endforeach; ?>	
											
											
										</div>
									</div>
								</div>
							</div>
							
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //- main content area -->
	
	


<?php get_footer(); ?>
