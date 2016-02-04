<article class="nivoSlider-wrapper">

  <div id="nivoSlider" class="nivoSlider">
    <?php
    $query = new WP_Query( "post_type=sliders&posts_per_page=-1&orderby=menu_order&order=ASC" );
    while ($query->have_posts()) : $query->the_post();
    ?>
      <?php if ( get_post_meta($post->ID, 'ace_slider_url', true ) ) { ?><a href="<?php echo get_post_meta( $post->ID, 'ace_slider_url', true ); ?>"><?php } ?>
        <?php if ( has_post_thumbnail() ) { $slide_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slide_image', false, '' ); ?>
          <img src="<?php echo $slide_img[0]; ?>" data-thumb="<?php echo $slide_img[0]; ?>" alt="<?php the_title_attribute(); ?>" <?php if ( get_option( "ace_feature_title_enable" ) ) { ?>title="#caption-<?php the_ID(); ?>"<?php } ?> />
        <?php } ?>
      <?php if ( get_post_meta($post->ID, 'ace_slider_url', true ) ) { ?></a><?php } ?>
    <?php endwhile; wp_reset_query(); ?>
  </div>

  <?php
  $query = new WP_Query( "post_type=sliders&posts_per_page=-1&orderby=ASC" );
  while ( $query->have_posts() ) : $query->the_post();
  ?>
    <?php if ( get_option( 'ace_feature_title_enable' ) ) { ?>
      <div id="caption-<?php the_ID(); ?>" class="nivo-html-caption">
        <h3><?php the_title(); ?></h3>
        <div class="nivo-caption-separator">&nbsp;</div>
        <?php the_content(); ?>
      </div>
    <?php } ?>
  <?php endwhile; wp_reset_query(); ?>

</article>

<script type="text/javascript">
jQuery(document).ready(function($){ // START
  $( "#nivoSlider" ).nivoSlider({
    effect: '<?php if (get_option( 'ace_featured_slide_style' ) == true ) { echo get_option( 'ace_featured_slide_style' ); } else { echo "random"; } ?>',
    slices: 15, // For slice animations
    boxCols: 10, // For box animations
    boxRows: 5, // For box animations
    animSpeed: <?php if (get_option( 'ace_featured_slide_speed' ) == true ) { echo get_option( 'ace_featured_slide_speed' ); } else { echo "1000"; } ?>, // Slide transition speed
    pauseTime: <?php if (get_option( 'ace_featured_slide_pause' ) == true ) { echo get_option( 'ace_featured_slide_pause' ); } else { echo "5000"; } ?>, // How long each slide will show
    startSlide: 0, // Set starting Slide (0 index)
    directionNav: true, // Next & Prev navigation
    directionNavHide: true, // Only show on hover
    controlNav: true, // 1,2,3... navigation
    controlNavThumbs: false, // Use thumbnails for Control Nav
    keyboardNav: true, // Use left & right arrows
    pauseOnHover: true, // Stop animation while hovering
    manualAdvance: false, // Force manual transitions
    captionOpacity: 0.8, // Universal caption opacity
    prevText: 'Prev', // Prev directionNav text
    nextText: 'Next', // Next directionNav text
    beforeChange: function(){}, // Triggers before a slide transition
    afterChange: function(){}, // Triggers after a slide transition
    slideshowEnd: function(){}, // Triggers after all slides have been shown
    lastSlide: function(){}, // Triggers when last slide is shown
    afterLoad: function(){} // Triggers when slider has loaded
  });
}); // END
</script>