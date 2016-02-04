<?php
/**
 *
 * Template Name: Journal Archive Page 
 *
**/ ?>

 

<?php get_header(); ?>

    <?php echo ace_breadcrumb(); ?>

   <?php $blog = new WP_Query(array(
                  'post_type'=>'post',
                  'post_status'=>'publish', 
                  'posts_per_page'=>-1, 
                  'order'=>'DESC',
                )); 
  ?>
  <section class="section" role="main">

    <?php echo ace_breadcrumb(); ?>

    <?php if ( $blog->have_posts() ) : while ( $blog->have_posts() ) : $blog->the_post(); ?>

    <article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h1 class="post-title"><a href="<?php echo get_permalink($blog->post->ID); ?>"><?php the_title(); ?></a></h1>
      </header>
      <?php } ?>
 
      <article class="post-content">
        <ul class="journal-info">
        <li class="post-date"><span><?php _e( 'Date','ace' ); ?>:</span> <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" itemprop="datePublished" class="updated"><?php the_time( get_option( 'date_format' ) ) ?></time></li>
          <?php //if ( function_exists( 'ace_post_author' ) ) { echo ace_post_author(); } ?>
        <li class="post-category"><span><?php _e( 'Filed in','ace' ); ?>:</span> <?php the_category( ', ' ); ?></li>
        </ul>
        <div class="clearfix">&nbsp;</div>
        <?php the_content(); ?>

        <?php echo ace_get_link_pages(); ?>

        <?php //comments_template( '/comments.php',true ); ?>

      </article><!-- .post-content -->

    </article><!-- .article -->

    <?php endwhile; endif; ?>

  </section><!-- .section -->

  <?php echo get_sidebar(); ?>

<?php get_footer(); ?>