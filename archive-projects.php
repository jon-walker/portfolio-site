<?php get_header(); ?>
    <header class="blog_header">
        <img class="blog_header_logo" src="<?= get_template_directory_uri(); ?>/img/projects-logo.png" alt="See My Recent Design Projects">
    </header>
    <h1><?php _e( 'Check Out My Past Projects', 'html5blank' ); ?></h1>

    <main>
    	<?php get_template_part('partials/loop'); ?>
    	<?php get_template_part('partials/pagination'); ?>
    </main>

<?php get_footer(); ?>
