<?php
/**
 *
 * Template Name: Desginer Archive Page 
 *
**/ ?>
<?php get_header() ?>

<style type='text/css'>
      #gallery-1 {
        margin: auto;
      }
      #gallery-1 .gallery-item {
        float: left;
        margin-top: 10px;
        text-align: center;
        width: 25%;
      }
      #gallery-1 img {
        border: 2px solid #cfcfcf;
      }
      #gallery-1 .gallery-caption {
        margin-left: 0;
      }
      /* see gallery_shortcode() in wp-includes/media.php */
    </style>

  <section class="section-wide" role="main">
    <?php echo ace_breadcrumb(); ?>

   <?php 

   $designers = new WP_Query(array(
                  'post_type'=>'designer',
                  'post_status'=>'publish', 
                  'posts_per_page'=>-1, 
                  'order'=>'ASC',
                )); 
  ?>
<div id='gallery-1' class='gallery galleryid-54 gallery-columns-4 gallery-size-thumbnail'>
<?php while ($designers->have_posts()) : 
                            $designers->the_post(); ?>

<dl class='gallery-item'>
  <dt class='gallery-icon portrait'>
          <?php if (has_post_thumbnail( $designers->post->ID ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $designers->post->ID ), 'thumbnail' ); ?>
          <a href='<?php echo get_permalink($designers->post->ID) ?>'><img width="215" height="215" src="<?php echo $image[0]; ?>" class="attachment-thumbnail" alt="The London Assembly Press Clipping" aria-describedby="gallery-1-82" /></a>
          <?php endif; ?>
  </dt>
</dl>
<?php endwhile; ?>




                        
<?php get_footer(); ?>