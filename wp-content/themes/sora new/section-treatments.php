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
			<div class="treatment-content-area">
				<ul id="treament-text-list">
					<li class="treatment-content active">
						<?php 
						 the_content();
						?>
					</li>
				
				<?php if(get_field('conditions', 6)): ?>
					<?php while(the_repeater_field('conditions', 6)): ?>
					<li <?php echo  ($x == 1 ? 'class="active"' : '') ?>>
			          <h2><?php echo get_sub_field('condition_title'); ?></h2>
					  <p><?php echo get_sub_field('conditional_text' ); ?></p>
			        </li>
			        <?php $posts = get_sub_field('condition_treatments');
						if( $posts ): ?>
						    <ul>
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        <li>
						            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						        </li>
						    <?php endforeach; ?>
						    </ul>
						    <?php // wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
			    	<?php $x++;	?>
					<?php endwhile; ?>
				<?php endif; ?> 
				</ul>
			</div>
			<div class="">
			
			</div>
		</section>
	</article>											
<?php endwhile; ?>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>



