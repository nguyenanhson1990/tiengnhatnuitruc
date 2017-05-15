<?php
/* Template Name: Index Template */
get_header();
?>
<div class="main">
    <div id="mainvisual">
        <?php echo do_shortcode("[crellyslider alias=home-page-slider]"); ?>
    </div>
    <div class="content">
        <!-- main title -->
        <div class="blockBigTitle">
            <h2>Các khóa học đang tuyển sinh</h2>

            <p>Hãy chọn 1 khóa học, bạn chắc chắn sẽ hài lòng</p>
        </div>
        <!-- .main title -->

        <!-- course menu -->
        <div id="course_menu">
            <?php wp_nav_menu(array('theme_location' => 'course-menu', 'container_class' => 'course_menu_class')); ?>
        </div>
        <!-- .course menu -->

        <!-- Begining japanese -->
        <div id="course_list">
            <?php
            $args = [
                'orderby' => 'DESC',
                'post_type' => 'post',
                'category_name' => $slug,
                'post_status' => 'publish'
            ];
            $results = new WP_Query($args);
            $html = '';
            if ($results->have_posts()):
                while ($results->have_posts()) : $results->the_post();
            ?>
                    <article>
                        <div class="thumbnail">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('medium');
                                }
                            ?>
                        </div>
                        <h3 class="post_title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <figure><?php the_excerpt(); ?></figure>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'Sorry, no posts matched your criteria.';
            endif;
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>
