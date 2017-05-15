<!doctype html>
<html lang="vi" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="_gCW_qk4qZ_v3aux0qmbRkc-mn_2mttl1cS1qVabNhs"/>
    <meta name="google-site-verification" content="4yr9QWg52zjQiAq7R1L5iRZ99Us7BNrHSKN5yYr5MJU"/>
    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

</head>
<body <?php body_class(); ?>>
<!-- facebook SDK-->
<div id="fb-root"></div>
<script>

    window.fbAsyncInit = function () {
        FB.init({
            appId: '1668284260122370',
            status: true,
            xfbml: true
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>
<!-- facebook SDK-->
<header>
    <div class="info col-2">
        <div class="content">
            <ul class="nuitrucInfo item">
                <li class="phoneNumber">(04) 38 460 341</li>
                <li class="email">
                    <a href="mailto:nguyenanhson1987@gmail.com?Subject=Xin chào, tiếng nhật núi trúc có thể giúp được gì cho bạn">trungtamtiengnhat@edu.vn</a>
                </li>
            </ul>
            <ul class="nuitrucConnect item">
                <li><a href="https://plus.google.com/u/0/+TrungT%C3%A2mTi%E1%BA%BFngNh%E1%BA%ADtN%C3%BAiTr%C3%BAc1102"
                       title="Trung tâm tiếng nhật núi trúc - google+ nơi chia sẻ kiến thức nhật ngữ"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/ico_gg.png" width="30" height="30"
                            alt=""></a></li>
                <li><a href="#"
                       title="Trung tâm tiếng nhật núi trúc - twitter nơi giao lưu chia sẻ video học tiếng nhật hay"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/ico_tw.png" width="30" height="30"
                            alt=""></a></li>
                <li>
                    <a href="https://www.facebook.com/Trung-t%C3%A2m-ti%E1%BA%BFng-Nh%E1%BA%ADt-N%C3%BAi-Tr%C3%BAc-139865119437986/"
                       title="Trung tâm tiếng nhật núi trúc - trung tâm tiếng nhật lớn nhất miền bắc"><img
                            src="<?php echo get_template_directory_uri(); ?>/images/ico_fb.png" width="30" height="30"
                            alt=""></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- nav -->
    <nav class="navTop nav" role="navigation">
        <div class="content">
            <h1 class="logo"><a href="http://trungtamtiengnhat.edu.vn/"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="132" height="142"></a>
            </h1>

            <div class="navbar-header">
                <button type="button" class="navbar-toggle mobile">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <?php nuitruc_nav(); ?>
        </div>
    </nav>
    <!-- /nav -->

</header>
<!-- /header -->
