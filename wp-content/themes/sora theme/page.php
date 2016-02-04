<?php get_header(); ?>
<div class="section-1">
	<div class="container-fluid main-container">
		<!-- main content area -->
		<div class="row">
			<div class="col-xs-12">
				<div class="">
					<?php while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
							<section class="entry-content cf archive-content">

								<?php the_content(); ?>

							</section>
						</article>											
												
					<?php endwhile; ?>

				</div>
			</div>
		</div>
	<!-- //- main content area -->
	</div>
</div>
<?php get_footer(); ?>

