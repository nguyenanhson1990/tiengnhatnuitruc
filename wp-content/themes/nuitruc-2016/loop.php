<!--#jvca-admissions-->
<div id="netted_list">
	<section class="container-fluid">
	 <?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article class="row">
			<figure class="col-sm-3">
				<?php if(has_post_thumbnail()): ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php echo get_the_post_thumbnail(get_the_ID(),'newmedium-200x124'); ?>
					</a>
				<?php else: ?>
					<img class="attachment-post-thumbnail" src="<?php  echo get_template_directory_uri();?>/images/no_image.png" alt="no image">
				<?php endif;?>
			</figure>
			<div class="col-sm-9">
				<h3 class="post-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
						<span class="new">
						<?php
						$post_time = get_the_time('U');
						$last_week = time() - (7 * 24 * 60 * 60);
						if($post_time > $last_week):
							?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/new.gif" alt="<?php the_title_attribute(); ?>">
						<?php endif; ?>
					</span>
					</a>
				</h3>
				<div class="entry-content">
					<p><?php
					if(has_excerpt()){
						echo the_excerpt();
					}else{
						echo mb_substr(the_content(),0,170,'UTF-8').'...';
					}
					?></p>
				</div>
			</div>
		</article>
		 <div class="clearfix visible-xs-block"></div>
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>
	</section>
</div>
<!--#jvca-admissions-->
