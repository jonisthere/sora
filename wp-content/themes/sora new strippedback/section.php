<?php 
if( isset( $template_args ) ) {
	extract( $template_args );
}

$section = new WP_Query(array(
	'post_type'=>'page',
	'post_status'=>'publish', 
	'posts_per_page'=>1, 
	'page_id'=>$id
));	
?>
<?php while ($section->have_posts()) : $section->the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
		<section class="entry-content">
			<h2 class="section-title"><?php the_title(); ?></h2>
			
			<?php 
			if( have_rows('price_list') ):
			// loop through the rows of data
			    ?>
				<?php

			    while ( have_rows('price_list') ) : the_row(); ?>
			        <p class="price-header">
			        	<?php the_sub_field('price_title'); ?>
			        </p>
			        <p class="price-info">
			        	<?php the_sub_field('price_info'); ?>
			        </p>
				<?php endwhile;
			else:
			 	the_content();

			endif; ?>
			<div class="social">
				this is the social eleement
			</div>
		</section>
	</article>											
<?php endwhile; ?>


