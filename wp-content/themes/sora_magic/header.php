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

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
		<script src="//use.typekit.net/dya5mzh.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
	</head>

	<body <?php body_class(); ?>>
		<div id="mobile-logo"class="h1">
			<h1>
				<a class="menu-logo" href="<?php echo home_url(); ?>" rel="nofollow">
					Sora Clinic
				</a>
			</h1>
		</div>
		<div id="book-now">
			<h1>BOOK WITH VCITA</h1>
		</div>
		<div class="nav-bar-container">
			<!-- nav row -->
			<div class="nav-bar">
				<div class="header-banner-color">
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<header class="header" role="banner">
		
								<div id="inner-header" class="cf">
									<div id="logo"class="h1">
										<h1>
											<a class="menu-logo" href="<?php echo home_url(); ?>" rel="nofollow">
												Sora Clinic
											</a>
										</h1>
									</div>
									<div class="mobile-nav">
										<div class="slicknav_menu">
											<a href="#" aria-haspopup="true" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;">
												<span class="slicknav_menutxt">MENU</span>
												<span class="slicknav_icon">
													<span class="slicknav_icon-bar"></span>
													<span class="slicknav_icon-bar"></span>
													<span class="slicknav_icon-bar"></span>
												</span>
											</a>
											<ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
												<li class="menu_about"><a href="#section-2" role="menuitem" tabindex="-1">About Us</a></li>
												<li class="menu_treatments"><a href="#section-3" role="menuitem" tabindex="-1">Treatments</a></li>
												<li class="menu_prices"><a href="#section-4" role="menuitem" tabindex="-1">Prices</a></li>
												<li class="menu_why"><a href="#section-5" role="menuitem" tabindex="-1">Why Sora?</a></li>
												<li class="menu_contact"><a href="#section-6" role="menuitem" tabindex="-1">Contact</a></li>
												<li class="menu_booking"><a href="#section-7" role="menuitem" tabindex="-1">Make a Booking</a></li>
											</ul>
										</div>

									</div>
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
											<?php /*wp_nav_menu(array(
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
											)); */ ?>
											<ul id="menu" class="menu cf">
											<li><a href="#section-2">About Us</a></li>
											<li><a href="#section-3">Treatments</a></li>
											<li><a href="#section-4">Prices</a></li>
											<li><a href="#why">Why Sora?</a></li>
											<li><a href="#section-6">Contact</a></li>
											<li><a href="#section-7">Make a Booking</a></li>
										</ul>
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
		<div class="empty-bar">
			<a name="top"></a>
		</div>

