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
            <?php wp_nav_menu( array( 'theme_location' => 'course-menu','container_class' => 'course_menu_class' ) ); ?>
        </div>
        <!-- .course menu -->

        <!-- Begining japanese -->
        <div class="tab_content tab_current" id="tiengnhatsocap">
            <p>tab 1</p>
        </div>
        <!-- Begining quick japanese -->
        <div class="tab_content" id="tiengnhatcaptoc">
            <p>tab 2</p>
        </div>
        <!-- Medium japanese -->
        <div class="tab_content" id="tiengnhatrungcap">
            <p>tab 3</p>
        </div>
        <!-- JLPT japanese -->
        <div class="tab_content" id="luyenthijlpt">
            <p>tab 4</p>
        </div>
        <!-- Comunicate course japanese -->
        <div class="tab_content" id="tiengnhatgiaotiep">
            <p>tab 5</p>
        </div>
        <!-- Kids japanese course -->
        <div class="tab_content" id="tiengnhatchotreem">
            <p>tab 6</p>
        </div>
    </div>
</div>
<?php
get_footer();
?>
