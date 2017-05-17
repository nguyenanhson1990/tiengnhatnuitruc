<!-- sidebar -->
<aside class="sidebar" role="complementary">
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<?php
		if(!is_front_page())
		{
			get_template_part('recentposts');
		};
	?>
</aside>
<!-- /sidebar -->
