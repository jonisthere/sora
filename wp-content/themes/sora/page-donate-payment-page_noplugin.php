<?php
/**

 * Template Name: Donate payment page

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
							
								<div class="header-polaroids no-header-polaroids standard-header">
									<div class="blog-title">
											<h1><a href="<?php echo get_permalink(); ?>/" class=""><?php the_title(); ?></a></h1>
								</div>
									
								
							</div>
							
							
							<div class="row">
								<div class="col-xs-12">
									<div class="donate-page-container donate-payment-page">
										<?php while (have_posts()) : the_post(); ?>
											
											<div class="row">
												<div class="col-xs-12 donate-content">
													<?php the_content(); ?>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<div class="donate-payment-form-1">
														<div class="row">
															<div class="col-xs-12">
																<div class="amend-text">
																	If donation amount is not correct, please amend and click update total
																</div>
															</div>
														</div>
														
														<div class="row bottom-separator">
															<div class="col-xs-6 col-sm-6">
																Purpose	
															</div>
															<div class="col-xs-6 col-sm-6">
																<div class="row">
																	<div class="col-xs-8 col-sm-6">
																		Donation amount
																	</div>
																	<div class="col-xs-4 col-sm-6">
																		Total
																	</div>
																</div>
															</div>
														</div>
														
														<form role="form" class="">
															<div class="row bottom-separator">
																<div class="col-xs-6 col-sm-6">
																	Durban Calling
																	<div class="reference">
																		Reference DURBAN1
																	</div>	
																</div>
																<div class="col-xs-6 col-sm-6">
																	<div class="row">
																		<div class="middle-align">
																			<div class="col-xs-8 col-sm-6">
																				$
																			    <input type="text" class="inline short-input" id="donate2" placeholder="">
																			</div>
																			<div class="col-xs-4 col-sm-6">
																				$
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="row row-bottom">
																<div class="col-xs-6 col-sm-6">	
																</div>
																<div class="col-xs-6 col-sm-6">
																	<div class="row">
																		<div class="col-xs-8 col-sm-6">
																			Total:
																			<button type="submit" class="btn btn-default">Update Totals</button>
																		</div>
																		<div class="col-xs-4 col-sm-6">
																			$0.00 XXX
																		</div>
																	</div>
																</div>
															</div>
															
														</form>
														
													</div>
												</div>
											</div>
											
											
											
											
											<div class="row">
												<div class="col-xs-12">
													<div class="donate-payment-form-2">
														<div class="row">
															<div class="col-xs-6 full-width-630">
																<div class="orange">
																	Pay with Credit Card or Log in
																</div>
																<div class="row">
																	<form class="form-horizontal" role="form" action="<?php echo get_site_url() ?>/thank-you-for-your-donation/">
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="" class="">Country</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <select class="form-dropdown">
																					  <option> - Country - </option>
																					  <option>England</option>
																					  <option>USA</option>
																					  <option>Mexico</option>
																				  </select>
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputFirstName" class="">First Name</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" id="inputFirstName" placeholder="">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputLastName" class="">Last Name</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" id="inputLastName" placeholder="">
																			  </div>
																		  </div>
																		  <div class="form-group form-spacer">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="" class="">Payment Type</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <select class="form-dropdown">
																					  <option> - Selected Card - </option>
																					  <option>Option 1</option>
																					  <option>Option 2</option>
																					  <option>Option 3</option>
																				  </select>
																			  </div>
																		  </div>
																		  
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputLineOne" class="">Billing Address Line 1</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" id="inputLineOne" placeholder="">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputLineTwo" class="">Billing Address Line 2</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" id="inputLineTwo" placeholder="">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputTownCity" class="">Town/City</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" id="inputTownCity" placeholder="">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="" class="">Payment Type</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <select class="form-dropdown">
																					  <option> - Selected County - </option>
																					  <option>Surrey</option>
																					  <option>Chertsey</option>
																					  <option>Weybridge</option>
																				  </select>
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputPostcode" class="">Postcode</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" id="inputPostcode" placeholder="">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputHomeTel" class="">Home Telephone</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" id="inputHomeTel" placeholder="">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputEmail" class="">Email</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="email" class="" id="inputEmail" placeholder="">
																			  </div>
																		  </div>

																		  
																		  
																		  
																		  <div class="form-group">
																			  <div class="col-xs-12">
																				  <button type="submit" class="btn btn-default paypal-payment-btn">Submit</button>
																			  </div>
																		  </div>
																		
																	</form>
																</div>
																<div class="paypal-terms">
																	Paypal T&C's go here
																</div>	
															</div>
															
															
															<div class="col-xs-6 full-width-630">
																	<div class="paypal-secure"></div>
																</div>
															</div>
															
													</div>
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

