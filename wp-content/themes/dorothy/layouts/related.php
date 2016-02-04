<section class="related-post">
  <h5 class="related-title"><?php _e( 'You Might Also Like','ace' ); ?></h5>
  <ul class="related-post-list">
    <?php
    $tags = wp_get_post_tags( $post->ID );
    if ( $tags ) { $tag_ids = array(); foreach($tags as $individual_tag ) $tag_ids[] = $individual_tag->term_id;
    $args=array(
    'tag__in' => $tag_ids,
    'post__not_in' => array( $post->ID ),
    'showposts'=>5,
    'ignore_sticky_posts'=>1
    );
    $my_query = new wp_query($args);
    if ( $my_query->have_posts() ) { while ( $my_query->have_posts() ) { $my_query->the_post();
    ?>
      <li>
        <a href="<?php the_permalink() ?>">
        <?php if ( has_post_thumbnail() ) { ?>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
          <?php the_post_thumbnail( 'related_thumb', array( 'class'=>'fade' ) ); ?>
        <?php } else { ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/related_post.jpg" class="fade" alt="<?php the_title_attribute(); ?>" />
        <?php } ?>
        </a>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
      </li>
    <?php } wp_reset_query(); } } ?>
  </ul>
</section>