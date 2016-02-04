<article <?php post_class( 'article hentry' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h2 class="post-title entry-title" itemprop="name"><a href="<?php the_permalink(); ?>" rel="<?php esc_attr_e( 'bookmark','ace' ); ?>"><?php the_title(); ?></a></h2>
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


    </article><!-- .article -->
