<?php get_header(); ?>

  <section class="section" role="main">

    <?php echo ace_breadcrumb(); ?>

    <?php if ( have_posts() ) : ?>
      <?php if ( is_category() ) { ?>
        <h3 class="pagetitle"><?php _e( 'Archive of','ace' ); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e( 'category','ace' ); ?></h3>
      <?php } elseif ( is_tag() ) { ?>
        <h3 class="pagetitle"><?php _e( 'Posts Tagged','ace' ); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h3>
      <?php } elseif (is_day()) { ?>
        <h3 class="pagetitle"><?php the_time( 'F jS Y' ); ?> <?php _e( 'archive','ace' ); ?></h3>
      <?php } elseif (is_month()) { ?>
        <h3 class="pagetitle"><?php the_time( 'F Y' ); ?> <?php _e( 'archive','ace' ); ?></h3>
      <?php } elseif (is_year()) { ?>
        <h3 class="pagetitle"><?php the_time( 'Y' ); ?> <?php _e( 'archive','ace' ); ?></h3>
      <?php } elseif (is_author()) { ?>
        <h3 class="pagetitle"><?php _e( 'Author Archive','ace' ); ?></h3>
      <?php } ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <article <?php post_class( "article" ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php if ( get_post_meta($post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e( 'bookmark','ace' ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <?php } ?>

      <div class="post-content">

          <?php if ( get_option( 'ace_enable_post_thumbnail' ) ) { ?>

            <?php if ( has_post_thumbnail() ) { ?>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'post_thumb', array( 'class'=>'alignleft post-thumbnail' ) ); ?></a>
            <?php } ?>

          <?php } else { } ?>

          <?php if ( get_option( 'ace_enable_excerpt' ) ) { echo the_excerpt(); } else { echo the_content(); } ?>

          <?php echo ace_get_link_pages(); ?>

        <div class="clearfix">&nbsp;</div>

      </div><!-- .post-content -->

    </article><!-- .article -->

    <?php endwhile; ?>

      <?php echo get_pagination_links(); ?>

    <?php else : get_template_part( 'content','none' ); endif; ?>

  </section><!-- .section -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>