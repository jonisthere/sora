<?php get_header(); ?>
<div id="main-area">
	<section data-index=1 class="section section-1">
		<a name="home"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">

				<div class="col-xs-12 col-lg-offset-7 col-lg-4">
					<div class="">
					<?php 
						hm_get_template_part( 'section', [ 'id' => 26 ] );	 ?>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
	</section>
	<section data-index=2  class="section section-2">
		<a name="about-us"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12 col-md-offset-6 col-md-5">
					<div class="">
					<?php 
						hm_get_template_part( 'section', [ 'id' => 4 ] );	 ?>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
	</section>
	<section data-index=3  class="section section-3">
		<a name="treatments"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12">
					<div class="">
					<?php 
						hm_get_template_part( 'section', [ 'id' => 6 ] );	 ?>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
	</section>
	<section data-index=4 class="section section-4">
		<a name="prices"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12 col-md-5">
					<div class="">
					<?php 
						hm_get_template_part( 'section', [ 'id' => 8 ] );	 ?>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
	</section>
	<section data-index=5 class="section section-5">
		<a name="why"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12 col-md-offset-6 col-md-5">
					<div class="">
					<?php 
						hm_get_template_part( 'section', [ 'id' => 10 ] );	 ?>
					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
	</section>
	<section data-index=6 class="section section-6">
		<a name="contact"></a>
		<div class="container-fluid main-container">
			<!-- main content area -->
			<div class="row">
				<div class="col-xs-12 col-md-offset-6 col-md-5">
					<div class="contact-section form-container">
					<?php 
						hm_get_template_part( 'section', [ 'id' => 12 ] );	 ?>

					</div>
				</div>
			</div>
		<!-- //- main content area -->
		</div>
	</section>
</div>

<?php get_footer(); ?>
<script>
 /*   jQuery(".section-1").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/homepage1.jpg");
    jQuery(".section-2").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/About-us.jpg");
    jQuery(".section-3").backstretch("<?php echo get_template_directory_uri();?>/library/dome.jpg");
    jQuery(".section-4").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/pricelist_.jpg");
    jQuery(".section-5").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/whychose2.jpg");
    jQuery(".section-6").backstretch("<?php echo get_template_directory_uri();?>/library/backgrounds/homepage1.jpg");
    /*jQuery(".section").backstretch("<?php echo get_template_directory_uri();?>/library/dome.jpg");*/

    
   // $(".other").backstretch("coffee.jpg");
</script>

