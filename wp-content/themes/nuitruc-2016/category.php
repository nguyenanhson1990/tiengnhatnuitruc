<?php get_header(); ?>

	<div class="container-fluid">
		<!--/content-->
		<div class="row">
			<!--contentLeft-->
			<div class="col-sm-9">
					<?php get_template_part('loop'); ?>
					<div class="text-center">
						<?php get_template_part('pagination'); ?>
					</div>
			</div>
			<!--/contentLeft-->
			<!--sidebar-->
			<div class="col-sm-3">
				<?php get_sidebar(); ?>
			</div>
			<!--/sidebar-->
		</div>
		<!--/content-->

		<!--/main-->
	</div>

<?php get_footer(); ?>
