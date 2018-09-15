<?php get_header(); ?>


<header class="blog_header">
    <img class="blog_header_logo" src="<?= get_template_directory_uri(); ?>/img/logo-headers.png" alt="See My Recent Design Projects">
</header>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<main>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="blog_featured-img">
        <?php if ( has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
    </div>

    <h1><?php the_title(); ?></h1>
    <?php get_template_part('partials/skills');?>

    <p class="pj_intro">
    	<?php
    	$meta = get_post_meta( $post->ID, 'pj_fields', true ); // Allows loop to access custom meta
    	if (is_array($meta) && isset($meta['textarea'])){
    		echo $meta['textarea']; }
    	?>
    </p>

    <?php the_content();
    endwhile;
    else: ?>

    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

    <?php endif;?>
</main>

<!-- **** View More Section **** -->
<aside class="pj_view-more">
	<h2>What Next?</h2>
    <section>
        <h3>Let's Talk&hellip;</h3>
        <ul class="pj_view-more_contact">
            <li class="phone"><img class="pj_contact-icon" src="<?= get_template_directory_uri();?>/img/phone-icon.png" alt="Phone">904.502.7669</li>
            <li class="email"><img class="pj_contact-icon" src="<?= get_template_directory_uri();?>/img/email-icon.png" alt="Phone"><a href="mailto:jonwalker85@yahoo.com" target="_blank">jonwalker85@yahoo.com</a></li>
        </ul>
    </section>

    <h3>See More Projects</h3>
	<div class="pj_view-more_thumbs">

		<!-- Projects Loop -->
		<?php
		// Create query
		$more_pj_query = new WP_Query(array(
			'post_type'	=> 'projects',
			'orderby'	=> 'rand',
		));
		if ( $more_pj_query -> have_posts() ) :
		$i = 0;
		while ( $more_pj_query -> have_posts() && $i < 3 ) : $more_pj_query -> the_post();?>
		<article>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
		</article>
	<?php $i++; endwhile;
	endif; ?>
	</div>
</aside>

<aside class="project_widgets-container">
    <?php dynamic_sidebar('project-widgets'); ?>
</aside>
<?php get_footer(); ?>
