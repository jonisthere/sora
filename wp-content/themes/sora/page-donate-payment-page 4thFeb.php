<?php
/**

 * Template Name: Donate payment page

**/ ?>

<?php //echo (isset( $_POST['monthly-donation']) ? $_POST['monthly-donation'] : ''); ?>
<?php //echo (isset( $_POST['yearly-donation']) ? $_POST['monthly-donation'] : ''); ?>
<?php //echo (isset( $_POST['single-donation']) ? $_POST['monthly-donation'] : ''); ?>


<?php 


if (isset($_POST['submit_paypal_process_EXPRESS_VERSION'])) {
	
	// IF USE CHOOSES PAYPAL CHECKOUT 
	do_shortcode('[jw_pp_form_paypal_EXPRESS]');

} elseif (isset($_POST['direct_payment_pro_form'])) {
	
	// USER CHOOSES CREDIT CARD CHECKOUT
	do_shortcode('[jw_pp_form_paypal]');
} else {

	//print_r($_POST);
}
?>
<?php

switch ($_POST['freq']){
		case 'single':
			$freq = 'Single';
			$amount = $_POST['single-donation'];
			break;
		case 'yearly':
			$freq = 'Year';
			$amount = $_POST['yearly-donation'];
			break;
		case 'monthly':
			$freq = 'Month';
			$amount= $_POST['monthly-donation'];
			break;
		default:
			$freq = 'Single';
			$amount = $_POST['single-donation'];
	}
	
	//echo $freq . ' ' . $amount . 'post  ' . $_POST['freq'];
	
?>


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
																	
																</div>
															</div>
														</div>
														
														<div class="row bottom-separator">
															<div class="col-xs-6 col-sm-6">
															</div>
															<div class="col-xs-6 col-sm-6">
																<div class="row">
																	<div class="col-xs-8 col-sm-6">
																		Donation amount
																	</div>
																	<div class="col-xs-4 col-sm-6">
																		Type
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
																			    <input type="text" class="inline short-input" id="donate2" value="<?php echo (isset($amount) ? $amount : ''); ?>
">
																			</div>
																			<div class="col-xs-4 col-sm-6">
																				<?php echo (isset($freq) ? $freq : ''); ?>

																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="row row-bottom">
																<div class="col-xs-6 col-sm-6">	
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
																	<form class="form-horizontal" role="form" method="post">
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputFirstName"  class="">First Name</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" name="FIRSTNAME" id="inputFirstName" value="<?php echo (isset( $_POST['FIRSTNAME']) ? $_POST['FIRSTNAME'] : '');?>">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputLastName" class="">Last Name</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" name="LASTNAME" id="inputLastName" value="<?php echo (isset( $_POST['LASTNAME']) ? $_POST['LASTNAME'] : '');?>">
																			  </div>
																		  </div>
																		  <div class="form-group form-spacer">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="" class="">Payment Type</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <select name="CREDITCARDTYPE" class="form-dropdown">
																					  <option> - Selected Card - </option>
																					  <option value="MasterCard">MasterCard</option>
																					  <option value="Visa">Visa</option>
																				  </select>
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																		      		<label for="inputLineOne" class="">CC NUMBER</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" name="ACCT" class="" id="inputLineOne" value="<?php echo (isset( $_POST['ACCT']) ? $_POST['ACCT'] : '');?>">
																			  </div>
																		  </div>
																		   <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																			  	  <label for="inputLineOne" class="" >CVV2</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" name="CVV2" class="" id="inputLineOne"  name="ACCT" class="" id="inputLineOne" value="<?php echo (isset( $_POST['CVV2']) ? $_POST['CVV2'] : '');?>">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																			  	  <label for="inputLineOne" class="">EXP DATE</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" name="EXPDATE" class="" id="inputLineOne" value="<?php echo (isset( $_POST['EXPDATE']) ? $_POST['EXPDATE'] : '');?>">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputLineOne"  class="">Billing Address/ Street</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" name="STREET" class="" id="inputLineOne" name="EXPDATE" class="" id="inputLineOne" value="<?php echo (isset( $_POST['STREET']) ? $_POST['STREET'] : '');?>">
																			  </div>
																		  </div>
																		  
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputTownCity" class="">Town/City</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" name="CITY" value="<?php echo (isset( $_POST['CITY']) ? $_POST['CITY'] : '');?>" id="inputTownCity" >
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputTownCity" class="">STATE</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" name="STATE" value="<?php echo (isset( $_POST['STATE']) ? $_POST['STATE'] : '');?>" id="inputTownCity" >
																			  </div>
																		  </div>

																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputPostcode" class="">Postcode / Zip Code</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" name="ZIP" id="inputPostcode" value="<?php echo (isset( $_POST['ZIP']) ? $_POST['ZIP'] : '');?>">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputHomeTel" class="">Home Telephone</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="text" class="" name="TELEPHONE" id="inputHomeTel" value="<?php echo (isset( $_POST['TELEPHONE']) ? $_POST['TELEPHONE'] : '');?>">
																			  </div>
																		  </div>
																		  <div class="form-group">
																			  <div class="col-xs-5 full-width-480">
																				  <label for="inputEmail"  class="">Email</label>
																			  </div>
																			  <div class="col-xs-7 full-width-480">
																				  <input type="email" name="EMAIL"class="" id="inputEmail" value="<?php echo (isset( $_POST['EMAIL']) ? $_POST['EMAIL'] : '');?>">
																			  </div>
																		  </div>

																		  <div class="form-group">
																			  <div class="col-xs-12">
																				  <button type="submit" class="btn btn-default paypal-payment-btn" name="direct_payment_pro_form">Pay Via Credit Card</button>
																			  </div>
																		  </div>
																		
																	</form>
																</div>
																<div class="paypal-terms">
																	Paypal T&C's go here
																</div>	
															</div>
															
															
															<div class="col-xs-6 full-width-630">
																<div class="orange">
																	Pay via PayPal
																</div>
																<div class="paypal-secure">
																
																	<form role="form-horizontal" class="" name="donate-initial-pledge" onsubmit="return validateForm()" method="post" action="">
																		<!-- <img src="http://www.lajollamealsonwheels.org/w/wp-content/uploads/2013/08/secure-paypal-logo.jpg"> -->
																		<button type="submit" name="submit_paypal_process_EXPRESS_VERSION" class="btn btn-default left pay-via-paypal-btn">Pay Via PayPal</button>
																	</form>	
																	
																	<?php do_shortcode('[payment_error_message]'); ?>
																	
																	
								<!--<input type="hidden" value="<?php echo (isset( $_POST['form_name_of_dedicate']) ? $_POST['form_name_of_dedicate'] : $_SESSION['form_name_of_dedicate'] ); ?>" name="form_name_of_dedicate">
								
								<input type="hidden" value="<?php echo (isset( $_POST['form_dedicate_type']) ? $_POST['form_dedicate_type'] : $_SESSION['form_dedicate_type'] );?>" name="form_dedicate_type">
								
								<input type="hidden" value="<?php echo (isset( $_POST['form_amount']) ? $_POST['form_amount'] : $_SESSION['form_amount'] );?>" name="form_amount">
								<input type="hidden" value="<?php echo (isset( $_POST['form_freq']) ? $_POST['form_freq'] : $_SESSION['freq'] );?>" name="form_freq">
								<input type="hidden" value="paypal" name="method">
								<input type="hidden" value="<?php echo (isset( $_POST['form_acknowledge']) ? $_POST['form_acknowledge'] : $_SESSION['form_acknowledge']) ;?>" name="form_acknowledge">-->	
																</div>
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

