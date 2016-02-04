<?php get_header(); ?>

  <?php if(get_post_meta($post->ID, 'ace_wide', true)) { echo '<section class="section-wide" role="main">'; } else { echo '<section class="section" role="main">'; } ?>

    <?php echo woocommerce_breadcrumb(); ?>

    <?php woocommerce_content(); ?>

  </section><!-- .section -->

  <?php if(get_post_meta($post->ID, 'ace_wide', true)) {} else { echo get_sidebar(); } ?>

<?php get_footer(); ?>