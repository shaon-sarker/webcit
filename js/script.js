$(function () {
	"use strict";

	//scrollspy menu
	$('body').scrollspy({
		target: '.custom_nav',
		offset: 81
	});

	var htmlBody = $('html, body');

	// this is for back to top
	var bc2top = $('.bc2top');
	bc2top.on('click', function () {
		htmlBody.animate({
			scrollTop: 0
		}, 500);
	});


	var windo = $(window),
		wWidth = windo.width();
	//nave top js
	var navNavbar = $('nav.navbar');
	var navOffset = navNavbar.offset().top;
	var navright = $('.navbar-right');

	navNavbar.wrap('<div class="nav-wrapper"></div>');
	$('.nav-wrapper').height(navNavbar.outerHeight());

	windo.on('scroll', function () {

		var scrollPos = windo.scrollTop();

		if (scrollPos >= navOffset) {
			navNavbar.addClass('navbar-fixed-top');
			navright.css('margin-right', '0');
		} else {
			navNavbar.removeClass('navbar-fixed-top');
			navright.css('margin-right', '0px');
		}
		//back to top button js
		if (scrollPos > 150) {
			bc2top.fadeIn(1000);
		} else {
			bc2top.fadeOut(1000);
		}
	});

	//animation scroll js
	$('a[href*="#"]:not([href="#').on('click', function () {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				htmlBody.animate({
					scrollTop: target.offset().top - 70
				}, 1000);
				return false;
			}
		}
	});

	//Initialize filterizr with default options
	$('.filtr-container').filterizr();
	var simplefilter = $('.simplefilter li');
	simplefilter.on('click', function () {
		simplefilter.removeClass('active');
		$(this).addClass('active');
	});

	//light box js
	$(".fancybox").fancybox();


	//modal
	var videomodal = $(".video_modal iframe");
	$("#video_part").on('hidden.bs.modal', function (e) {
		videomodal.attr("src", videomodal.attr("src"));
	});

	//header slider js
	$('.slider_img').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		dots: true,
		autoplaySpeed: 5000,
		infinite: true,
		arrows: true,
		prevArrow: '.slidPrv',
		nextArrow: '.slidNext',
		speed: 1000,
		fade: true,
		cssEase: 'linear'
	});

	// feedback part js
	$('.comments_mess').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		dots: false,
		autoplaySpeed: 3000,
		infinite: true,
		arrows: false
	});

	//blog part slider  js
	$('.blog_slid').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		dots: false,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '.blog-prv',
		nextArrow: '.blog-next',
		infinite: true,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 479,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		  ]
	});

	// team slider
	$('.member_info').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.team_slider'
	});
	$('.team_slider').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.member_info',
		dots: false,
		autoplay: true,
		centerPadding: 0,
		arrows: true,
		prevArrow: '.tem-pev',
		nextArrow: '.tem-nex',
		centerMode: true,
		focusOnSelect: true,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 479,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}
		  ]
	});

	// client part js
	$('.client_ligo').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		dots: false,
		autoplaySpeed: 3000,
		infinite: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 479,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
		  ]
	});

	// price table js part js
	if (wWidth < 1200) {
		$('.proce_table_slider').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: true,
			dots: false,
			autoplaySpeed: 3000,
			infinite: true,
			arrows: true,
			prevArrow: '.price-prv',
			nextArrow: '.price-next',
			responsive: [
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 479,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			  ]
		});
	}

	// makes sure the whole site is loaded
	windo.on('load', function () {
		$("#status").delay(1000).fadeOut();
		$("#preloader").delay(1000).fadeOut("slow");
	});

	//progress-bar tooltip
	$('[data-toggle="tooltip"]').tooltip({
		trigger: 'manual'
	}).tooltip('show');

	var waypoints = $('.progress-bar').waypoint(function (direction) {
		$(".progress-bar").each(function () {
			var each_bar_width = $(this).attr('aria-valuenow');
			$(this).width(each_bar_width + '%');
		});
	}, {
		offset: '80%'
	});

	// counter js
	$('.number-count').counterUp({
		time: 3000
	});


	//google map
	var googleMapSelector = $('#map'),
		myCenter = new google.maps.LatLng(23.741380, 90.382538);

	function initialize() {
		var mapProp = {
			center: myCenter,
			zoom: 17,
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map"), mapProp);
		var marker = new google.maps.Marker({
			position: myCenter,
			animation: google.maps.Animation.BOUNCE,
			icon: 'images/map_icon.png'
		});
		marker.setMap(map);
	}
	if (googleMapSelector.length) {
		google.maps.event.addDomListener(window, 'load', initialize);
	}


	//video bg
	var options = {
		videoId: 'avP5d16wEp0',
		start: 5
	};
	$('#index_video').tubular(options);

}(jQuery));