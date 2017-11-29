/* ---------------------------------------------
* Filename:     custom.js
* Version:      1.0.0 (2016-06-19)
* Website:      http://www.zymphonies.com
* Description:  Global Script
* Author:       Zymphonies Team
                info@zymphonies.com
-----------------------------------------------*/

jQuery(document).ready(function($){

	//Main menu
	$('#main-menu').smartmenus();

	//Mobile menu toggle
	$('.navbar-toggle').click(function(){
		$('.region-primary-menu').slideToggle();
	});

	//Mobile dropdown menu
	if ( $(window).width() < 767) {
		$(".region-primary-menu li a:not(.has-submenu)").click(function () {
			$('.region-primary-menu').hide();
	    });
	}

	$('.region-primary-menu ul').hover(function() {
		$('#main-menu ul').css('background', '#15bd33');
	});

	//Mobile menu
	$('.navbar-toggle').click(function(){
	  $(this).toggleClass('openMenu');
	});


});
