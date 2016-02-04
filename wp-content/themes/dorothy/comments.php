<div class="comment-box">

<?php
if ( !empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
  die ( 'Please do not load this page directly. Thanks!' );
if ( post_password_required() ) { ?>
  <p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view comments','ace' ); ?>.</p>
<?php return; } ?>

<!-- You can start editing here. -->
  <?php if ( have_comments() ) : ?>

    <div class="comment-pagination">
      <div class="alignleft"><?php previous_comments_link( __( 'Older comments','ace' ) ) ?></div>
      <div class="alignright"><?php next_comments_link( __( 'Newer comments','ace' ) ) ?></div>
    </div>

  <?php if ( !empty( $comments_by_type['comment'] ) ) { ?>
    <h4 id="comments"><?php comments_number(__( '0 comment','ace' ), __( '1 Comment','ace' ), __( '% Comments','ace' )); ?> <?php _e( 'on','ace' ); ?> <?php the_title(); ?></h4>
    <ol class="commentlist">
      <?php wp_list_comments( 'type=comment&callback=comment_style' ); ?>
    </ol>
  <?php } if ( !empty( $comments_by_type['pings'] ) ) { ?>
    <h4 id="comments"><?php echo count( $wp_query->comments_by_type['pings'] ); ?><?php _e( 'Pingbacks &amp; Trackbacks on','ace' ); ?> <?php the_title(); ?></h4>
    <ol class="commentlist">
      <?php wp_list_comments( 'type=pingback' ); ?>
    </ol>
  <?php } ?>

    <div class="comment-pagination">
      <div class="alignleft"><?php previous_comments_link( __( 'Older comments','ace' ) ) ?></div>
      <div class="alignright"><?php next_comments_link( __( 'Newer comments','ace' ) ) ?></div>
    </div>

  <?php else : // this is displayed if there are no comments so far ?>

    <?php if ( 'open' == $post->comment_status) : ?>

    <?php else : // comments are closed ?>

      <?php if ( is_page() ) : else : ?>
        <p class="nocomments"><?php _e( 'Comments are closed','ace' ); ?>.</p>
      <?php endif; ?>

    <?php endif; ?>

  <?php endif; ?>

  <?php if ( 'open' == $post->comment_status) : ?>

  <div id="comment-box-respond">

    <?php
    $comments_args = array(
      'label_submit'          => __( 'Comment','ace' ),
      'title_reply'           => __( 'Leave a Reply','ace' ),
      'title_reply_to'        => __( 'Leave a reply to %s','ace' ),
      'cancel_reply_link'     => __( 'Cancel reply','ace' ),
      'comment_notes_before'  => '',
      'comment_notes_after'   => '',
      'comment_field'         => '<p><textarea name="comment" class="comment-textarea" title="' . __( 'Comment','ace' ) . '" cols="50" rows="5" tabindex="1"></textarea></p>',
      'fields'                => apply_filters( 'comment_form_default_fields', array(
        'author'  => '<p><input type="text" name="author" class="comment-input" title="'.__( 'Name','ace' ).'*" value="'.$comment_author.'" size="22" tabindex="2" />',
        'email'   => '<input type="text" name="email" class="comment-input" title="'.__( 'Email','ace' ).'*" value="'.$comment_author_email.'" size="22" tabindex="3" />',
        'url'     => '<input type="text" name="url" class="comment-input" title="'.__( 'Website','ace' ).'" value="'.$comment_author_url.'" size="22" tabindex="4" /></p>',
      ) ),
    );
    comment_form( $comments_args );
    ?>

  </div>
  <?php endif; // if you delete this the sky will fall on your head ?>
</div>