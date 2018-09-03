<?php get_header(); ?>

    <h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

    <main>
    	<?php get_template_part('partials/loop'); ?>
    	<?php get_template_part('partials/pagination'); ?>
    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
