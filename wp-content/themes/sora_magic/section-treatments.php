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
			 the_content();
			?>
			<div class="treatment-content-area">
			</div>
			<?php $fields = array (
								'Lips' => 'lips_text',
								'eye_wrinkle' => 'eye_wrinkle_text',
								'forehead' =>'forehead_text',
								'nasio_labial' =>'nasio_labial_text',
								'nose_bridge' =>'nose_bridge_text',
								'smokers_lines' =>'smokers_lines_text',
								'top_nose_garbella' => 'top_nose_garbella_text',
							);
			foreach ($fields as $key => $value) {
				
			if( get_field($key)) { ?>
					<div class="<?php echo $key ?> " style="display:none">
						<h2><?php echo get_field($key); ?></h2>
						<p><?php echo get_field($value); ?></p>
					</div>	
		<?php	}		
			}
?>

			<div class="">
			
			</div>
		</section>
	</article>											
<?php endwhile; ?>


