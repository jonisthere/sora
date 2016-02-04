<?php
/**

 * Template Name: USER AREA
 

**/ 
?>

<?php if ( !is_user_logged_in() ) { 
		// redirect
		wp_redirect( home_url() ); 
		exit;
	}
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
							
								<div class="header-polaroids no-header-polaroids">
									<div class="blog-title">
											<h1><a href="<?php echo get_permalink(); ?>/" class=""><?php the_title(); ?></a></h1>
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
								
								<?php //if (isset($user_successful) &&) { ?>
									<div class="blog-posts sign-in-form-container registration-form-container">
										<?php while (have_posts()) : the_post(); ?>
											<form role="form" class="registration-form" action="" method="post">
											
											<?php global $current_user;
												  get_currentuserinfo();
												  $all_meta_for_user = get_user_meta( $current_user->ID );
												  ?>
													<div class="register-top-section form-container">
														<div class="row">
															<div class="col-xs-12 col-sm-6">	  
																
																<?php do_shortcode('[jw_hd_form_messages]'); ?>
																
																<div class="form-group">
																	<?php echo '<p>Username: ' . $current_user->user_login . "</p>"; ?>
																</div>
																  
																  <div class="form-group">
																    <input name="form_email_address" class="form-control" id="InputEmail" <?php echo (isset($current_user->user_email) ? 'value="' . esc_html($current_user->user_email) .'"' : false) ?> placeholder="Confirm email" name="email" >
																  </div>
														    

															<select name="form_user_title" class="form-control form-dropdown">
																	<option> - Title - </option>
																	 <?php $title = get_the_author_meta( 'title', $current_user->ID ); ?>	
																	 <option anuary</option>
																	 <option <?php echo ($title == 'Mr' ? 'selected' : false) ?> value="Mr">Mr</option>
																	 <option <?php echo ($title == 'Mrs' ? 'selected' : false) ?> value="Mrs">Mrs</option>
																	 <option <?php echo ($title == 'Ms' ? 'selected' : false) ?> value="Ms">Ms</option>
																</select>
																<div class="form-group">
																    <!-- <label for="exampleInputUsername">Username:</label> -->
																    <input name="form_first_name" type="firstname" class="form-control" id="InputFirstname" <?php echo (!empty($current_user->user_firstname) ? 'value="' . esc_html($current_user->user_firstname) .'"' : 'placeholder="First Name"') ?>>
																  </div>
																  
																  <div class="form-group form-group-pw">
																    <!-- <label for="exampleInputPassword">Password:</label> -->
																    <input name="form_last_name" class="form-control" id="InputSurname" <?php echo (!empty($current_user->user_lastname) ? 'value="' . esc_html($current_user->user_lastname) .'"' : 'placeholder="Surname"') ?>>
																  </div>
																
																<div class="form-group">
																    <input name="maiden_name" type="firstname" class="form-control" id="InputMaidenName" value="<?php echo get_the_author_meta( 'maiden_name', $current_user->ID )?>" placeholder="Maiden Name">
																    
																</div>
																<div class="form-group">
																    <input name="facebook_user" type="firstname" class="form-control" id="InputMaidenName" value="<?php echo get_the_author_meta( 'facebook_user', $current_user->ID )?>" placeholder="Facebook">
																</div>
															</div>
															<div class="col-xs-12 col-sm-6">
															<div id="li-dob" class="controls-dob" data-error-age="Sorry, but you don't meet Spotify's age requirements.">
															    <label for="register-age">Date of birth:</label>
															    <div id="register-dob" class="register-dob">
																	<div class="controls controls-day">
																	  <input
																	  type="number"
																	  id="register-dob-day"
																	  class="dob"
																	  name="dob_day"
																	  value="<?php echo get_the_author_meta( 'dob_day', $current_user->ID )?>"
																	  pattern="[0-9]*"
																	  maxlength="2"
																	  min="1"
																	  max="31"
																	  required
																	  data-msg-required="When were you born?"
																	  data-msg-number="Please enter a valid day of the month."
																	  data-msg-min="Please enter a valid day of the month."
																	  data-msg-max="Please enter a valid day of the month.">
																	</div>
																	<div class="controls controls-month">
																	  <select
																	  id="register-dob-month"
																	  class="dob"
																	  name="dob_month"
																	  
																	  required
																	  data-msg-required="When were you born?">
																	    <?php $month_number = get_the_author_meta( 'dob_month', $current_user->ID ); ?>														    
																	    <option <?php //echo ($month_number == 'month' ? 'selected' : false) ?>value="" disabled>month</option>
																	    
																	    
																	    <option <?php echo ($month_number == '01' ? 'selected' : false) ?> value="01">January</option>
																	    <option <?php echo ($month_number == '02' ? 'selected' : false) ?> value="02">February</option>
																	    <option <?php echo ($month_number == '03' ? 'selected' : false) ?> value="03">March</option>
																	    <option <?php echo ($month_number == '04' ? 'selected' : false) ?> value="04">April</option>
																	    <option <?php echo ($month_number == '05' ? 'selected' : false) ?> value="05">May</option>
																	    <option <?php echo ($month_number == '06' ? 'selected' : false) ?> value="06">June</option>
																	    <option <?php echo ($month_number == '07' ? 'selected' : false) ?> value="07">July</option>
																	    <option <?php echo ($month_number == '08' ? 'selected' : false) ?> value="08">August</option>
																	    <option <?php echo ($month_number == '09' ? 'selected' : false) ?> value="09">September</option>
																	    <option <?php echo ($month_number == '10' ? 'selected' : false) ?> value="10">October</option>
																	    <option <?php echo ($month_number == '11' ? 'selected' : false) ?> value="11">November</option>
																	    <option <?php echo ($month_number == '12' ? 'selected' : false) ?> value="12">December</option>
																	  </select>
																	</div>
																	<div class="controls controls-year">
																	  <input
																	  type="number"
																	  id="register-dob-year"
																	  class="dob"
																	  name="dob_year"
																	  value="<?php echo get_the_author_meta( 'dob_year', $current_user->ID )?>" 
																	  placeholder="Year"
																	  pattern="[0-9]*"
																	  maxlength="4"
																	  min="1900"
																	  max="2001"
																	  required
																	  data-msg-required="When were you born?"
																	  data-msg-number="Please enter a valid year."
																	  data-msg-min="Please enter a valid year."
																	  data-msg-max="Sorry, but you don't meet Spotify's age requirements.">
																	</div>
															    </div>
															
	

																<div class="form-group">
																    <input type="firstname" name="telephone" class="form-control" id="InputTelephone" value="<?php echo get_the_author_meta( 'telephone', $current_user->ID )?>" placeholder="Telephone">
																</div>
																
																<!--<select name="form_matriculation" class="form-control form-dropdown">
																	 <option> - Matriculation Year - </option>
																  <?php $x = 1999 ?>
																  <?php while ($x > 1960) { ?> 
																	 <option value="<?php echo strval($x) ?>"><?php echo strval($x) ?></option>
																 <?php 
																	 $x--;
																	 } 
																  ?>
																  </select>-->
																<div class="form-group">
																    <input type="firstname" name="form_country" class="form-control" id="InputYearLeft" value="<?php echo get_the_author_meta( 'country', $current_user->ID )?>" placeholder="Country">
																</div>
																
																<div class="form-group">
																    <input type="firstname" name="form_city" class="form-control" id="InputYearLeft" value="<?php echo get_the_author_meta( 'city', $current_user->ID )?>" placeholder="City">
																</div>
																
																<div class="form-group">
																    <input type="firstname" name="year_left" class="form-control" id="InputYearLeft" value="<?php echo get_the_author_meta( 'year_left', $current_user->ID )?>" placeholder="Year Left Durban">
																</div>
																<?php wp_nonce_field('my_register_action_area'); ?>
																																															<div class="form-group" style="max-width:400px">
																	<a style="float:left; margin-top:20px;" href="<?php echo get_permalink(3886) ?>"<p>Click here to update password</p></a>

																	<button style="float:right" type="submit" name="submit_jw_user_area" class="btn btn-default account-submit update">Update Details</button>
																</div>
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


