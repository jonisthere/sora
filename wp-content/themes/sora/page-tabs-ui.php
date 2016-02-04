<?php
/**

 * Template Name: Tabs UI Demo

**/ ?>



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
									<img src="<?php echo get_template_directory_uri()?>/library/images/blog-polaroid.png"/>
								</div>
									
									
								<div class="row">
									<div class="col-xs-12">
										<div class="blog-title">
											<h1><a href="<?php echo get_permalink(); ?>/" class="underline-black extended-width-link"><?php the_title(); ?></a></h1>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-xs-12">
									<div class="blog-posts">
										<?php while (have_posts()) : the_post(); ?>
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
												<section class="entry-content cf archive-content">
				
													<?php the_content(); ?>
													
													<div class="tabwrap">
													  <ul id="tabnav">
													    <li id="tab1"><a href="#tab1">Link1</a></li>
													    <li id="tab2"><a href="#tab2">Link2</a></li>
													    <li id="tab3"><a href="#tab3">Link3</a></li>
													  </ul>
													  <div class="tab tab1 active">
													    <p>Hello, I am tab1</p>
													  </div>
													  <div class="tab tab2 fadeout">
													    <p>What's up, I am tab2</p>
													  </div>
													  <div class="tab tab3 fadeout">
													    <p>Good bye, I am tab3</p>
													  </div>
													</div>
				
												</section>
											</article>			
											
											
											<div class="second-tab-section">
												<div class="tab tab1 active">
													<p>SECOND SECTION ONE</p>
												</div>
												<div class="tab tab2 fadeout">
												    <p>SECOND SECTION 2</p>
												</div>
												<div class="tab tab3 fadeout">
												    <p>SECOND SECTION THREE C</p>
												</div>
											</div>
																			
																	
										<?php endwhile; ?>

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

