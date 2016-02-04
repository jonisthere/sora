<?php get_header(); ?>

  <section class="section-wide" role="main">

    <?php echo ace_breadcrumb(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'designer' ); ?>

    <?php endwhile; else: get_template_part( 'none' ); endif; ?>

  </section><!-- .section -->

<?php get_footer(); ?>