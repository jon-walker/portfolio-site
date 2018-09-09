<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<main>
    <!-- Use h1 as container to hold header styles-->
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

<aside class="project_widgets-container">
    <?php dynamic_sidebar('project-widgets'); ?>
</aside>

<!-- **** View More Section **** -->
<aside class="pj_view-more">
	<h2>What Next?</h2>
	<div class="pj_view-more_thumbs">
		<section>
			<h3><a href="<?php echo home_url(); ?>/contact">Let's Talk&hellip;</a></h3>
			<ul class="pj_view-more_contact">
				<li class="phone"><img class="pj_contact-icon" src="<?= get_template_directory_uri();?>/img/phone-icon.png" alt="Phone">904.502.7669</li>
				<li class="email"><img class="pj_contact-icon" src="<?= get_template_directory_uri();?>/img/email-icon.png" alt="Phone"><a href="mailto:jonwalker85@yahoo.com" target="_blank">jonwalker85@yahoo.com</a></li>
			</ul>
		</section>
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
			<?php the_excerpt(); ?>
		</article>
	<?php $i++; endwhile;
	endif; ?>
	</div>
</aside>

<?php get_footer(); ?>
