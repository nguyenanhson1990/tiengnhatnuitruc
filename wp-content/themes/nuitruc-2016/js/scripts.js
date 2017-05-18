(function ($, root, undefined) {

	$(function () {

		'use strict';

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
	    };
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

		//right menu
		var rightNav = $('#right-nav');

		if(rightNav.length > 0){

			var rightNavHeight = rightNav.height(),
			rightTop = rightNav.offset().top;

			$(window).scroll(function() { //when scroll
				var st = $(window).scrollTop();

				if ((rightTop + st + rightNavHeight) < $('#module-wrap').offset().top ) {
					rightNav.stop().animate({'top': rightTop + st}, "slow");
				}
			});
		}

	});

})(jQuery, this);
