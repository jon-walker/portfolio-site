<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- post thumbnail -->
	<?php if ( has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail(array(300,300)); // Declare pixel size you need inside the array ?>
		</a>
	<?php endif; ?>
	<!-- /post thumbnail -->

	<!-- post title -->
	<h2>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</h2>
	<!-- /post title -->

	<!-- post details -->
	<span class="date">
		<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
			<?php the_date(); ?> <?php the_time(); ?>
		</time>
	</span>
	<!-- /post details -->

	<?php html5wp_excerpt('html5wp_index'); // Set custom length in functions.php

    // Check post type and add skills icon template if project
    $project_post_check = get_post_type();
    if ( $project_post_check == 'projects' ) {
        get_template_part( 'partials/skills' );
    }
    ?>

</article>
<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

<!-- article -->
<article>
	<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
</article>
<!-- /article -->

<?php endif; ?>
