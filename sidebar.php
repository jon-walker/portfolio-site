<!-- sidebar -->
<aside class="sidebar">

	<?php get_template_part('partials/searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-widgets')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('project-widgets')) ?>
	</div>

</aside>
<!-- /sidebar -->
