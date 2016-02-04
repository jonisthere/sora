    <article <?php post_class( 'article hentry' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h1 class="post-title entry-title" itemprop="name"><a href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark','ace' ); ?>"><?php the_title(); ?></a></h1>
      </header>
      <?php } ?>

      <section class="post-meta">

        <ul class="post-info-meta">
          <li class="post-date"><span>When:</span>
            <?php $date = DateTime::createFromFormat('Ymd', get_field('date'));
                   ?>
            <time datetime="" itemprop="datePublished" class="updated"><?php echo $date->format('d/m/Y') . ' ' .  get_field('times_'); ?></time></li>
          <li class="post-comment"><span>Where:</span> <?php echo get_field('where'); ?></li>
          <li class="post-comment"><span>Price:</span> <?php echo get_field('price'); ?></li>
        </ul><!-- .post-meta -->

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

      

    </article><!-- .article -->