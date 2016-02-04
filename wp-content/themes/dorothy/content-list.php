    <article <?php post_class( 'article hentry' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h2 class="post-title entry-title" itemprop="name"><a href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark','ace' ); ?>"><?php the_title(); ?></a></h2>
      </header>
      <?php } ?>

      <section class="post-meta">

        <ul class="post-info-meta">
          <li class="post-date"><span><?php _e( 'Date','ace' ); ?>:</span> <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" itemprop="datePublished" class="updated"><?php the_time( get_option( 'date_format' ) ) ?></time></li>
          <?php if ( function_exists( 'ace_post_author' ) ) { echo ace_post_author(); } ?>
          <li class="post-category"><span><?php _e( 'Filed in','ace' ); ?>:</span> <?php the_category( ', ' ); ?></li>
          <li class="post-comment"><span><?php _e( 'Comment','ace' ); ?>:</span> <?php comments_popup_link( __( '0 comment','ace' ), __( '1 Comment','ace' ), __( '% Comments','ace' ) ); ?></li>
        </ul><!-- .post-meta -->

      </section><!-- .post-meta -->

      <article class="article-content">

        <div class="post-content">

          <?php if ( get_option( 'ace_enable_post_thumbnail' ) ) { ?>

            <?php if ( has_post_thumbnail() ) { ?>
              <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'post_thumb', array( 'class'=>'alignleft post-thumbnail' ) ); ?></a>
            <?php } ?>

          <?php } else { } ?>

          <?php if ( get_option( 'ace_enable_excerpt' ) ) { echo the_excerpt(); } else { echo the_content(); } ?>

          <?php echo ace_get_link_pages(); ?>

        </div><!-- .post-content -->

      </article>

      <div class="clearfix">&nbsp;</div>

      <?php if ( get_option( 'ace_enable_related' ) ) { get_template_part( 'layouts/related' ); } ?>

      <div class="clearfix">&nbsp;</div>

      <?php comments_template( '/comments.php',true ); ?>

    </article><!-- .article -->