<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
	
		<img class="bg"src="<?php echo get_template_directory_uri(); ?>/img/ardoise.jpg" alt="" style="width:100%;
	height: 600px; 
 
}">	<div style=" transform: skew(-4deg, -4deg);
  background-color: beige; overflow: hidden; width:100%;
	height: 600px;margin-top: -4%; margin-left:-1%;"></div>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
