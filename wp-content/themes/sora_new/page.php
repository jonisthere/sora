<?php get_header(); ?>
<div id="main-area">
	<section data-index=1 class="section section-1">
		<a name="home"></a>
		<div class="container-fluid">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12">
					<div class="logo-container">
						<img src="<?php echo get_template_directory_uri();?>/library/images/Logo.png">
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
		<div class="anystretch-under" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -9999999; margin: 0px; padding: 0px; height: 100%; width: 100%;"></div>
	</section>
	<section data-index=5 class="section section-5">
		<a name="why"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12">
					<div class="content-box left">
						<div class="">
						<?php 
							hm_get_template_part( 'section', [ 'id' => 10 ] );	 ?>
						</div>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
		<div class="anystretch-under" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -9999999; margin: 0px; padding: 0px; height: 100%; width: 100%;"></div>
	</section>
	<section data-index=3  class="section section-3">
		<a name="conditions"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12">
					<div class="treatments left">
						<!--<div class="treament-img">
							<img src="<?php echo get_template_directory_uri();?>/library/images/treatments/Face.png">
							<div class="treatment-overlays">
								<img src="<?php echo get_template_directory_uri();?>/library/images/treatments/">
							</div>
							<div class="hover">

							</div>
						</div>-->

						<div class="treaments-img">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/face_images/Face.png">
							<div class="treatment-overlays">
								<img src="<?php echo get_template_directory_uri();?>/library/images/treatments/">
								<div class="face_1">
								</div>
								<div class="face_2">
								</div>
								<div class="face_3">
								</div>
								<div class="face_4">
								</div>
								<div class="face_5">
								</div>
								<div class="face_6">
								</div>
								<div class="face_7">
								</div>
								<div class="face_8">
								</div>
								<div class="face_9">
								</div>
								<div class="face_10">
								</div>
								<div class="face_11">
								</div>
							</div>
							
							
							<div class="hover">

							</div>
						</div>
					</div>
				
					<div class="content-box treatments-info right">
						<?php 

						$section = new WP_Query(array(
							'post_type'=>'page',
							'post_status'=>'publish', 
							'posts_per_page'=>1, 
							'page_id'=>6
						));	
						?>
						<?php while ($section->have_posts()) : $section->the_post(); ?>
							<section class="entry-content">
								<h2 class="section-title"><?php the_title(); ?></h2>
								<div class="treatment-content-area">
									<ul class="treament-text-list">
									<?php if(get_field('conditions', 6)): ?>
										<?php while(the_repeater_field('conditions', 6)): ?>
										<li id="<?php echo get_sub_field('condition_slug'); ?>" <?php echo  ($x == 1 ? 'class="active" style="display:block"' : '') ?>>
								          <h3><?php echo get_sub_field('condition_title'); ?></h3>
										  <p><?php echo get_sub_field('conditional_text' ); ?></p>
								        
								        <?php $posts = get_sub_field('condition_treatments');
											if( $posts ): ?>
												<h2 class="section-title">Treatments</h2>
											    <ul class="condition-treatment-list">
											    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
											        <?php setup_postdata($post); ?>
											        <li data-name="<?php echo $post->post_name ?>">
											        	<?php the_title(); ?>
											        </li>
											    <?php endforeach; ?>
											    <div style="clear:left"></div>
											    </ul>
											    <?php // wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
											<?php endif; ?>
								    	<?php $x++;	?>
										<?php endwhile; ?>
										</li>
									<?php endif; ?> 
									</ul>
								</div>
								<div class="">
								
								</div>
							</section>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


						<?php 
							//hm_get_template_part( 'section-treatments', [ 'id' => 6 ] );	 
						?>
					</div>
					<div class="treatments-tabs-box">
						<?php 
							hm_get_template_part( 'section-treatments-tabs', [ 'id' => 6 ] );	 
						?>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
		<div class="anystretch-under" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -9999999; margin: 0px; padding: 0px; height: 100%; width: 100%;"></div>
	</section>


	<section data-index=3_1  class="section section-3-b">
		<a name="treatments"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12">
					
					<div class="treatments_content-box">
						<?php 

						$section = new WP_Query(array(
							'post_type'=>'page',
							'post_status'=>'publish', 
							'posts_per_page'=>1, 
							'page_id'=>79
						));	
						?>
						<?php while ($section->have_posts()) : $section->the_post(); ?>
						
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<section class="">
									<h2 class="section-title"><?php the_title(); ?></h2>
									<?php 
									$treatments = new WP_Query(array(
										'post_type'=>'treatments',
										'post_status'=>'publish', 
										'posts_per_page'=> -1, 
									));	
									?>
									<ul class="treatment-title" >
									<?php $x = 1; ?>
									<?php while ($treatments->have_posts()) : $treatments->the_post(); ?>
										<li data-name="<?php echo $post->post_name ?>" class="<?php echo  ($x == 1 ? "active" : '') ?>"><?php the_title(); ?></li>
									<?php $x++; ?>	
									<?php endwhile; ?>
										<div style="clear:left"></div>
									</ul>
									
									<?php wp_reset_postdata(); ?>
									<?php $y = 1; ?>
									<ul class="treatment-text">
										<?php while ($treatments->have_posts()) : $treatments->the_post(); ?>
											<li data-name="<?php echo $post->post_name ?>" class="<?php echo $post->post_name ?> <?php echo  ($y == 1 ? 'active' : '') ?>"><?php the_content(); ?></li>
										<?php $y++; ?>
										<?php endwhile; ?>
									</ul>
									
									</div>
									<?php wp_reset_postdata(); ?>
								</section>
							</article>
																	
						<?php endwhile; ?>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
		<div class="anystretch-under" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -9999999; margin: 0px; padding: 0px; height: 100%; width: 100%;"></div>
	</section>



	<section data-index=4 class="section section-4">
		<a name="prices"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12">
					<div class="content-box right">
						<div class="">
						<?php 
							hm_get_template_part( 'section', [ 'id' => 8 ] );	 ?>
							<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

						</div>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
		<div class="anystretch-under" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -9999999; margin: 0px; padding: 0px; height: 100%; width: 100%;"></div>
	</section>
	<section data-index=6 class="section section-6">
		<a name="contact"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12">
					<?php //echo dynamic_sidebar( 'Sidebar 1' ); ?>
					<div class="content-box left">
						<div class="form-container-background">
							<div class="entry-content">

							<?php
								$section = new WP_Query(array(
								'post_type'=>'page',
								'post_status'=>'publish', 
								'posts_per_page'=>1, 
								'page_id'=>12
							));	
							?>
							<?php while ($section->have_posts()) : $section->the_post(); ?>
								<h2 class="section-title"><?php the_title(); ?></h2>
								<?php the_content(); ?>
								<?php 
									//hm_get_template_part( 'section', [ 'id' => 51 ] );	 ?>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

								<div id="map-canvas"></div>
									<script src="https://maps.googleapis.com/maps/api/js"></script>
								    <script>
								      function initialize() {
								      	console.log('!');
								      	var myLatlng = new google.maps.LatLng(51.453177, -0.101561);
								        var mapCanvas = document.getElementById('map-canvas');
								        var mapOptions = {
								          center: myLatlng,
								          zoom: 16,
								          mapTypeId: google.maps.MapTypeId.HYBRID
								        }
								        var map = new google.maps.Map(mapCanvas, mapOptions)

								        var iconBase = '/wp-content/themes/cargo/library/images/';
								        var marker = new google.maps.Marker({
								          position: myLatlng,
								          //map: road,
								          //icon: iconBase + 'map-pin.png'
								        });
								      }
								      google.maps.event.addDomListener(window, 'load', initialize);
								    </script>
								</div>
						</div>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
		<div class="anystretch-under" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -9999999; margin: 0px; padding: 0px; height: 100%; width: 100%;"></div>
	</section>
	<section data-index=7 class="section section-7">
		<a name="contact"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12">
					<?php //echo dynamic_sidebar( 'Sidebar 1' ); ?>
					<div class="content-box right">
						<div class="contact-section form-container">
						<?php 
							hm_get_template_part( 'section', [ 'id' => 52 ] );	 ?>

						</div>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
		<div class="anystretch-under" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -9999999; margin: 0px; padding: 0px; height: 100%; width: 100%;"></div>
	</section>
