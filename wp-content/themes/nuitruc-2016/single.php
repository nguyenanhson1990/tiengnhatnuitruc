<?php get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <!-- section -->
                <section class="post_details">

                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                        <!-- article -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <!-- post title -->
                            <h1 class="block-title">
                                <?php the_title(); ?>
                            </h1>
                            <!-- /post title -->

                            <!-- post details -->
                            <div class="social_info row">
				            <span class="date col-sm-2">
                                <span class="hours"><?php the_time('g:i'); ?></span>
                                <span class="MST"><?php the_time('m/d/Y'); ?></span>
						    </span>
                                <ul class="list col-sm-8 text-right">
                                    <li>
                                        <a href="javascript:void(0);" class="btnFbShare">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/img/ico_fb_post_detail.png"
                                                alt="Trung tâm tiếng nhật núi trúc trên facebook">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/share?url={<?php the_permalink(); ?>}"
                                           onclick="window.open(this.href,
'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/img/ico_gg_post_detail.png"
                                                alt="Share on Google+">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:nguyenanhson1987@gmail.com?Subject=Trung tâm tiếng nhật Núi Trúc có thể giúp gì được cho bạn !">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/img/ico_date_emal_detail.png"
                                                alt="Liên hệ với trung tâm tiếng nhật núi trúc qua email">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/img/ico_print_post_detail.png"
                                                alt="print post">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /post details -->
                            <div class="desc">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php the_content(); // Dynamic Content ?>

                        </article>
                        <!-- /article -->
                    <?php endwhile; ?>

                    <?php else: ?>

                        <!-- article -->
                        <article>

                            <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

                        </article>
                        <!-- /article -->

                    <?php endif; ?>

                </section>
                <!-- /section -->
                <?php
                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    $tag_ids = array();
                    foreach ($tags as $item) $tag_ids[] = $item->term_id;
                    $args = array(
                        'tag__in' => $tag_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => 10
                    );
                    $postsByTag = new WP_Query($args);
                }
                ?>
                <!-- /relatedposts -->
                <div class="relatedposts">
                    <h3 class="block-title">TIN LIÊN QUAN</h3>
                    <ul class="items">
                        <?php
                        while ($postsByTag->have_posts()) : $postsByTag->the_post();

                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_title(); ?> <span class="datetime">(<?php the_time('d/m/Y g:i'); ?>
                                        )</span>
                                </a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
            <!--/end content left-->
            <div class="col-sm-3">
                <?php get_sidebar(); ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

<?php get_footer(); ?>