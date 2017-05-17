<!--recentposts-->
<?php
$args = array(
    'numberposts' => 10,
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'post_date',
    'post_status' => 'publish',
    'suppress_filters' => true
);
$recentposts = get_posts($args);
?>
<div class="recentposts">
    <h2 class="block-title">TIN MỚI NHẤT</h2>
    <section class="newsList">
        <?php if (!empty($recentposts)) : ?>

            <?php
            foreach ($recentposts as $post): setup_postdata($post);
                ?>
                <article class="row item">
                    <figure class="col-sm-4">
                        <?php if (has_post_thumbnail()): ?>
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'nanosmall'); ?>
                        <?php else: ?>
                            <img class="attachment-post-thumbnail"
                                 src="<?php echo get_template_directory_uri(); ?>/images/no-thumb_80x80.png"
                                 alt="no image">
                        <?php endif; ?>
                    </figure>
                    <div class="col-sm-8">
                        <h4 class="post-title"><a href="<?php the_permalink(); ?>"
                                                  title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                    </div>
                </article>
            <?php endforeach; ?>

            <?php
        else:
            echo 'sorry, no post not found';
        endif;
        ?>
        <?php wp_reset_postdata(); ?>
    </section>
</div>
<!--recentposts-->