</div>

<?php get_footer(); ?>
<script>
    Height = jQuery( window ).height();
    Width = jQuery( window ).width();
console.log(Width);
    if (Width > 600) {
	    jQuery(".section-1").anystretch("<?php echo get_template_directory_uri();?>/library/background_images/homepage.jpg");
	} else {
		jQuery(".section-1").css({ 'background' : 'rgb(255, 255, 230)'});
	}
	if (Width > 400) {
		//jQuery(".section-2").anystretch("<?php echo get_template_directory_uri();?>/library/backgrounds/About-us.jpg");
	    //jQuery(".section-3").backstretch("<?php echo get_template_directory_uri();?>/library/dome.jpg");
	    jQuery(".section-4").anystretch("<?php echo get_template_directory_uri();?>/library/background_images/pricelist.jpg");
	    jQuery(".section-5").anystretch("<?php echo get_template_directory_uri();?>/library/background_images/why_sora.jpg");
	    jQuery(".section-6").anystretch("<?php echo get_template_directory_uri();?>/library/background_images/Contact.jpg");
	    jQuery(".section-7").anystretch("<?php echo get_template_directory_uri();?>/library/background_images/booking.jpg");

	    jQuery(".section-3-b").anystretch("<?php echo get_template_directory_uri();?>/library/background_images/treatment.jpg");

	    

	    
	} else {
		jQuery(".section-2, .section-4 , .section-6").css({ 'background' : 'rgb(221, 234, 217)'});
		jQuery(".section-3 , .section-5").css({ 'background' : 'rgb(255, 255, 230)'});

	}

	
	

		  //  $('.div01').anystretch("img01.jpg");
		  //  $('.div02').anystretch("img02.jpg");
		  //  $('.div03').anystretch("img03.jpg");
	    
    /*Height = $( window ).height();
     Width = $( window ).width();
 var boxheight = $('.fp-tableCell').height();

$('.video-wrapper').height(Height); 
console.log(Height);

$(window).resize( function(e) {
     Height = $( window ).height();
      Width = $( window ).width();
      $('.video-wrapper').height(Height); 
      
      // RESIZE WIDTH AND HEIGHT OF INNER CONTAINERS OF SCREEN RESIZE
     /* $('.eighty-nine-percent-height').height(Height * 0.89);
      $('.half-of-eighty-nine-percent-height').height(Height * 0.445);
      $('.sub-width-half').width(Width / 2);
      $('.sub-width-third').width(Width / 3);
      //do something
        
        // THESE RESIZE THE BOXES THAT CONTAIN IMAGES WHEN USER CLICKS FULL SCREEN 
        $('.selected-parent').height(Height).width(Width);
        $('.selected').height(Height).width(Width);
        */
          
   // });

    /*jQuery(".section").backstretch("<?php echo get_template_directory_uri();?>/library/dome.jpg");*/

    
   // $(".other").backstretch("coffee.jpg");
</script>


