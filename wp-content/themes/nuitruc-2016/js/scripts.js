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

        var data_slug = $(this).attr('href'),
            data_slug = data_slug.replace('#','');

        $('#course_menu .menu').find('li').removeClass('menu_active');
        $(this).parent().addClass('menu_active');

        jQuery.ajax({
            url : get_course.ajax_url,
            type : 'post',
            dataType: 'html',
            data : {
                action : 'get_course_do_ajax',
                data_slug : data_slug
            },
            success : function( response ) {
                $('#course_list').html('').append(response);
            },
            error: function(et){
                console.log(et);
            }
        });

    });

});

