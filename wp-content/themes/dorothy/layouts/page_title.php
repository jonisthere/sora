<?php
/*
Template Name: Without Title
*/
get_header(); ?>

  <section class="section" role="main">

    <?php echo ace_breadcrumb(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">
 
      <div class="post-content">

        <?php the_content(); ?>

        <?php echo ace_get_link_pages(); ?>

        <?php comments_template( '/comments.php',true ); ?>

      </div><!-- .post-content -->

    </article><!-- .article -->

    <?php endwhile; endif; ?>

  </section><!-- .section -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>