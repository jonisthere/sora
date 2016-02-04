<?php get_header(); ?>

  <section class="section" role="main">

    <?php if ( have_posts() ) : ?>
  
      <h2 class="pagetitle"><?php _e( 'Searching for','ace' ); ?> &quot;<?php the_search_query(); ?>&quot;</h2>

    <?php while ( have_posts() ) : the_post(); ?>

    <article class="article" <?php post_class(); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e( 'bookmark','ace' ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <?php } ?>

        <?php if ( get_option( "ace_enable_post_thumbnail" ) ) { ?>

          <?php if ( has_post_thumbnail() ) { ?>
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'post_thumb', array( 'class'=>'alignleft post-thumbnail' ) ); ?></a>
          <?php } ?>

        <?php } else { } ?>

          <?php if ( get_option( "ace_enable_excerpt" ) ) { echo the_excerpt(); } else { echo the_content(); } ?>

        <?php echo ace_get_link_pages(); ?>

      <div class="clearfix">&nbsp;</div>

    </article><!-- .article -->

    <?php endwhile; ?>

      <?php echo get_pagination_links(); ?>

    <?php else : get_template_part( 'content','none' ); endif; ?>

  </section><!-- .section -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>