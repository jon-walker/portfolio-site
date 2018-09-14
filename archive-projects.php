<?php get_header(); ?>
    <header class="blog_header">
        <img class="blog_header_logo" src="<?= get_template_directory_uri(); ?>/img/logo-headers.png" alt="See My Recent Design Projects">
    </header>
    <h1><?php _e( 'Latest Projects', 'html5blank' ); ?></h1>

    <main>
    	<?php get_template_part('partials/loop'); ?>
    	<?php get_template_part('partials/pagination'); ?>
    </main>

<?php dynamic_sidebar('blog-widgets'); ?>

<?php get_footer(); ?>
