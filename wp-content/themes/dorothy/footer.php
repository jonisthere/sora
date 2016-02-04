</main>
</section><!-- .container -->
<section class="container footer-purple-bar">
<footer class="footer">
	<div class="footer-logo">
		 <img src="<?php echo get_template_directory_uri(); ?>/images/assembly/Roundel.png" alt="">
	</div>
  <?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
  <section class="footer-inner" role="complementary">
    <?php dynamic_sidebar( 'footer-widget' ); ?>
  </section><!-- .footer-inner -->
  <?php endif; ?>

</footer><!-- .footer -->

<p class="footer-copy" role="contentinfo">
  <?php if ( get_option( 'ace_footer_credit' ) == true ) { echo stripslashes ( get_option( 'ace_footer_credit' ) ); } else { ?>&copy; <?php _e( 'Copyright','ace' ); ?> <a href="<?php echo esc_url( home_url() ); ?>" itemtype="copyrightHolder"><?php bloginfo( 'name' ); ?></a> <span itemtype="copyrightYear" content="<?php echo date( 'Y' ); ?>"><?php echo date( 'Y' ); ?></span>. <?php _e( 'Powered by','ace' ); ?> <a href="<?php echo esc_url( 'http://www.wordpress.org' ); ?>">WordPress</a>. <a href="<?php echo esc_url( 'http://www.bluchic.com' ); ?>" title="<?php _e( 'Theme designed by BluChic','ace' ); ?>" class="footer-credit"><?php _e( 'Designed by','ace' ); ?> BluChic</a><?php } ?>
</p>

</section><!-- .container -->

<?php //echo ace_footer_scripts(); ?>
<?php echo dynamic_sidebar( 1 ); ?>
<?php wp_footer(); ?>

</body>
</html>