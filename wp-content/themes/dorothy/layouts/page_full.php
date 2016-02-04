<?php
/*
Template Name: Full width
*/
get_header(); ?>

  <section class="section-wide" role="main">

    <?php echo ace_breadcrumb(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class( 'article' ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">

      <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
      </header>

      <div class="post-content">

        <?php the_content(); ?>

        <?php echo ace_get_link_pages(); ?>

        <?php comments_template( '/comments.php',true ); ?>

      </div><!-- .post-content -->

    </article><!-- .article -->

    <?php endwhile; endif; ?>

  </section><!-- .section -->

<?php get_footer(); ?>