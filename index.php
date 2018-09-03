<?php get_header(); ?>
<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

<main>
	<?php get_template_part('partials/loop'); ?>
	<?php get_template_part('partials/pagination'); ?>
</main>

<?php dynamic_sidebar('blog-widgets'); ?>

<?php get_footer(); ?>
