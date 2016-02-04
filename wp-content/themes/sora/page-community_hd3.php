<?php
/**

 * Template Name: Community Page hd3

**/ 

if (isset($_POST['submit_email'])) {
	
	// IF USE CHOOSES PAYPAL CHECKOUT 
	do_shortcode('[submit_email_durban_list]');

} elseif (isset($_POST['submit_add_name_to_list'])) {
	
	do_shortcode('[submit_new_name_to_list]');
}

?>

<?php get_header(); ?>


	<!-- main content area -->
	<div class="row">
		<div class="col-xs-12">
		
		thsi ione
		
			<div id="content">

				<div id="inner-content" class="cf">
				
				<?php 


//    echo 'Hallo! Schön dass Sie hier sind!'; ?>

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
											<h1><a href="<?php echo get_permalink(); ?>/" class="underline-black extended-width-link"><?php the_title(); ?></a></h1>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-xs-12">
									<div class="">
										<?php while (have_posts()) : the_post(); ?>
											<div class="community-content">
												<?php the_content(); ?>
											</div>
											
											<form role="form" class="form-inline find-your-year-form">
											    <div class="filter-matri">
												    
												    <!--<button type="submit" class="btn btn-default matri-btn">GO</button>-->
											    </div>
											    <div class="filter-dob">
											    <?php 
											    // set year to first call page on
											    $start_year = '1950';
											    ?>
											    
												    <h2 class="inline full-width-768">SEARCH BY YEAR OF BIRTH</h2>
												    <select class="form-control form-dropdown" id="mal-year-choose-front-end">
													   <option>Select your year of birth</option>
										 			   <?php $x = 1980;
										 			   while($x > 1940){ ?>
											 			   
											 			  <option <?php echo ($x == $start_year ? 'selected' : false ) ?>><?php  echo strval($x) ;?></option>
											 			   
										 			  <?php 
										 			  $x --;
										 			  }
										 			   ?>
												    </select>
												    <!--<button type="submit" class="btn btn-default matri-btn">GO</button>-->
											    </div>
											</form>
											    
											    <div class="community-name-list-section" style="display:block !important;">
												    <div class="reg-border-spacer"></div>
												    
												    <h2 class="lowercase">Welcome to the year of <span class="welcome_to_year_of"><?php echo $start_year ?></span> </h2>
												    <div class="welcome-content">If you know the email addresses of any of our unregistered friends please tick the boxes and invite them to join our rapidly growing online Durban community. They will be added to a form where you can fill in their email addresses.
													    
	<?php 												   // $userInfo = geoip_detect2_get_info_from_current_ip();
