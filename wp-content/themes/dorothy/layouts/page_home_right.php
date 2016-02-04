<?php
/*
Template Name: Home - Right Slider
*/
get_header(); ?>

  <section class="section-wide" role="main">

    <?php echo ace_breadcrumb(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
      </header>
      <?php } ?>

      <?php if( get_option( 'ace_feature_enable' ) ) { ?>
      <article class="home-col3">

        <?php echo ace_theme_slider(); ?>

      </article>

      <article class="home-col4"><?php } ?>

        <div class="post-content">
          <?php the_content(); ?>
        </div><!-- .post-content -->

        <?php echo ace_get_link_pages(); ?>

      <?php if( get_option( 'ace_feature_enable' ) ) { ?></article><?php } ?>  
 
    </article><!-- .article -->

    <?php endwhile; endif; ?>

  </section><!-- .section -->

<?php get_footer(); ?>