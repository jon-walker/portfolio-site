<?php get_header(); ?>

    <h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

	<main>
		<?php get_template_part('partials/loop'); ?>
		<?php get_template_part('partials/pagination'); ?>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
