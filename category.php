<?php get_header(); ?>

    <h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

    <main>
    	<?php get_template_part('partials/loop'); ?>
    	<?php get_template_part('partials/pagination'); ?>
    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
