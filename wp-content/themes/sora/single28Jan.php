<?php get_header(); ?>
	<!-- main content area -->
	<div class="row">
		<div class="col-xs-12">
			<div id="content">

				<div id="inner-content" class="cf">

						<div id="main" class="" role="main">
	
							<div class="top-page-margin">						
								
								<p id="logo" class="h1">
									<a href="<?php echo home_url(); ?>" rel="nofollow">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/durban-logo.png"/>
									</a>
								</p>
							
								<div class="header-polaroids">
									<img src="<?php the_field('header_image', 6); ?> "/>
								</div>
									
									
								<div class="row">
									<div class="col-xs-12">
									<?php
									
									   $votes = get_post_meta($post->ID, "votes", true);
									   //print_r($votes);
									   $votes = ($votes == "") ? 0 : $votes;
									?>
									This post has <div id='vote_counter'><?php echo $votes ?></div> votes<br>
									
									<?php
									   $nonce = wp_create_nonce("my_user_vote_nonce");
									    $link = admin_url('admin-ajax.php?action=my_user_vote&post_id='.$post->ID.'&nonce='.$nonce);
									    echo '<a class="user_vote" data-nonce="' . $nonce . '" data-post_id="' . $post->ID . '" href="' . $link . '">vote for this article</a>';
									?>
									
									
										<div class="blog-title">
											<h1><a href="<?php echo get_site_url(); ?>/blog/" class="underline-black extended-width-link">Blog</a></h1>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-xs-12 col-sm-8">
									<div class="blog-posts">
										<?php while (have_posts()) : the_post(); ?>
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
												<header class="article-header">
				
													<h4 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
													</h4>
												</header>
				
												<section class="entry-content cf archive-content">
				
													<?php //the_post_thumbnail( 'bones-thumb-300' ); ?>
													
													<div class="blog-featured-img">
														<?php $img = get_field('blog_featured_image'); ?>
														<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
															<img src="<?php echo $img['sizes']['blog-featured-img']; ?>"/>
														</a>
													</div>
				
													<?php the_content(); ?>
				
												</section>
											</article>											
																	
										<?php endwhile; ?>

									</div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<div class="blog-sidebar">
										<div class="rss blog-sidebar-section">
											<div class="rss-button">
												<a href="<?php echo get_site_url() ?>/blog/feed/" target="_blank">
													<img src="<?php echo get_template_directory_uri()?>/library/images/rss-btn.png"/>
												</a>
											</div>
											<div>
												<a href="<?php echo get_site_url() ?>/blog/feed/" target="_blank">
													<h3>RSS - Posts</h3>
												</a>
											</div>
										</div>
										<div class="email-sub blog-sidebar-section">
											<!-- mailchimp form goes here -->
											<h5>EMAIL SUBSCRIPTION</h5>
													<!-- Begin MailChimp Signup Form -->
													<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
													<style type="text/css">
														#mc_embed_signup{ clear:left; }
														/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
														   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
													</style>
													<div id="mc_embed_signup">
													<form action="//durbancalling.us9.list-manage.com/subscribe/post?u=b55e5441b49de16350af6cca2&amp;id=d277af5a1d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
													    <div id="mc_embed_signup_scroll">
														
														<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
													    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
													    <div style="position: absolute; left: -5000px;"><input type="text" name="b_b55e5441b49de16350af6cca2_d277af5a1d" tabindex="-1" value=""></div>
													    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
													    </div>
													</form>
													</div>
													<!-- End mc_embed_signup-->
													<!-- End MailChimp Signup Form -->
										</div>
										<div class="categories blog-sidebar-section">
											<h5>CATEGORIES</h5>
											<div class="blog-categories">
												<?php
												$args = array(
												  'orderby' => 'name',
												  'parent' => 0
												  );
												$categories = get_categories( $args );
												foreach ( $categories as $category ) {
												    echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br />';
												}
												?>
											</div>
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

