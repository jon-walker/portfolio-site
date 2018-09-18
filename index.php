<?php get_header(); ?>
    <header class="blog_header">
        <img class="blog_header_logo" src="<?= get_template_directory_uri(); ?>/img/blog-logo.png" alt="Jonathan Walker Designing Intelligently">
    </header>
    <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

    <main>
    	<?php get_template_part('partials/loop'); ?>
    	<?php get_template_part('partials/pagination'); ?>
    </main>

<?php get_footer(); ?>
