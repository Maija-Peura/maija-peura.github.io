/**
 * Table of contents
 * -----------------------------------
 * 1.0 jQuery window load function
 * 1.1 Preloader
 * 1.2 MixItUp
 ==================
 * 2.0 Document ready function
 * 2.1 One Page Nav
 * 2.2 Responsive Mobile Menu
 * 2.3 Sticky Menu
 * 2.4 Single page nav highlighted
 * 2.5 HOME PAGE HEIGHT
 * 2.6 magnificPopup
 * 2.7 Wow Animation
 * 2.8 CounterUp
 * 2.9 Function for email address validation
 * 2.10 Contact form
 ==================
 *
 */


'use strict';

/* =================================
   1.0 jQuery window load function
=================================== */
$(window).on('load', function() {
	/******************** 1.1 Preloader ********************/
    $('#preloader').delay(350).fadeOut('slow');
	
	/******************** 1.2 MixItUp ********************/
    $('.portfolio').mixItUp({
        animation: {
            effects: 'fade translateZ(-100px)',
            duration: 1000,
        }
    });
});

/* =================================
   2.0 Document ready function
=================================== */
$(document).ready(function() {
	/******************** 2.1 One Page Nav ********************/
    $('a.smoothScroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 40)
        }, 1200, 'easeInOutExpo');
        event.preventDefault();
    });
	
	/******************** 2.2 Responsive Mobile Menu ********************/
    $('.responsive').on('click', function(e) {
        $('.nav-menu').slideToggle();
    });
	
    jQuery(window).resize(function() {
        var viewportWidth = jQuery(window).width();
        if (viewportWidth > 767) {
            jQuery('nav ul.nav-menu').show();
        };

    });

	/******************** 2.3 Sticky Menu ********************/
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    });

	/******************** 2.4 Single page nav highlighted ********************/
    var navChildren = $(".nav-menu li").children();
    var aArray = [];
    for (var i = 0; i < navChildren.length; i++) {
        var aChild = navChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    }
    $(window).scroll(function() {
        var windowPos = $(window).scrollTop();
        var windowHeight = $(window).height();
        var docHeight = $(document).height();
        for (var i = 0; i < aArray.length; i++) {
            var theID = aArray[i];
            var secPosition = $(theID).offset().top;
            secPosition = secPosition - 135;
            var divHeight = $(theID).height();
            divHeight = divHeight + 90;
            if (windowPos >= secPosition && windowPos < (secPosition + divHeight)) {
                $("a[href='" + theID + "']").parent().addClass("active");
            } else {
                $("a[href='" + theID + "']").parent().removeClass("active");
            }
        }
    });
	
	/******************** 2.5 HOME PAGE HEIGHT ********************/
    function Init() {
        $('.home').css({
            "height": $(window).height() + "px"
        });
    }
    Init();
    $(window).resize(Init);

    /******************** 2.6 magnificPopup ********************/
    $('.portfolio-lightbox').magnificPopup({
        type: 'image',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        fixedContentPos: false
            // other options
    });
	
	/******************** 2.7 Wow Animation ********************/
    var wow = new WOW({
        animateClass: 'animated',
        offset: 50,
        mobile: true
    });
    wow.init();

	
	/******************** 2.8 CounterUp ********************/
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
	
    /******************** 2.9 Function for email address validation ********************/
    function isValidEmail(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    };
	
    /******************** 2.10 Contact form ********************/
		$("#contact-form").on('submit', function(e) {
		e.preventDefault();
		var success = $(this).find('.email-success'),
			failed = $(this).find('.email-failed'),
			loader = $(this).find('.email-loading'),
			postUrl = $(this).attr('action');

		var data = {
			name: $(this).find('.contact-name').val(),
			email: $(this).find('.contact-email').val(),
			subject: $(this).find('.contact-subject').val(),
			message: $(this).find('.contact-message').val()
		};
		if (isValidEmail(data['email']) && (data['message'].length > 1) && (data['name'].length > 1)) {
			$.ajax({
				type: "POST",
				url: postUrl,
				data: data,
				beforeSend: function() {
					loader.fadeIn(1000);
				},
				success: function(data) {
					loader.fadeOut(1000);
					success.delay(500).fadeIn(1000);
					failed.fadeOut(500);
				},
				error: function(xhr) { // if error occured
					loader.fadeOut(1000);
					failed.delay(500).fadeIn(1000);
					success.fadeOut(500);
				},
				complete: function() {
					loader.fadeOut(1000);
				}
			});
		} else {
			loader.fadeOut(1000);
			failed.delay(500).fadeIn(1000);
			success.fadeOut(500);
		}
		return false;
		});
});
