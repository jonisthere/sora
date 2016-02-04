<?php

// ==================================================================
// Post author
// ==================================================================
function ace_post_author() {
  if ( get_option( 'ace_blog_author' ) ) {
  } else {
    echo '<li class="post-author">';
    echo '<span>Author:</span>';
    echo ' <span class="vcard author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><span class="fn" itemprop="name" style="font-weight:400; text-transform:capitalize;">';
    the_author_link();
    echo '</span></span>';
    echo '</li>';

  }
}

// ==================================================================
// Post author biography
// ==================================================================
function ace_post_author_bio() {

  if( get_option("ace_blog_author_bio") ) { ?>
      <section class="post-author-bio">
        <?php echo get_avatar( get_the_author_meta('email') , 64 ); ?>
        <?php echo get_the_author_meta('description'); ?>
      </section>
  <?php }

}

// ==================================================================
// Theme slider
// ==================================================================
function ace_theme_slider() {

  echo get_template_part( 'layouts/slide' ); 

}

// ==================================================================
// Theme custom css
// ==================================================================
function ace_css() {

  if( get_option( 'ace_css' ) ) { ?>

    <style type="text/css">
      <?php echo stripslashes( get_option( 'ace_css' ) ); ?>
    </style>

  <?php }

}

// ==================================================================
// Theme options colors
// ==================================================================
function ace_theme_css() { ?>

  <style type="text/css">

    .social-twitter {background-color: <?php if( get_option( 'ace_widget_twitter_bg' ) ) { echo get_option( 'ace_widget_twitter_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-facebook {background-color: <?php if( get_option( 'ace_widget_fb_bg' ) ) { echo get_option( 'ace_widget_fb_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-email {background-color: <?php if( get_option( 'ace_widget_email_bg' ) ) { echo get_option( 'ace_widget_email_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-rss {background-color: <?php if( get_option( 'ace_widget_rss_bg' ) ) { echo get_option( 'ace_widget_rss_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-google-plus {background-color: <?php if( get_option( 'ace_widget_google_bg' ) ) { echo get_option( 'ace_widget_google_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-flickr {background-color: <?php if( get_option( 'ace_widget_flickr_bg' ) ) { echo get_option( 'ace_widget_flickr_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-linkedin {background-color: <?php if( get_option( 'ace_widget_linkedin_bg' ) ) { echo get_option( 'ace_widget_linkedin_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-youtube {background-color: <?php if( get_option( 'ace_widget_youtube_bg' ) ) { echo get_option( 'ace_widget_youtube_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-vimeo {background-color: <?php if( get_option( 'ace_widget_vimeo_bg' ) ) { echo get_option( 'ace_widget_vimeo_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-instagram {background-color: <?php if( get_option( 'ace_widget_instagram_bg' ) ) { echo get_option( 'ace_widget_instagram_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-bloglovin {background-color: <?php if( get_option( 'ace_widget_bloglovin_bg' ) ) { echo get_option( 'ace_widget_bloglovin_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-pinterest {background-color: <?php if( get_option( 'ace_widget_pinterest_bg' ) ) { echo get_option( 'ace_widget_pinterest_bg' ); } else { echo '#cccccc'; } ?>;}
    .social-tumblr {background-color: <?php if ( get_option( 'ace_widget_tumblr_bg' ) ) { echo get_option( 'ace_widget_tumblr_bg' ); } else { echo '#cccccc'; } ?>;}

    .social-twitter:hover {background-color: <?php if( get_option( 'ace_widget_twitter_bg_hover' ) ) { echo get_option( 'ace_widget_twitter_bg_hover' ); } else { echo '#269dd5'; } ?>;}
    .social-facebook:hover {background-color: <?php if( get_option( 'ace_widget_fb_bg_hover' ) ) { echo get_option( 'ace_widget_fb_bg_hover' ); } else { echo '#0c42b2'; } ?>;}
    .social-email:hover {background-color: <?php if( get_option( 'ace_widget_email_bg_hover' ) ) { echo get_option( 'ace_widget_email_bg_hover' ); } else { echo '#aaaaaa'; } ?>;}
    .social-rss:hover {background-color: <?php if( get_option( 'ace_widget_rss_bg_hover' ) ) { echo get_option( 'ace_widget_rss_bg_hover' ); } else { echo '#f49000'; } ?>;}
    .social-google-plus:hover {background-color: <?php if( get_option( 'ace_widget_google_bg_hover' ) ) { echo get_option( 'ace_widget_google_bg_hover' ); } else { echo '#fd3000'; } ?>;}
    .social-flickr:hover {background-color: <?php if( get_option( 'ace_widget_flickr_bg_hover' ) ) { echo get_option( 'ace_widget_flickr_bg_hover' ); } else { echo '#fc0077'; } ?>;}
    .social-linkedin:hover {background-color: <?php if( get_option( 'ace_widget_linkedin_bg_hover' ) ) { echo get_option( 'ace_widget_linkedin_bg_hover' ); } else { echo '#0d5a7b'; } ?>;}
    .social-youtube:hover {background-color: <?php if( get_option( 'ace_widget_youtube_bg_hover' ) ) { echo get_option( 'ace_widget_youtube_bg_hover' ); } else { echo '#ff0000'; } ?>;}
    .social-vimeo:hover {background-color: <?php if( get_option( 'ace_widget_vimeo_bg_hover' ) ) { echo get_option( 'ace_widget_vimeo_bg_hover' ); } else { echo '#00c1f8'; } ?>;}
    .social-instagram:hover {background-color: <?php if( get_option( 'ace_widget_instagram_bg_hover' ) ) { echo get_option( 'ace_widget_instagram_bg_hover' ); } else { echo '#194f7a'; } ?>;}
    .social-bloglovin:hover {background-color: <?php if( get_option( 'ace_widget_bloglovin_bg_hover' ) ) { echo get_option( 'ace_widget_bloglovin_bg_hover' ); } else { echo '#00c4fd'; } ?>;}
    .social-pinterest:hover {background-color: <?php if( get_option( 'ace_widget_pinterest_bg_hover' ) ) { echo get_option( 'ace_widget_pinterest_bg_hover' ); } else { echo '#c70505'; } ?>;}
    .social-tumblr:hover {background-color: <?php if ( get_option( 'ace_widget_tumblr_bg_hover' ) ) { echo get_option( 'ace_widget_tumblr_bg_hover' ); } else { echo '#304d6b'; } ?>;}

    <?php if( get_option( 'ace_h1' ) ) { ?>h1 {color: <?php echo get_option( 'ace_h1' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_h2' ) ) { ?>h2 {color: <?php echo get_option( 'ace_h2' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_h3' ) ) { ?>h3 {color: <?php echo get_option( 'ace_h3' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_h4' ) ) { ?>h4 {color: <?php echo get_option( 'ace_h4' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_h5' ) ) { ?>h5 {color: <?php echo get_option( 'ace_h5' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_h6' ) ) { ?>h6 {color: <?php echo get_option( 'ace_h6' ); ?>;} <?php } ?>

    <?php if ( get_option( 'ace_text_color' ) ) { ?>body {color: <?php echo get_option( 'ace_text_color' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_nav_bg' ) ) { ?>.nav, .nav ul ul {background: <?php echo get_option( 'ace_nav_bg' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_nav_link' ) ) { ?>.nav a {color: <?php echo get_option( 'ace_nav_link' ); ?>;} <?php } ?>

    <?php if( get_option( 'ace_nav_link_hover' ) ) { ?>
    .nav a:hover,
    .nav .current-menu-item > a,
    .nav .current-menu-ancestor > a,
    .nav .current_page_item > a,
    .nav .current_page_ancestor > a {
      color: <?php echo get_option( 'ace_nav_link_hover' ); ?>;
    }
    <?php } ?>

    <?php if( get_option( 'ace_link' ) ) { ?>a {color: <?php echo get_option( 'ace_link' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_link' ) ) { ?>
    .nivo-controlNav a.active,
    .sc-slide .rslides_tabs li.rslides_here a,
    .pagination a:hover,
    .pagination .current {
      background: <?php echo get_option( 'ace_link' ); ?>;
    }
    <?php } ?>

    <?php if( get_option( 'ace_link_hover' ) ) { ?>a:hover, .article .post-title a:hover {color: <?php echo get_option( 'ace_link_hover' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_button_bg' ) ) { ?>
    a.comment-reply-link,
    a#cancel-comment-reply-link{
      background: <?php echo get_option( 'ace_button_bg' ); ?>;
      <?php if ( get_option( 'ace_button_text' ) ) { ?>color: <?php echo get_option( 'ace_button_text' ); ?>;<?php } ?>
    }
    <?php } ?>

    <?php if( get_option( 'ace_button_bg' ) ) { ?>
    input[type=submit],
    .post-button {
      background: <?php echo get_option( 'ace_button_bg' ); ?>;
      <?php if ( get_option( 'ace_button_border' ) ) { ?>border: 1px solid <?php echo get_option( 'ace_button_border' ); ?>;<?php } ?>
      <?php if ( get_option( 'ace_button_text' ) ) { ?>color: <?php echo get_option( 'ace_button_text' ); ?>;<?php } ?>
    }
    <?php } ?>

    <?php if( get_option( 'ace_button_bg_hover' ) ) { ?>
    input[type=submit]:hover,
    .post-button:hover {
      background: <?php echo get_option( 'ace_button_bg_hover' ); ?>;
      <?php if ( get_option( 'ace_button_border_hover' ) ) { ?>border: 1px solid <?php echo get_option( 'ace_button_border_hover' ); ?>;<?php } ?>
      <?php if ( get_option( 'ace_button_text_hover' ) ) { ?>color: <?php echo get_option( 'ace_button_text_hover' ); ?>;<?php } ?>
    }
    <?php } ?>

    <?php if( get_option( 'ace_arrow_bg' ) ) { ?>.nivo-prevNav, .nivo-nextNav {background-color: <?php echo get_option( 'ace_arrow_bg' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_caption_bg' ) ) { ?>.nivo-caption {background-color: <?php echo get_option( 'ace_caption_bg' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_caption_text_border' ) ) { ?>.nivo-caption-separator {background-color: <?php echo get_option( 'ace_caption_text_border' ); ?>;} <?php } ?>

    <?php if( get_option( 'ace_page_post_title' ) ) { ?>.article .post-title {color: <?php echo get_option( 'ace_page_post_title' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_page_post_title_link' ) ) { ?>.article .post-title a {color: <?php echo get_option( 'ace_page_post_title_link' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_page_post_title_link_hover' ) ) { ?>.article .post-title a:hover {color: <?php echo get_option( 'ace_page_post_title_link_hover' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_page_post_title_border' ) ) { ?>.article .post-header, .article .post-title {border-color: <?php echo get_option( 'ace_page_post_title_border' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_page_post_meta_border' ) ) { ?>.article ul.post-info-meta li {border-color: <?php echo get_option( 'ace_page_post_meta_border' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_related_border' ) ) { ?>.related-post {border-color: <?php echo get_option( 'ace_related_border' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_related_bg_color' ) ) { ?>h5.related-title {background-color: <?php echo get_option( 'ace_related_bg_color' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_related_text_color' ) ) { ?>h5.related-title {color: <?php echo get_option( 'ace_related_text_color' ); ?>;} <?php } ?>

    <?php if( get_option( 'ace_sidebar_title' ) ) { ?>.side-widget h3 {color: <?php echo get_option( 'ace_sidebar_title' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_sidebar_title_border' ) ) { ?>.side-widget h3 {border-color: <?php echo get_option( 'ace_sidebar_title_border' ); ?>;} <?php } ?>

    <?php if( get_option( 'ace_footer_title' ) ) { ?>.footer-widget h4 {color: <?php echo get_option( 'ace_footer_title' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_footer_border' ) ) { ?>.footer, .footer-inner {border-color: <?php echo get_option( 'ace_footer_border' ); ?>;} <?php } ?>
    <?php if( get_option( 'ace_footer_credit_border' ) ) { ?>p.footer-copy {border-color: <?php echo get_option( 'ace_footer_credit_border' ); ?>;} <?php } ?>

    .accordion-title {background-color: <?php echo get_option( 'ace_accordion_bg' ); ?>; color: <?php echo get_option( 'ace_accordion_text' ); ?>;}
    .accordion-open {background-color: <?php echo get_option( 'ace_accordion_bg_hover' ); ?>; color: <?php echo get_option( 'ace_accordion_text_hover' ); ?>;}

    <?php if( get_option( 'ace_twitter_bg' ) ) { ?>.icons-social a.icons-twitter {background-color: <?php echo get_option( 'ace_twitter_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_facebook_bg' ) ) { ?>.icons-social a.icons-facebook {background-color: <?php echo get_option( 'ace_facebook_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_pinterest_bg' ) ) { ?>.icons-social a.icons-pinterest {background-color: <?php echo get_option( 'ace_pinterest_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_instagram_bg' ) ) { ?>.icons-social a.icons-instagram {background-color: <?php echo get_option( 'ace_instagram_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_linkedin_bg' ) ) { ?>.icons-social a.icons-linkedin {background-color: <?php echo get_option( 'ace_linkedin_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_youtube_bg' ) ) { ?>.icons-social a.icons-youtube {background-color: <?php echo get_option( 'ace_youtube_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_vimeo_bg' ) ) { ?>.icons-social a.icons-vimeo {background-color: <?php echo get_option( 'ace_vimeo_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_google_plus_bg' ) ) { ?>.icons-social a.icons-google-plus {background-color: <?php echo get_option( 'ace_google_plus_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_flickr_bg' ) ) { ?>.icons-social a.icons-flickr {background-color: <?php echo get_option( 'ace_flickr_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_rss_bg' ) ) { ?>.icons-social a.icons-rss {background-color: <?php echo get_option( 'ace_rss_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_bloglovin_bg' ) ) { ?>.icons-social a.icons-bloglovin {background-color: <?php echo get_option( 'ace_bloglovin_bg' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_email_bg' ) ) { ?>.icons-social a.icons-email {background-color: <?php echo get_option( 'ace_email_bg' ); ?>;}<?php } ?>

    <?php if( get_option( 'ace_twitter_bg_hover' ) ) { ?>.icons-social a.icons-twitter:hover {background-color: <?php echo get_option( 'ace_twitter_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_facebook_bg_hover' ) ) { ?>.icons-social a.icons-facebook:hover {background-color: <?php echo get_option( 'ace_facebook_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_pinterest_bg_hover' ) ) { ?>.icons-social a.icons-pinterest:hover {background-color: <?php echo get_option( 'ace_pinterest_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_instagram_bg_hover' ) ) { ?>.icons-social a.icons-instagram:hover {background-color: <?php echo get_option( 'ace_instagram_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_linkedin_bg_hover' ) ) { ?>.icons-social a.icons-linkedin:hover {background-color: <?php echo get_option( 'ace_linkedin_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_youtube_bg_hover' ) ) { ?>.icons-social a.icons-youtube:hover {background-color: <?php echo get_option( 'ace_youtube_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_vimeo_bg_hover' ) ) { ?>.icons-social a.icons-vimeo:hover {background-color: <?php echo get_option( 'ace_vimeo_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_google_plus_bg_hover' ) ) { ?>.icons-social a.icons-google-plus:hover {background-color: <?php echo get_option( 'ace_google_plus_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_flickr_bg_hover' ) ) { ?>.icons-social a.icons-flickr:hover {background-color: <?php echo get_option( 'ace_flickr_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_rss_bg_hover' ) ) { ?>.icons-social a.icons-rss:hover {background-color: <?php echo get_option( 'ace_rss_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_bloglovin_bg_hover' ) ) { ?>.icons-social a.icons-bloglovin:hover {background-color: <?php echo get_option( 'ace_bloglovin_bg_hover' ); ?>;}<?php } ?>
    <?php if( get_option( 'ace_email_bg_hover' ) ) { ?>.icons-social a.icons-email:hover {background-color: <?php echo get_option( 'ace_email_bg_hover' ); ?>;}<?php } ?>

  </style>

<?php }

// ==================================================================
// Breadcrumb
// ==================================================================
function ace_breadcrumb() {
  if( get_option( 'ace_enable_breadcrumb' ) ) { echo get_breadcrumb(); }
}

// ==================================================================
// Heading
// ==================================================================
function ace_heading() {
  if ( get_header_image() == true ) { ?>
    <a href="<?php echo esc_url( home_url() ); ?>">
      <img src="<?php header_image(); ?>" class="header-title" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />
    </a>
  <?php } elseif ( is_home() || is_front_page() ) { ?>
      <h1><a href="<?php echo esc_url( home_url() ); ?>" class="header-title"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="header-desc"><?php bloginfo( 'description' ); ?></p>
  <?php } else { ?>
      <h5><a href="<?php echo esc_url( home_url() ); ?>" class="header-title"><?php bloginfo( 'name' ); ?></a></h5>
      <p class="header-desc"><?php bloginfo( 'description' ); ?></p>
  <?php }
}

// ==================================================================
// Header scripts
// ==================================================================
function ace_header_scripts() {
  if( get_option( 'ace_header_scripts' ) ) { echo stripslashes( get_option( 'ace_header_scripts' ) ); }
}

// ==================================================================
// Footer scripts
// ==================================================================
function ace_footer_scripts() {
  if( get_option( 'ace_footer_scripts' ) ) { echo stripslashes( get_option( 'ace_footer_scripts' ) ); }
}