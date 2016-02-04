<?php
/**

 * Template Name: Registration Form Thank You OLD don't use

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
							
								<div class="header-polaroids no-header-polaroids">
									<div class="blog-title">
											<h1><a href="<?php echo get_permalink(); ?>/" class=""><?php the_title(); ?></a></h1>
											<div class="more-qs-text"><h4>We have a couple more questions</h4></div>
								</div>
									
									
								<!--
								<div class="row">
									<div class="col-xs-12">
										<div class="blog-title">
											<h1><a href="<?php echo get_permalink(); ?>/" class=""><?php the_title(); ?></a></h1>
										</div>
									</div>
								</div>
								-->
							</div>
							
							
							<div class="row">
								<div class="col-xs-12">
									<div class="blog-posts sign-in-form-container registration-form-container">
										<?php while (have_posts()) : the_post(); ?>
											<form role="form" class="registration-form" action="<?php echo get_site_url() ?>/donate/" method="post">
													<div class="register-bottom-section form-container show-on-phase-two-register">
														<div class="row">
															<div class="col-xs-12 col-sm-6">
																<div class="form-group">
																    <input type="firstname" class="form-control" id="InputMaidenName" placeholder="Maiden Name">
																</div>
																<select class="form-control form-dropdown">
																	 <option> - Date of Birth - </option>
																	 <option>1999</option>
																	 <option>1998</option>
																	 <option>1997</option>
																	 <option>Etc</option>
																</select>
																<select class="form-control form-dropdown">
																	 <option> - Country - </option>
																	 <option>England</option>
																	 <option>Israel</option>
																	 <option>Etc</option>
																</select>
																<select class="form-control form-dropdown">
																	 <option> - City - </option>
																	 <option>London</option>
																	 <option>Birmingham</option>
																	 <option>Liverpool</option>
																</select>
															</div>
															<div class="col-xs-12 col-sm-6">
																<div class="form-group">
																    <input type="firstname" class="form-control" id="InputTelephone" placeholder="Telephone">
																</div>
																<div class="form-group">
																    <input type="firstname" class="form-control" id="InputYearLeft" placeholder="Year Left Durban">
																</div>
																
																
																<div class="checkbox first-opt-in opt-in-checkboxes">
														        	<label>
																    	<input type="checkbox"  id="quarterlynewsletter" value="" checked>
																    	I would like to receive quarterly email newsletters
																    </label>																	
																<div class="checkbox second-opt-in opt-in-checkboxes">
														        	<label>
																    	<input type="checkbox"  id="sharecontactdetailspermission" value="" checked>
																    	I give my permission for Durban Calling to share contact details with friends who wish to connect with you
																    </label>
																	
																</div>
																
																
																
																<button type="submit" name="submit-2" class="btn btn-default account-submit">Submit</button>
															</div>
														</div>
													</div>
											</form> 
																	
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

