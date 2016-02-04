<!DOCTYPE html>
<!--[if IE 7]><html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php if ( esc_url( get_option( 'ace_favicon' ) ) ) { echo esc_url( get_option( 'ace_favicon' ) ); } else { echo get_stylesheet_directory_uri(); echo "/images/favicon.gif"; } ?>" type="image/x-icon" />

<?php wp_head(); ?>

<?php echo ace_header_scripts() || ace_css() || ace_theme_css(); ?>
<link rel="stylesheet" href="<?php echo site_url() . '/wp-content/themes/dorothy/assembly_style.css'; ?>" type="text/css" media="all">
</head>
<body <?php body_class(); ?>>
<section class="container header-purple-bar">
    <?php if ( get_option( 'ace_socials_enabled' ) ) { ?>
    <div class="content-area-header-section">
      <div class="header-meta">
        <ul class="icons-social">
          <li class="title"><?php _e( 'Get Social','ace' ); ?>:</li>
          <?php if ( get_option( 'ace_twitter' ) ) { ?><li><a href="<?php echo get_option( 'ace_twitter' ); ?>" class="icons-twitter assembly-twitter radius-4">Twitter</a></li><?php } ?>
          <?php if ( get_option( 'ace_facebook' ) ) { ?><li><a href="<?php echo get_option( 'ace_facebook' ); ?>" class="icons-facebook assembly-facebook radius-4">Facebook</a></li><?php } ?>
          <?php if ( get_option( 'ace_pinterest' ) ) { ?><li><a href="<?php echo get_option( 'ace_pinterest' ); ?>" class="icons-pinterest assembly-pinterest radius-4">Pinterest</a></li><?php } ?>
          <?php if ( get_option( 'ace_instagram' ) ) { ?><li><a href="<?php echo get_option( 'ace_instagram' ); ?>" class="icons-instagram radius-4">Instagram</a></li><?php } ?>
          <?php if ( get_option( 'ace_linkedin' ) ) { ?><li><a href="<?php echo get_option( 'ace_linkedin' ); ?>" class="icons-linkedin radius-4">LinkedIn</a></li><?php } ?>
          <?php if ( get_option( 'ace_youtube' ) ) { ?><li><a href="<?php echo get_option( 'ace_youtube' ); ?>" class="icons-youtube radius-4">YouTube</a></li><?php } ?>
          <?php if ( get_option( 'ace_vimeo' ) ) { ?><li><a href="<?php echo get_option( 'ace_vimeo' ); ?>" class="icons-vimeo radius-4">Vimeo</a></li><?php } ?>
          <?php if ( get_option( 'ace_google_plus' ) ) { ?><li><a href="<?php echo get_option( 'ace_google_plus' ); ?>" class="icons-google-plus radius-4">Google Plus</a></li><?php } ?>
          <?php if ( get_option( 'ace_flickr' ) ) { ?><li><a href="<?php echo get_option( 'ace_flickr' ); ?>" class="icons-flickr radius-4">Flickr</a></li><?php } ?>
          <?php if ( get_option( 'ace_bloglovin' ) ) { ?><li><a href="<?php echo get_option( 'ace_bloglovin' ); ?>" class="icons-bloglovin radius-4">Bloglovin</a></li><?php } ?>
          <?php if ( get_option( 'ace_tumblr' ) ) { ?><li><a href="<?php echo get_option( 'ace_tumblr' ); ?>" class="icons-tumblr radius-4">Tumblr</a></li><?php } ?>
          <?php if ( get_option( 'ace_rss' ) ) { ?><li><a href="<?php echo get_option( 'ace_rss' ); ?>" class="icons-rss radius-4">RSS Feed</a></li><?php } ?>
          <?php if ( get_option( 'ace_email' ) ) { ?><li><a href="mailto:<?php echo get_option( 'ace_email' ); ?>" class="icons-email radius-4">Email</a></li><?php } ?>
        </ul>
      </div>
    </div>
    <?php } ?>
</section>
<section class="container"> 
<header class="header" role="banner">
  <?php echo ace_heading(); ?>
  <nav class="nav" role="navigation">
    <?php wp_nav_menu( 'theme_location=top_menu&container_class=menu&menu_class=menu&fallback_cb=false&show_home=1' ); ?>
  </nav><!-- .nav -->

</header><!-- .header -->

<main>