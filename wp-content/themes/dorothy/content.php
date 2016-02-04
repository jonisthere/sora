    <article <?php post_class( 'article hentry' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h1 class="post-title entry-title" itemprop="name"><a href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark','ace' ); ?>"><?php the_title(); ?></a></h1>
      </header>
      <?php } ?>

      <section class="post-meta">

        <ul class="post-info-meta">
          <li class="post-date"><span><?php _e( 'Date','ace' ); ?>:</span> <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" itemprop="datePublished" class="updated"><?php the_time( get_option( 'date_format' ) ) ?></time></li>
          <?php //if ( function_exists( 'ace_post_author' ) ) { echo ace_post_author(); } ?>
          <li class="post-category"><span><?php _e( 'Filed in','ace' ); ?>:</span> <?php the_category( ', ' ); ?></li>
          <li class="post-comment"><span><?php _e( 'Comment','ace' ); ?>:</span> <?php comments_popup_link( __( '0 comment','ace' ), __( '1 Comment','ace' ), __( '% Comments','ace' ) ); ?></li>
        </ul><!-- .post-meta -->
        <div class="clearfix">&nbsp;</div>
      </section><!-- .post-meta -->
      
      <article class="article-content">

        <div class="post-content">

          <?php the_content(); ?>

          <?php echo ace_get_link_pages(); ?>

          <?php if ( function_exists( 'ace_post_author_bio' ) ) { echo ace_post_author_bio(); } ?>

        </div><!-- .post-content -->

      </article>

      <footer class="post-footer">
        <ul class="footer-navi">
          <?php previous_post_link( __( '<li class="previous" rel="prev">&laquo; %link</li>' ) ); ?>
          <?php next_post_link( __( '<li class="next" rel="next">%link &raquo;</li>' ) ); ?>
        </ul>
      </footer><!-- .post-footer -->

      <div class="clearfix">&nbsp;</div>

      <?php if ( get_option( 'ace_enable_related' ) ) { get_template_part( 'layouts/related' ); } ?>

      <div class="clearfix">&nbsp;</div>

      <?php comments_template( '/comments.php',true ); ?>

    </article><!-- .article -->