<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						<article id="post-not-found" class="hentry cf">

							<header class="article-header">

								<h2><?php _e( 'The page you were looking for was not found.', 'bonestheme' ); ?></h2>

							</header>

							<section class="entry-content">

								<p><?php _e( 'Try using the search box below!', 'bonestheme' ); ?></p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>
<!--
							<footer class="article-footer">

									<p><?php _e( 'This is the 404.php template.', 'bonestheme' ); ?></p>

							</footer>
-->

						</article>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
