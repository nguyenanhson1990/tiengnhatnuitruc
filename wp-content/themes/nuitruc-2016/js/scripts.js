$(document).ready(function() {

    // DOM ready, take it away
    $('.menu li').each(function(index,element){

        if($(this).hasClass('active') ){
            $(this).find('.lineHover').show();
        }else{
            $(this).hover(function(){
                $(this).find('.lineHover').show();
            },function(){
                $(this).find('.lineHover').hide();
            });
        }
    });

    $('.navbar-toggle').on('click',function(){
        $('.navTop .menu').slideToggle('500');
    });

    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    // facebook share
    $('.btnFbShare').on('click',function(){
        FB.ui({
            method: 'stream.share'
        });
        return false;
    });

    //home content tab
    $('#course_menu .menu').find('li').first().addClass('menu_active');
    $('#course_menu .menu').find('a[href*=#]').on('click', function(e){
        e.preventDefault();

        var tab_id = $(this).attr('href');
        $('#course_menu .menu').find('li').removeClass('menu_active');
        $('.tab_content').removeClass('tab_current');
        $('div' + tab_id).addClass('tab_current');
        $(this).parent().addClass('menu_active');

    });

});
