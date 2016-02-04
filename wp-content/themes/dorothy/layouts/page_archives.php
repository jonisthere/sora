<?php
/*
Template Name: Archives
*/
get_header(); ?>

  <?php if ( get_post_meta( $post->ID, 'ace_wide', true ) ) { echo '<section class="section-wide">'; } else { echo '<section class="section">'; } ?>

  <?php echo ace_breadcrumb(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">
  
      <?php if ( get_post_meta( $post->ID, 'ace_title', true ) ) {} else { ?>
      <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
      </header>
      <?php } ?>

      <div class="post-content">

        <?php the_content(); ?>

        <?php echo ace_get_link_pages(); ?>

        <ul>
          <?php wp_tag_cloud( 'taxonomy=Artist&format=list&smallest=11px&largest11px' ); ?>
        </ul>

        <?php get_search_form();?>

        <hr />

        <section class="left">
          <h3><?php _e( 'Archives by month','ace' ); ?></h3>
          <ul>
            <?php wp_get_archives( 'type=monthly' ); ?>
          </ul>
        </section>
        <section class="right">
          <h3><?php _e( 'Archives by category','ace' ); ?></h3>
          <ul>
            <?php wp_list_categories( 'sort_column=name' ); ?>
          </ul>
        </section>
        <div class="clearfix">&nbsp;</div>

        <?php comments_template( '/comments.php',true ); ?>

      </div><!-- .post-content -->

    </article><!-- .article -->

    <?php endwhile; endif; ?>

  </section><!-- .section -->

  <?php if ( get_post_meta($post->ID, 'ace_wide', true ) ) {} else { echo get_sidebar(); } ?>

<?php get_footer(); ?>