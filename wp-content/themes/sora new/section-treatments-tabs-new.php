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

			<?php if(get_field('conditions')): ?> 
					<div class="treatment-tabs">
					</div>
					<div class="tab_contents_container">
			        <ul class="tabs">
					    <?php $x = 1; ?>
						<?php while(the_repeater_field('conditions')): ?>
							<li <?php echo  ($x == 1 ? 'class="active"' : '') ?>>
					          <a href="#" rel="#tab_<?php echo $x ?>_contents" class="tab"><?php echo get_field($key); ?></a>
					        </li>
					    	<?php $x++;	?>
						<?php endwhile; ?>
					    <div style="clear:both"></div>
			        </ul>
			    
		         
			        <!-- Tab 1 Contents -->
		        <?php $x = 1; ?>
		        <?php while(the_repeater_field('conditions')): ?>
					<div id="tab_<?php echo $x ?>_contents" class="tab_contents <?php echo  ($x == 1 ? 'class="tab_contents_active"' : '') ?>">
			            <div class="<?php echo $key ?>">
							<h2><?php echo get_sub_field('condition_title'); ?></h2>
							<p><?php echo get_sub_field('condition_text'); ?></p>
						</div>	
			        </div>
		    		<?php $x++; ?>
			    <?php endwhile; ?>
			<?php endif; ?> 
		        
			</div>
		</section>
	</article>											
<?php endwhile; ?>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						

