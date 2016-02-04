<?php
/**

 * Template Name: Registration Form 2 example old fields
 

**/ 


/*if (isset($_POST['submit_jw_uc'])) {
	do_shortcode('[jw_hd_form_proccess]');
} elseif (isset($_POST['submit_jw_hd_2'])) {
	$newJWDC->additon_user_details();
}
*/


//print_r($_POST);
/*$input = array();
	foreach ($_POST as $stuff => $val) {
		//echo $val;
		//echo $key;
		if( is_array( $stuff ) ) {
		    foreach( $stuff as $thing) {
		        echo $thing;
		    }
		} else {
		    $input[$stuff] = $val;
		}		
	}
	echo '<pre>';
	print_r($input);
	echo '</pre>';
*/	
	//jw_hd_add_reg_user($input);


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
													<div class="register-top-section form-container">
														<div class="row">
															<div class="col-xs-12 col-sm-6">	  
																<select name="form_user_title" class="form-control form-dropdown">
																
								<?php /*								'user_login'	=>	$input['email_address'],
			'user_pass'	=>	wp_generate_password ( 12, false ),
			'first_name'	=>	$input['first_name'],
			'last_name'	=>	$input['last_name'],
			'user_email'	=>	$input['email_address'],
			'display_name'	=>	$input['first_name'] . ' ' . $input['last_name'],
			'nickname'	=>	$input['first_name'] . ' ' . $input['last_name'],
			'role'		=>	'None' */ ?>
																
																
																	 <option> - Title - </option>
																	 <option>Mr</option>
																	 <option>Mrs</option>
																	 <option>Ms</option>
																  </select>
																  <div class="form-group">
																    <!-- <label for="exampleInputUsername">Username:</label> -->
																    <input name="form_first_name" type="firstname" class="form-control" id="InputFirstname" placeholder="First Name">
																  </div>
																  <div class="form-group form-group-pw">
																    <!-- <label for="exampleInputPassword">Password:</label> -->
																    <input name="form_last_name" class="form-control" id="InputSurname" placeholder="Surname">
																  </div>
																  <div class="form-group">
																    <input name="form_email_address" class="form-control" id="InputEmail" placeholder="Email" name="email" >
																  </div>
																  <div class="form-group">
																    <input name="form_email_address_confirm" class="form-control" id="InputConfirmEmail" placeholder="Confirm email">
																  </div>
																  <select name="form_matriculation" class="form-control form-dropdown">
																	 <option> - Matriculation Year - </option>
																  <?php $x = 1999 ?>
																  <?php while ($x > 1960) { ?> 
																	 <option value="<?php echo strval($x) ?>"><?php echo strval($x) ?></option>
																 <?php 
																	 $x--;
																	 } 
																  ?>
																  </select>

															</div>
															<div class="col-xs-12 col-sm-6">
																<div class="form-group">
																	<input name="form_user_name" type="firstname" class="form-control" id="InputUsername" placeholder="User Name">
																<?php do_shortcode('[jw_hd_form_messages_username]'); ?>
																</div>
																
																<div class="form-group">
																	<input name="form_zip_code" type="firstname" class="form-control" id="InputUsername" placeholder="ZIP">
																</div>
																<div class="form-group form-group-pw hide-on-phase-two-register">
																	<input name="form_password" type="password" class="form-control" id="InputPassword" placeholder="Password">
																</div>
																<div class="form-group form-group-pw hide-on-phase-two-register">
																	<input name="form_password_confirm" type="password" class="form-control" id="InputConfirmPassword" placeholder="Confirm Password">
																</div>
															   <?php wp_nonce_field('my_register_action'); ?>
																<button type="submit" name="submit_jw_uc" value="reg" class="btn btn-default account-submit hide-on-phase-two-register">Register</button>
																<?php do_shortcode('[jw_hd_form_messages]'); ?>
	
															</div>
														</div>
													</div>
											</form>
											<form role="form" class="registration-form" action="" method="post">
													<div class="register-middle-section hide-on-phase-two-register">
														<div class="row">
															<div class="col-xs-12">
																<div class="reg-border-spacer"></div>
																<h1 class="thank-you-h1">Thank you for registering with us</h1>
																<div class="more-qs-text"><h4>We have a couple more questions</h4></div>
															</div>
														</div>
													</div>
													<div class="register-bottom-section form-container show-on-phase-two-register">
														<div class="row">
															<div class="col-xs-12 col-sm-6">
																<div class="form-group">
																    <input name="maiden_name" type="firstname" class="form-control" id="InputMaidenName" placeholder="Maiden Name">
																</div>
																<select name="dob" class="form-control form-dropdown">
																	 <option> - Date of Birth - </option>
																	 <option>1999</option>
																	 <option>1998</option>
																	 <option>1997</option>
																	 <option>Etc</option>
																</select>
																<select name="country" class="form-control form-dropdown">
																	 <option> - Country - </option>
																	 <option>England</option>
																	 <option>Israel</option>
																	 <option>Etc</option>
																</select>
																<select name="city" class="form-control form-dropdown">
																	 <option> - City - </option>
																	 <option>London</option>
																	 <option>Birmingham</option>
																	 <option>Liverpool</option>
																</select>
															</div>
															<div class="col-xs-12 col-sm-6">
																<div class="form-group">
																    <input type="firstname" name="telephone" class="form-control" id="InputTelephone" placeholder="Telephone">
																</div>
																<div class="form-group">
																    <input type="firstname" name="year_left" class="form-control" id="InputYearLeft" placeholder="Year Left Durban">
																</div>
																<button type="submit" name="submit_jw_hd_2" class="btn btn-default account-submit">Update Details</button>
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


