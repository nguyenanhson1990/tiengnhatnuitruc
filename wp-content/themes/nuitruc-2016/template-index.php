<?php
/* Template Name: Index Template */
get_header();
?>
<div class="main">
    <div id="mainvisual">
        <div class="overlay">
            <ul class="nt-news-list">
                <?php
                    $args = [
                        'orderby' => 'DESC',
                        'post_type' => 'post',
                        'category_name' => 'thong-tin-trung-tam',
                        'post_status' => 'publish',
                        'posts_per_page' => 5
                    ];
                    $results = new WP_Query($args);
                    $html = '';
                    if ($results->have_posts()):
                    while ($results->have_posts()) : $results->the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3></li>
                <?php
                    endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'Hiện tại không có khóa học nào';
                    endif;
                ?>
            </ul>
        </div>
        <?php echo do_shortcode("[crellyslider alias=home-page-slider]"); ?>
    </div>
    <div class="warraper">
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
        <div class="block-area" id="course_list">
            <?php
            $args = [
                'orderby' => 'DESC',
                'post_type' => 'post',
                'category_name' => 'thong-tin-tuyen-sinh',
                'post_status' => 'publish',
                'posts_per_page' => 8
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
                                    the_post_thumbnail('newmedium-200x124');
                                }
                            ?>
                        </div>
                        <h3 class="post_title">
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 10, null ); ?></a></h3>
                        <figure><?php echo wp_trim_words(get_the_excerpt(),15,'...<a href="'.get_the_permalink().'"><span class="more"><i>Chi tiết</i></span></a>'); ?></figure>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'Hiện tại không có khóa học nào';
            endif;
            ?>
        </div>

        <!-- Bản tin trung tâm -->
        <div class="block-area" id="nt-news">
            <!-- main title -->
            <div class="blockBigTitle">
                <h2>Kinh nghiệm học tiếng nhật</h2>
                <p>Chia sẻ kinh nghiệm học tập tiếng nhật</p>
            </div>
            <?php
            $args = [
                'orderby' => 'DESC',
                'post_type' => 'post',
                'category_name' => 'kinh-nghiem-hoc-tieng-nhat',
                'post_status' => 'publish',
                'posts_per_page' => 4
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
                                the_post_thumbnail('newmedium-200x124');
                            }
                            ?>
                        </div>
                        <div class="excerpt">
                            <h3><a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>"> <?php echo get_the_title(); ?></a></h3>
                            <?php echo wp_trim_words(get_the_excerpt(),50,'..'); ?>
                        </div>
                    </article>
                    <div class="clearfix"></div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'Hiện tại không có dữ liệu';
            endif;
            ?>
            <!-- .main title -->
        </div>
    </div>
</div>
<?php
get_footer();
?>
