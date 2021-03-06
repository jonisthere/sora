
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
										<div class="blog-title">
											<h1><a class="underline-black extended-width-link">Blog</a></h1>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-xs-12 col-sm-8">
									<div class="blog-posts">
										<?php $blog = new WP_Query(array(
											'post_type'=>'post',
											'post__not_in' => $postid,
											'post_status'=>'publish', 
											'posts_per_page'=>-1, 
											'order'=>'ASC',
											));	
											
										while ($blog->have_posts()) : $blog->the_post(); ?>
										
			
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
				
													<?php the_excerpt(); ?>
				
												</section>
											</article>
											
			
										<?php endwhile; ?>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<div class="blog-sidebar">
										<div class="rss blog-sidebar-section">
											<div class="rss-button">
												<img src="<?php echo get_template_directory_uri()?>/library/images/rss-btn.png"/>
											</div>
											<div>
												<h3>RSS - Posts</h3>
											</div>
										</div>
										<div class="email-sub blog-sidebar-section">
											<!-- mailchimp form goes here -->
											<h5>EMAIL SUBSCRIPTION</h5>
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
