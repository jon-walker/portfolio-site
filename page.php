<?php get_header(); ?>

	<main>
		<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

		</article>
		<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, I seem to have misplaced some of my content. Have you seen it? It\'s about yay high and looks really awesome.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

		<?php endif; ?>
	</main>

<?php get_footer(); ?>