//echo  ($userInfo->country->isoCode); ?>


	<!-- <p> CONTENT MAY BE DETERMINED BY IP IF YOU ARE IN UK OR SOUTH AFRICA YOU WILL SEE NEXT LINE</p> -->
	
	<?php /*
$userInfo = geoip_detect2_get_info_from_current_ip();
if ($userInfo->country->isoCode == 'ZAF')
    echo '<h1>HELLO! SOUTH AFRICA</h1>';
    
if ($userInfo->country->isoCode == 'GB')
    echo '<h1>HELLO! UK</h1>';
*/
    
     ?>
	
												   											    
													    
												    </div>
												    
												    
												    <div class="legend-colours">
													    <div class="legend-item">
														    <img src="<?php echo get_template_directory_uri() ?>/library/images/green.png"/>
													    </div>
													    <div class="legend-item">
														    <img src="<?php echo get_template_directory_uri() ?>/library/images/blue.png"/>
													    </div>
													    <div class="legend-item">
														    <img src="<?php echo get_template_directory_uri() ?>/library/images/orange.png"/>
													    </div>
													    <div class="legend-item">
														    <img src="<?php echo get_template_directory_uri() ?>/library/images/red.png"/>
													    </div>
													    <div class="legend-item">
														    <img src="<?php echo get_template_directory_uri() ?>/library/images/purple.png"/>
													    </div>
												    </div>
												    <div class="registered-members">
													    <h2 class="lowercase cfn">Registered members</h2>
													    <?php $args = array('role' => 'subscriber', 'meta_key' => 'dob_year',
	'meta_value'   => $start_year,);
														    $blogusers = get_users( $args ); ?>
													    <div class="row community-checkboxes">
													    	<!-- Column 1 -->
													    	
													    	<!-- Column 2 -->
													    	<?php foreach ( $blogusers as $user ) { ?>
																	
																
															<div class="col-xs-6 col-sm-3">
															<?php //print_r($user); ?>
													    		<div class="checkbox">
																	<div class="color-dot <?php $r = rand(1, 3);
																		 
																		 switch (esc_attr(get_the_author_meta( 'donation_support_status', $user->ID )){
																			case '1':
																				echo 'bronze'; 
																				break;
																			case '2':
																				echo 'silver'; 
																				break;
																			case '3':
																				echo 'gold'; 
																				break;
																			case '4':
																				echo 'platinum'; 
																				break;
																			case '5':
																				echo 'patron'; 
																				break;
																			default:
																				
																		}
																		 
																		 
																		 ?>">
																			 
																	</div>
																	<div class="dot-name"><?php echo '<span>' . esc_html( $user->display_name ) . '</span>'; ?> 
																	</div>
																</div>
															</div>
															<?php }?>
														</div>
													</div>
												    <div class="row community-checkboxes unregistered-members">
												    	<h2 class="lowercase">Unregistered members</h2>
												    	<!-- Column 1 -->
											<?php $loop = new WP_Query( array( 'post_type' => 'matriculation', 'posts_per_page' => -1, 'author' => 1, 'author' => 1, 'meta_key' => 'List_Year', 'meta_value' => $start_year ) ); 
											//'meta_key' => 'Firstname',  'meta_key' => 'color', 'meta_value' => $start_year
											while ( $loop->have_posts() ) : 
													$loop->the_post();
?>													<form name="email_name_list" method="post" action="" id="commentForm">
														
														<div class="col-xs-6 col-sm-3">
												    		<div class="checkbox inline">
													    		<div class="checkbox matric-list">
																	<label>
																    	<input type="checkbox" value="">
																		<?php echo get_post_meta( $post->ID, 'List_FirstName', true ).' ' .get_post_meta( $post->ID, 'List_Surname', true);
					//													get_post_meta($post->ID, 'Firstname', true) get_post_meta($post->ID, 'Lastname', true); 
																		?>
																	</label>
																	
													    		
																	<div class="email_contact">
																		
															        	
															        	<label>
																	    	Add address and invite this person to It's Durban Calling  
																	    </label>
																    	<input type="text" class="form-control inline short-input" name="email_address" placeholder="Email Address">
																    	<button type="submit" name="submit_email" class="btn btn-default left">EMAIL</button>
																        	
																	</div>
																	   
																</div>
															</div>
														</div>
													</form>
													
											<?php endwhile;?>
												    </div>
												    
												   
												</div>
											</form>
				
			

								
																	
										<?php endwhile; ?>
										
										 
										 <form name="email_name_list" onsubmit="return validateForm()" method="post" action="" class="missed-name-form">
										 	<button type="submit"  name="add_name_to_list" class="add_name_to_list btn btn-default left">Have we missed a name? let us know</button>
										
														
														<div class="col-xs-12">
												    		<div class="checkbox inline">
													    		<div class="checkbox matric-list">
																	<div class="email_contact more-names-box-wrapper">
																		
																        	<form name="add_name_to_list" onsubmit="return validateForm()" method="post" action="">
																        	<label>
																		    	Add a name to the community list
																		    </label>
																	    	<input type="text" class="form-control inline short-input" name="email_address_add" placeholder="Name">
																	    	<button type="submit" name="submit_add_name_to_list" class="btn btn-default left">EMAIL</button>
																        	
																	</div>
																	   
																</div>
															</div>
														</div>
										</form>
										

									</div>
								</div>
								
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
	$loop = new WP_Query( array( 'post_type' => 'donation', 'author' => 1, 'posts_per_page' => -1) );
		$y = 1;
		$x = array();
		while ( $loop->have_posts() ) : 
				$loop->the_post();
			
			echo '<div style="float:left; margin-right:20px;">' . get_post_meta( $post->ID, 'amount', true) . '</div>';
			$x[$y] = get_post_meta( $post->ID, 'amount', true);
			
			
			$y++;
		endwhile;
		
		echo '<h1>';
		print_r($x);
		echo '</h1>';
		echo '<h1>this is the total ' . array_sum ( $x ) . '</h1>';
		
		?>
	<!-- //- main content area -->

<?php get_footer(); ?>

