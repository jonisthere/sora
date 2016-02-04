<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // JQuery ?>
		<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->
		
		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/7e39dabc-2805-484a-8877-10844c8ef2f8.css"/>
		
		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- Bootstrap core CSS -->
	 	<link href="<?php echo get_template_directory_uri(); ?>/library/css/bootstrap.css" rel="stylesheet">
	 	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/font-awesome.min.css">
	 	
	 	<!-- Add fancyBox -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		
	 	<link href="<?php echo get_template_directory_uri(); ?>/library/css/slicknav.css" rel="stylesheet">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="nav-bar-container">
			<!-- nav row -->
			<div class="nav-bar">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<header class="header" role="banner">
		
								<div id="inner-header" class="cf">
									<p id="logo" class="h1">
										<a href="<?php echo home_url(); ?>" rel="nofollow">
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/"/>
										</a>
									</p>
									<div class="regular-nav-header">
										<div class="login-register padding-wrap">
											<div id="social-media-buttons" class="show-responsive-nav">
												<ul>
													<li><a href="#"><div class="linkedin"></div></a></li>
													<li><a href="#"><div class="twitter"></div></a></li>
													<li><a href="#"><div class="facebook"></div></a></li>
												</ul>
											</div>
										</div>
										
										<nav role="navigation">
											<?php wp_nav_menu(array(
					    					'container' => false,                           // remove nav container
					    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					    					'menu' => __( 'Main Menu', 'bonestheme' ),  // nav name
					    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
					    					'theme_location' => 'main-nav',                 // where it's located in the theme
					    					'before' => '',                                 // before the menu
						        			'after' => '',                                  // after the menu
						        			'link_before' => '',                            // before each link
						        			'link_after' => '',                             // after each link
						        			'depth' => 0,                                   // limit the depth of the nav
					    					'fallback_cb' => ''                             // fallback function (if there is one)
											)); ?>
										</nav>
										
										<div id="social-media-buttons" class="hide-responsive-nav">
											<ul>
												<li><a href="#"><div class="linkedin"></div></a></li>
												<li><a href="#"><div class="twitter"></div></a></li>
												<li><a href="#"><div class="facebook"></div></a></li>
											</ul>
										</div>
									</div>
								</div>
							</header>
						</div>
					</div>
				</div>
				<!-- //- nav row -->
			</div>
		</div>
		

