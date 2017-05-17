<?php
/* Template Name: Index Template */
get_header();
?>
<div class="container-fluid">
    <div class="row" id="mainvisual">
        <div class="col-sm-9">
            <?php echo do_shortcode("[crellyslider alias=home-page-slider]"); ?>
        </div>
        <div class="col-sm-3 nt-oshirase">
            <ul>
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
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 13, '...' ); ?>
                                <img title="<?php echo get_the_title() ?>" src="<?php echo get_template_directory_uri().'/images/new.gif' ?>">
                            </a>
                        </li>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'Hiện tại không có khóa học nào';
                endif;
                ?>
            </ul>
        </div>
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

        <!-- course list -->
        <div class="row" id="course_list">
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
                    <article class="col-sm-3">
                        <div class="thumbnail">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('newlarge-385x209');
                                }
                            ?>
                        </div>
                        <h3 class="post_title">
                            <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                        <figure><?php echo get_the_excerpt(); ?></figure>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'Hiện tại không có khóa học nào';
            endif;
            ?>
        </div>
        <!-- .course list -->
        <div class="row">
            <!-- main title -->
            <div class="blockBigTitle">
                <h2>Thông tin hữu ích</h2>
            </div>
            <!-- .main title -->
            <div class="col-sm-4 box">
                <div class="content">
                    <h2 class="block-title">Kinh nghiệm học tiếng nhật</h2>
                    <div class="list container-fluid">
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
                        <div class="row item">
                            <div class="col-sm-3">
                                <?php if(has_post_thumbnail()){
                                    the_post_thumbnail('nanosmall');
                                }else{ ?>
                                    <img title="<?php echo get_the_title() ?>" src="<?php echo get_template_directory_uri().'/images/no-thumb_80x80.png' ?>">
                                    <?php } ?>
                            </div>
                            <div class="col-sm-9">
                                <h5><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(),15,'...') ?></a> </h5>
                            </div>
                        </div>
                        <?php
                            endwhile;
                                wp_reset_postdata();
                            else :
                                echo 'Hiện tại không có khóa học nào';
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 box">
                <div class="content">
                    <h2 class="block-title">Thư viện hỗ trợ</h2>
                    <div class="list container-fluid">
                        <?php
                        $args = [
                            'orderby' => 'DESC',
                            'post_type' => 'post',
                            'category_name' => 'thu-vien-ho-tro',
                            'post_status' => 'publish',
                            'posts_per_page' => 4
                        ];
                        $results = new WP_Query($args);
                        $html = '';
                        if ($results->have_posts()):
                            while ($results->have_posts()) : $results->the_post();
                                ?>
                                <div class="row item">
                                    <div class="col-sm-3">
                                        <?php if(has_post_thumbnail()){
                                            the_post_thumbnail('nanosmall');
                                        }else{ ?>
                                            <img title="<?php echo get_the_title() ?>" src="<?php echo get_template_directory_uri().'/images/no-thumb_80x80.png' ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-9">
                                        <h5><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(),15,'...') ?></a> </h5>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo 'Hiện tại không có khóa học nào';
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 box">
                <div class="content">
                    <h2 class="block-title">Góc nhật bản</h2>
                    <div class="list container-fluid">
                        <?php
                        $args = [
                            'orderby' => 'DESC',
                            'post_type' => 'post',
                            'category_name' => 'thong-tin-nhat-ban',
                            'post_status' => 'publish',
                            'posts_per_page' => 4
                        ];
                        $results = new WP_Query($args);
                        $html = '';
                        if ($results->have_posts()):
                            while ($results->have_posts()) : $results->the_post();
                                ?>
                                <div class="row item">
                                    <div class="col-sm-3">
                                        <?php if(has_post_thumbnail()){
                                            the_post_thumbnail('nanosmall');
                                        }else{ ?>
                                            <img title="<?php echo get_the_title() ?>" src="<?php echo get_template_directory_uri().'/images/no-thumb_80x80.png' ?>">
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-9">
                                        <h5><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(),15,'...') ?></a> </h5>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo 'Hiện tại không có khóa học nào';
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
