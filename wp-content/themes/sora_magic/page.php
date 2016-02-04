<?php get_header(); ?>
<div id="main-area">
	<div id="parallax1" class="parallaxParent">
		<section data-index=1 class="section section-1">
			
				<a name="home"></a>
				<div class="container-fluid">
					<!-- main content area -->
					<div class="row">
						<div class="col-xs-12">
							<div class="logo-container">
								<img src="<?php echo get_template_directory_uri();?>/library/images/Logo.png">
								<div class="">
								<?php //hm_get_template_part( 'section', [ 'id' => 26 ] );	 ?>
								</div>
							</div>
						</div>
					</div>
				<!-- //- main content area -->
				</div>
			
		</section>
	</div>
	<div id="parallax2" class="parallaxParent">
		<section data-index=2  class="section section-2" style="background:rgb(245, 245, 245)">
			
			<a name="about-us"></a>
			<div class="container-fluid main-container">
				<!-- main content area -->
				<div class="row">
					<div class="col-xs-12">
						<div class="content-box right">
							<div class="">
							<?php 
								hm_get_template_part( 'section', [ 'id' => 4 ] );	 ?>
							</div>
						</div>
					</div>
				</div>
			<!-- //- main content area -->
			</div>
		
		</section>
	</div>
	<div id="parallax3" class="parallaxParent">
		<section data-index=3  class="section section-3">
			<a name="treatments"></a>
			<div class="container-fluid main-container">
				<!-- main content area -->
				<div class="row">
					<div class="col-xs-12">
						<div class="content-box treatments left">
							<div class="treament-img">
								<img src="<?php echo get_template_directory_uri();?>/library/images/treatments/Face.png">
								<div class="treatment-overlays">
									<img src="<?php echo get_template_directory_uri();?>/library/images/treatments/cheeks.png">
								</div>
								<div class="hover">

								</div>
							</div>
						</div>
					
						<div class="content-box treatments-info right">
							<?php 
								hm_get_template_part( 'section-treatments', [ 'id' => 6 ] );	 
							?>
						</div>
					</div
				</div>
			<!-- //- main content area -->
			</div>
		</section>
	</div>
	<div id="parallax4" class="parallaxParent">
		<section data-index=4 class="section section-4">
			<a name="prices"></a>
			<div class="container-fluid main-container">
				<!-- main content area -->
				<div class="row">
					<div class="col-xs-12">
						<div class="content-box left">
							<div class="">
							<?php 
								hm_get_template_part( 'section', [ 'id' => 8 ] );	 ?>
							</div>
						</div>
					</div>
				</div>
			<!-- //- main content area -->
			</div>
		</section>
	</div>
	<div id="parallax5" class="parallaxParent">
		<section data-index=5 class="section section-5">
			<a id="why" name="why"></a>
			<div class="container-fluid main-container">
				<!-- main content area -->
				<div class="row">
					<div class="col-xs-12">
						<div class="content-box right">
							<div class="">
							<?php 
								hm_get_template_part( 'section', [ 'id' => 10 ] );	 ?>
							</div>
						</div>
					</div>
				</div>
			<!-- //- main content area -->
			</div>
		</section>
	</div>
	<div id="parallax6" class="parallaxParent">
		<section data-index=6 class="section section-6">
			<a name="contact"></a>
			<div class="container-fluid main-container">
				<!-- main content area -->
				<div class="row">
					<div class="col-xs-12">
						<div class="content-box right">
							<div class="contact-section form-container">
							<?php 
								hm_get_template_part( 'section', [ 'id' => 12 ] );	 ?>

							</div>
						</div>
					</div>
				</div>
			<!-- //- main content area -->
			</div>
		</section>
	</div>
</div>

<?php get_footer(); ?>
<script>
    Height = jQuery( window ).height();
    Width = jQuery( window ).width();
console.log(Width);
    if (Width > 600) {
	    jQuery(".section-1").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/homepage1.jpg");
	}
	if (Width > 400) {
		jQuery(".section-2").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/About-us.jpg");
	    //jQuery(".section-3").backstretch("<?php echo get_template_directory_uri();?>/library/dome.jpg");
	    jQuery(".section-4").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/pricelist_.jpg");
	    jQuery(".section-5").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/whychose2.jpg");
	   // jQuery(".section-6").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/homepage1.jpg");
	}
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



