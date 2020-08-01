(function ($) {
	'use strict';
	/*-----------------------------
		Uren's Window When Loading
---------------------------------*/
	$(window).on('load', function () {
		var wind = $(window);
		/* ----------------------------------------------------------------
			[ Preloader ]
-----------------------------------------------------------------*/

		$('.loading').fadeOut(500);
	});
	/*----------------------------------------*/
	/* Uren's Newsletter Popup
/*----------------------------------------*/
	setTimeout(function () {
		$('.popup_wrapper').css({
			opacity: '1',
			visibility: 'visible'
		});
		$('.popup_off').on('click', function () {
			$('.popup_wrapper').fadeOut(500);
		});
	}, 5000);
	/*----------------------------------------*/
	/*  Uren's Sticky Menu Activation
/*----------------------------------------*/
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 300) {
			$('.header-sticky').addClass('sticky');
		} else {
			$('.header-sticky').removeClass('sticky');
		}
	});
	/*----------------------------------------*/
	/*  Uren's Main Slider
/*----------------------------------------*/
	$('.main-slider').slick({
		infinite: true,
		arrows: true,
		autoplay: true,
		fade: true,
		dots: true,
		autoplaySpeed: 7000,
		speed: 1000,
		adaptiveHeight: true,
		easing: 'ease-in-out',
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="ion-ios-arrow-back"></i></button>',
		nextArrow: '<button class="slick-next"><i class="ion-ios-arrow-forward"></i></button>'
	});

	/*----------------------------------------*/
	/*  Toolbar Button
/*----------------------------------------*/
	$('.toolbar-btn').on('click', function (e) {
		e.preventDefault();
		e.stopPropagation();
		var $this = $(this);
		var target = $this.attr('href');
		var prevTarget = $this.parent().siblings().children('.toolbar-btn').attr('href');
		$(target).toggleClass('open');
		$(prevTarget).removeClass('open');
	});

	/**********************
	 *Close Button Actions
	 ***********************/

	$('.btn-close').on('click', function (e) {
		e.preventDefault();
		var $this = $(this);
		$this.parents('.open').removeClass('open');
	});
	/*----------------------------------------*/
	/*  Uren's Offcanvas
/*----------------------------------------*/
	/*Variables*/
	var $offcanvasNav = $('.offcanvas-menu, .offcanvas-minicart_menu, .offcanvas-search_menu, .mobile-menu'),
		$offcanvasNavWrap = $(
			'.offcanvas-menu_wrapper, .offcanvas-minicart_wrapper, .offcanvas-search_wrapper, .mobile-menu_wrapper'
		),
		$offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu'),
		$menuToggle = $('.menu-btn'),
		$menuClose = $('.btn-close');

	/*Add Toggle Button With Off Canvas Sub Menu*/
	$offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="ion-chevron-right"></i></span>');

	/*Close Off Canvas Sub Menu*/
	$offcanvasNavSubMenu.slideUp();

	/*Category Sub Menu Toggle*/
	$offcanvasNav.on('click', 'li a, li .menu-expand', function (e) {
		var $this = $(this);
		if (
			$this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/) &&
			($this.attr('href') === '#' || $this.hasClass('menu-expand'))
		) {
			e.preventDefault();
			if ($this.siblings('ul:visible').length) {
				$this.siblings('ul').slideUp('slow');
			} else {
				$this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
				$this.siblings('ul').slideDown('slow');
			}
		}
		if ($this.is('a') || $this.is('span') || $this.attr('class').match(/\b(menu-expand)\b/)) {
			$this.parent().toggleClass('menu-open');
		} else if ($this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/)) {
			$this.toggleClass('menu-open');
		}
	});

	/*----------------------------------------*/
	/*  Category Menu
/*----------------------------------------*/
	$('.rx-parent').on('click', function () {
		$('.rx-child').slideToggle();
		$(this).toggleClass('rx-change');
	});
	//    category heading
	$('.category-heading').on('click', function () {
		$('.category-menu-list').slideToggle(900);
	});
	/*-- Category Menu Toggles --*/
	function categorySubMenuToggle() {
		var screenSize = $(window).width();
		if (screenSize <= 991) {
			$('#cate-toggle .right-menu > a').prepend('<i class="expand menu-expand"></i>');
			$('.category-menu .right-menu ul').slideUp();
		} else {
			$('.category-menu .right-menu > a i').remove();
			$('.category-menu .right-menu ul').slideDown();
		}
	}
	categorySubMenuToggle();
	$(window).resize(categorySubMenuToggle);
	/*-- Category Sub Menu --*/
	function categoryMenuHide() {
		var screenSize = $(window).width();
		if (screenSize <= 991) {
			$('.category-menu-list').hide();
		} else {
			$('.category-menu-list').show();
		}
	}
	categoryMenuHide();
	// $(window).resize(categoryMenuHide);
	$('.category-menu-hidden').find('.category-menu-list').hide();
	$('.category-menu-list').on('click', 'li a, li a .menu-expand', function (e) {
		var $a = $(this).hasClass('menu-expand') ? $(this).parent() : $(this);
		$(this).toggleClass('active');
		if ($a.parent().hasClass('right-menu')) {
			if ($a.attr('href') === '#' || $(this).hasClass('menu-expand')) {
				if ($a.siblings('ul:visible').length > 0) $a.siblings('ul').slideUp();
				else {
					$(this).parents('li').siblings('li').find('ul:visible').slideUp();
					$a.siblings('ul').slideDown();
				}
			}
		}
		if ($(this).hasClass('menu-expand') || $a.attr('href') === '#') {
			e.preventDefault();
			return false;
		}
	});

	/*----------------------------------------*/
	/*  Nice Select
/*----------------------------------------*/
	$(document).ready(function () {
		$('.nice-select').niceSelect();
	});
	/*----------------------------------------*/
	/* Uren's Countdown
/*----------------------------------------*/
	// Check if element exists
	$.fn.elExists = function () {
		return this.length > 0;
	};

	function makeTimer($endDate, $this, $format) {

		var today = new Date();

		var BigDay = new Date($endDate),
			msPerDay = 24 * 60 * 60 * 1000,
			timeLeft = (BigDay.getTime() - today.getTime()),
			e_daysLeft = timeLeft / msPerDay,
			daysLeft = Math.floor(e_daysLeft),
			e_hrsLeft = (e_daysLeft - daysLeft) * 24,
			hrsLeft = Math.floor(e_hrsLeft),
			e_minsLeft = (e_hrsLeft - hrsLeft) * 60,
			minsLeft = Math.floor((e_hrsLeft - hrsLeft) * 60),
			e_secsLeft = (e_minsLeft - minsLeft) * 60,
			secsLeft = Math.floor((e_minsLeft - minsLeft) * 60);

		var yearsLeft = 0;
		var monthsLeft = 0
		var weeksLeft = 0;

		if ($format != 'short') {
			if (daysLeft > 365) {
				yearsLeft = Math.floor(daysLeft / 365);
				daysLeft = daysLeft % 365;
			}

			if (daysLeft > 30) {
				monthsLeft = Math.floor(daysLeft / 30);
				daysLeft = daysLeft % 30;
			}
			if (daysLeft > 7) {
				weeksLeft = Math.floor(daysLeft / 7);
				daysLeft = daysLeft % 7;
			}
		}

		var yearsLeft = yearsLeft < 10 ? "0" + yearsLeft : yearsLeft,
			monthsLeft = monthsLeft < 10 ? "0" + monthsLeft : monthsLeft,
			weeksLeft = weeksLeft < 10 ? "0" + weeksLeft : weeksLeft,
			daysLeft = daysLeft < 10 ? "0" + daysLeft : daysLeft,
			hrsLeft = hrsLeft < 10 ? "0" + hrsLeft : hrsLeft,
			minsLeft = minsLeft < 10 ? "0" + minsLeft : minsLeft,
			secsLeft = secsLeft < 10 ? "0" + secsLeft : secsLeft,
			yearsText = yearsLeft > 1 ? 'years' : 'year',
			monthsText = monthsLeft > 1 ? 'months' : 'month',
			weeksText = weeksLeft > 1 ? 'weeks' : 'week',
			daysText = daysLeft > 1 ? 'days' : 'day',
			hourText = hrsLeft > 1 ? 'hrs' : 'hr',
			minsText = minsLeft > 1 ? 'mins' : 'min',
			secText = secsLeft > 1 ? 'secs' : 'sec';

		var $markup = {
			wrapper: $this.find('.countdown__item'),
			year: $this.find('.yearsLeft'),
			month: $this.find('.monthsLeft'),
			week: $this.find('.weeksLeft'),
			day: $this.find('.daysLeft'),
			hour: $this.find('.hoursLeft'),
			minute: $this.find('.minsLeft'),
			second: $this.find('.secsLeft'),
			yearTxt: $this.find('.yearsText'),
			monthTxt: $this.find('.monthsText'),
			weekTxt: $this.find('.weeksText'),
			dayTxt: $this.find('.daysText'),
			hourTxt: $this.find('.hoursText'),
			minTxt: $this.find('.minsText'),
			secTxt: $this.find('.secsText')
		}

		var elNumber = $markup.wrapper.length;
		$this.addClass('item-' + elNumber);
		$($markup.year).html(yearsLeft);
		$($markup.yearTxt).html(yearsText);
		$($markup.month).html(monthsLeft);
		$($markup.monthTxt).html(monthsText);
		$($markup.week).html(weeksLeft);
		$($markup.weekTxt).html(weeksText);
		$($markup.day).html(daysLeft);
		$($markup.dayTxt).html(daysText);
		$($markup.hour).html(hrsLeft);
		$($markup.hourTxt).html(hourText);
		$($markup.minute).html(minsLeft);
		$($markup.minTxt).html(minsText);
		$($markup.second).html(secsLeft);
		$($markup.secTxt).html(secText);
	}

	if ($('.countdown').elExists) {
		$('.countdown').each(function () {
			var $this = $(this);
			var $endDate = $(this).data('countdown');
			var $format = $(this).data('format');
			setInterval(function () {
				makeTimer($endDate, $this, $format);
			}, 0);
		});
	}

	/*----------------------------------------*/
	/*  Uren's Scroll To Top
/*----------------------------------------*/
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-double-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900
	});

	/*----------------------------------------*/
	/*  Cart Plus Minus Button
/*----------------------------------------*/
	$('.cart-plus-minus').append(
		'<div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>'
	);
	$('.qtybutton').on('click', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 1) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 1;
			}
		}
		$button.parent().find('input').val(newVal);
	});

	/*----------------------------------------*/
	/* Toggle Function Active
/*----------------------------------------*/
	// showlogin toggle
	$('#showlogin').on('click', function () {
		$('#checkout-login').slideToggle(900);
	});
	// showlogin toggle
	$('#showcoupon').on('click', function () {
		$('#checkout_coupon').slideToggle(900);
	});
	// showlogin toggle
	$('#cbox').on('click', function () {
		$('#cbox-info').slideToggle(900);
	});

	// showlogin toggle
	$('#ship-box').on('click', function () {
		$('#ship-box-info').slideToggle(1000);
	});

	/*----------------------------------------*/
	/* FAQ Accordion
/*----------------------------------------*/
	$('.card-header a').on('click', function () {
		$('.card').removeClass('actives');
		$(this).parents('.card').addClass('actives');
	});

	/*---------------------------------------------*/
	/*  Uren'sCounterUp
/*----------------------------------------------*/
	$('.count').counterUp({
		delay: 10,
		time: 1000
	});

	/*----------------------------------------*/
	/*  Uren's Product View Mode
/*----------------------------------------*/
	function porductViewMode() {
		$(window).on({
			load: function () {
				var activeChild = $('.product-view-mode a.active');
				var firstChild = $('.product-view-mode').children().first();
				var window_width = $(window).width();

				if (window_width < 768) {
					$('.product-view-mode a').removeClass('active');
					$('.product-view-mode').children().first().addClass('active');
					$('.shop-product-wrap').removeClass('gridview-3 gridview-4 gridview-5').addClass('gridview-2');
				}
			},
			resize: function () {
				var ww = $(window).width();
				var activeChild = $('.product-view-mode a.active');
				var firstChild = $('.product-view-mode').children().first();
				var defaultView = $('.product-view-mode').data('default');

				if (ww < 1200 && ww > 575) {
					if (activeChild.hasClass('grid-5')) {
						$('.product-view-mode a.grid-5').removeClass('active');
						if (defaultView == 4) {
							$('.product-view-mode a.grid-4').addClass('active');
							$('.shop-product-wrap')
								.removeClass('gridview-2 gridview-3 gridview-5')
								.addClass('gridview-4');
						} else if (defaultView == 'list') {
							$('.product-view-mode a.list').addClass('active');
							$('.shop-product-wrap')
								.removeClass('gridview-2 gridview-3 gridview-4 gridview-5')
								.addClass('listview');
						} else {
							$('.product-view-mode a.grid-3').addClass('active');
							$('.shop-product-wrap')
								.removeClass('gridview-2 gridview-4 gridview-5')
								.addClass('gridview-3');
						}
					}
				}

				if (ww < 768 && ww > 575) {
					if (activeChild.hasClass('grid-4')) {
						$('.product-view-mode a.grid-4').removeClass('active');
						if (defaultView == 'list') {
							$('.product-view-mode a.list').addClass('active');
							$('.shop-product-wrap')
								.removeClass('gridview-2 gridview-3 gridview-4 gridview-5')
								.addClass('listview');
						} else {
							$('.product-view-mode a.grid-3').addClass('active');
							$('.shop-product-wrap')
								.removeClass('gridview-2 gridview-4 gridview-5')
								.addClass('gridview-3');
						}
					}
				}
				if (activeChild.hasClass('list')) {} else {
					if (ww < 576) {
						$('.product-view-mode a').removeClass('active');
						$('.product-view-mode').children().first().addClass('active');
						$('.shop-product-wrap').removeClass('gridview-3 gridview-4 gridview-5').addClass('gridview-2');
					} else {
						if (activeChild.hasClass('grid-2')) {
							if (ww < 1200) {
								$('.product-view-mode a:not(:first-child)').removeClass('active');
							} else {
								$('.product-view-mode a').removeClass('active');
								$('.product-view-mode a:nth-child(2)').addClass('active');
								$('.shop-product-wrap')
									.removeClass('gridview-2 gridview-4 gridview-5')
									.addClass('gridview-3');
							}
						}
					}
				}
			}
		});
		$('.product-view-mode a').on('click', function (e) {
			e.preventDefault();

			var shopProductWrap = $('.shop-product-wrap');
			var viewMode = $(this).data('target');

			$('.product-view-mode a').removeClass('active');
			$(this).addClass('active');
			if (viewMode == 'listview') {
				shopProductWrap.removeClass('grid');
			} else {
				if (shopProductWrap.not('.grid')) shopProductWrap.addClass('grid');
			}
			shopProductWrap.removeClass('gridview-2 gridview-3 gridview-4 gridview-5 listview').addClass(viewMode);
		});
	}
	porductViewMode();

	/*----------------------------------------*/
	/*  Star Rating Js
/*----------------------------------------*/
	$(function () {
		$('.star-rating').barrating({
			theme: 'fontawesome-stars'
		});
	});

	/*-------------------------------------------------*/
	/* Uren's Sticky Sidebar
/*-------------------------------------------------*/
	$('#sticky-sidebar').theiaStickySidebar({
		// Settings
		additionalMarginTop: 80
	});

	/*-------------------------------------------------*/
	/* Uren's Bootstraps 4 Tooltip
/*-------------------------------------------------*/
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});
	/*--------------------------------
    Price Slider Active
-------------------------------- */
	var sliderrange = $('#slider-range');
	var amountprice = $('#amount');
	$(function () {
		sliderrange.slider({
			range: true,
			min: 80,
			max: 1900,
			values: [0, 2000],
			slide: function (event, ui) {
				amountprice.val('$' + ui.values[0] + ' - $' + ui.values[1]);
			}
		});
		amountprice.val('$' + sliderrange.slider('values', 0) + ' - $' + sliderrange.slider('values', 1));
	});
	/*----------------------------------------*/
	/*  Uren's Slick Carousel
 /*----------------------------------------*/
	var $html = $('html');
	var $body = $('body');
	var $elementCarousel = $('.uren-slick-slider');
	// Check if element exists
	$.fn.elExists = function () {
		return this.length > 0;
	};

	/*For RTL*/
	if ($html.attr('dir') == 'rtl' || $body.attr('dir') == 'rtl') {
		$elementCarousel.attr('dir', 'rtl');
	}

	if ($elementCarousel.elExists()) {
		var slickInstances = [];

		/*For RTL*/
		if ($html.attr('dir') == 'rtl' || $body.attr('dir') == 'rtl') {
			$elementCarousel.attr('dir', 'rtl');
		}

		$elementCarousel.each(function (index, element) {
			var $this = $(this);

			// Carousel Options

			var $options = typeof $this.data('slick-options') !== 'undefined' ? $this.data('slick-options') : '';

			var $spaceBetween = $options.spaceBetween ? parseInt($options.spaceBetween, 10) : 0,
				$spaceBetween_xl = $options.spaceBetween_xl ? parseInt($options.spaceBetween_xl, 10) : 0,
				$rowSpace = $options.rowSpace ? parseInt($options.rowSpace, 10) : 0,
				$rows = $options.rows ? $options.rows : false,
				$vertical = $options.vertical ? $options.vertical : false,
				$focusOnSelect = $options.focusOnSelect ? $options.focusOnSelect : false,
				$asNavFor = $options.asNavFor ? $options.asNavFor : '',
				$fade = $options.fade ? $options.fade : false,
				$autoplay = $options.autoplay ? $options.autoplay : false,
				$autoplaySpeed = $options.autoplaySpeed ? parseInt($options.autoplaySpeed, 10) : 5000,
				$swipe = $options.swipe ? $options.swipe : true,
				$swipeToSlide = $options.swipeToSlide ? $options.swipeToSlide : true,
				$touchMove = $options.touchMove ? $options.touchMove : false,
				$verticalSwiping = $options.verticalSwiping ? $options.verticalSwiping : true,
				$draggable = $options.draggable ? $options.draggable : true,
				$arrows = $options.arrows ? $options.arrows : false,
				$dots = $options.dots ? $options.dots : false,
				$adaptiveHeight = $options.adaptiveHeight ? $options.adaptiveHeight : true,
				$infinite = $options.infinite ? $options.infinite : false,
				$centerMode = $options.centerMode ? $options.centerMode : false,
				$centerPadding = $options.centerPadding ? $options.centerPadding : '',
				$variableWidth = $options.variableWidth ? $options.variableWidth : false,
				$speed = $options.speed ? parseInt($options.speed, 10) : 500,
				$appendArrows = $options.appendArrows ? $options.appendArrows : $this,
				$prevArrow =
				$arrows === true ?
				$options.prevArrow ?
				'<span class="' +
				$options.prevArrow.buttonClass +
				'"><i class="' +
				$options.prevArrow.iconClass +
				'"></i></span>' :
				'<button class="tty-slick-text-btn tty-slick-text-prev"><i class="ion-ios-arrow-back"></i></span>' :
				'',
				$nextArrow =
				$arrows === true ?
				$options.nextArrow ?
				'<span class="' +
				$options.nextArrow.buttonClass +
				'"><i class="' +
				$options.nextArrow.iconClass +
				'"></i></span>' :
				'<button class="tty-slick-text-btn tty-slick-text-next"><i class="ion-ios-arrow-forward"></i></span>' :
				'',
				$rows = $options.rows ? parseInt($options.rows, 10) : 1,
				$rtl = $options.rtl || $html.attr('dir="rtl"') || $body.attr('dir="rtl"') ? true : false,
				$slidesToShow = $options.slidesToShow ? parseInt($options.slidesToShow, 10) : 1,
				$slidesToScroll = $options.slidesToScroll ? parseInt($options.slidesToScroll, 10) : 1;

			/*Responsive Variable, Array & Loops*/
			var $responsiveSetting =
				typeof $this.data('slick-responsive') !== 'undefined' ? $this.data('slick-responsive') : '',
				$responsiveSettingLength = $responsiveSetting.length,
				$responsiveArray = [];
			for (var i = 0; i < $responsiveSettingLength; i++) {
				$responsiveArray[i] = $responsiveSetting[i];
			}

			// Adding Class to instances
			$this.addClass('slick-carousel-' + index);
			$this.parent().find('.slick-dots').addClass('dots-' + index);
			$this.parent().find('.slick-btn').addClass('btn-' + index);

			if ($spaceBetween != 0) {
				$this.addClass('slick-gutter-' + $spaceBetween);
			}
			if ($spaceBetween_xl != 0) {
				$this.addClass('slick-gutter-xl-' + $spaceBetween_xl);
			}
			var $slideCount = null;
			$this.on('init', function (event, slick) {
				$this.find('.slick-active').first().addClass('first-active');
				$this.find('.slick-active').last().addClass('last-active');
				$slideCount = slick.slideCount;
				if ($slideCount <= $slidesToShow) {
					$this.children('.slick-dots').hide();
				}
				var $firstAnimatingElements = $('.slick-slide').find('[data-animation]');
				doAnimations($firstAnimatingElements);
			});

			$this.slick({
				slidesToShow: $slidesToShow,
				slidesToScroll: $slidesToScroll,
				asNavFor: $asNavFor,
				autoplay: $autoplay,
				autoplaySpeed: $autoplaySpeed,
				speed: $speed,
				infinite: $infinite,
				rows: $rows,
				arrows: $arrows,
				dots: $dots,
				adaptiveHeight: $adaptiveHeight,
				vertical: $vertical,
				focusOnSelect: $focusOnSelect,
				centerMode: $centerMode,
				centerPadding: $centerPadding,
				variableWidth: $variableWidth,
				swipe: $swipe,
				swipeToSlide: $swipeToSlide,
				touchMove: $touchMove,
				draggable: $draggable,
				fade: $fade,
				appendArrows: $appendArrows,
				prevArrow: $prevArrow,
				nextArrow: $nextArrow,
				rtl: $rtl,
				responsive: $responsiveArray
			});

			$this.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
				$this.find('.slick-active').first().removeClass('first-active');
				$this.find('.slick-active').last().removeClass('last-active');
				var $animatingElements = $('.slick-slide[data-slick-index="' + nextSlide + '"]').find(
					'[data-animation]'
				);
				doAnimations($animatingElements);
			});

			function doAnimations(elements) {
				var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
				elements.each(function () {
					var $el = $(this);
					var $animationDelay = $el.data('delay');
					var $animationDuration = $el.data('duration');
					var $animationType = 'animated ' + $el.data('animation');
					$el.css({
						'animation-delay': $animationDelay,
						'animation-duration': $animationDuration
					});
					$el.addClass($animationType).one(animationEndEvents, function () {
						$el.removeClass($animationType);
					});
				});
			}

			$this.on('afterChange', function (e, slick) {
				$this.find('.slick-active').first().addClass('first-active');
				$this.find('.slick-active').last().addClass('last-active');
			});

			// Updating the sliders in tab
			$('body').on('shown.bs.tab', 'a[data-toggle="tab"], a[data-toggle="pill"]', function (e) {
				$this.slick('setPosition');
			});
		});
	}
	/*----------------------------------------*/
	/*  Uren's Single Blog Slider
/*----------------------------------------*/
	$('.single-blog_slider').slick({
		infinite: true,
		arrows: true,
		dots: false,
		speed: 2000,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="ion-ios-arrow-back"></i></button>',
		nextArrow: '<button class="slick-next"><i class="ion-ios-arrow-forward"></i></button>',
		responsive: [{
				breakpoint: 1501,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	$('.single-blog_slider').on('wheel', function (e) {
		e.preventDefault();

		if (e.originalEvent.deltaY < 0) {
			$(this).slick('slickNext');
		} else {
			$(this).slick('slickPrev');
		}
	});
	/*----------------------------------------*/
	/*  Uren's Product Switch Color
 /*----------------------------------------*/

	$('.color-list a').on('click', function (e) {
		e.preventDefault();
		var $this = $(this);
		$this.addClass('active');
		$this.siblings().removeClass('active');
		var $navs = document.querySelectorAll('.slick-slider-nav .single-slide');
		var $details = document.querySelectorAll('.slick-img-slider .single-slide');
		var $btnColor = $this.data('swatch-color');
		for (var i = 0; i < $navs.length; i++) {
			var $navParent = getClosest($navs[i], '.slick-slide');
			$navParent.classList.remove('slick-current');
			if ($navs[i].classList.contains($btnColor)) {
				$navParent.classList.add('slick-current');
			}
		}
		for (var i = 0; i < $details.length; i++) {
			var $imgParent = getClosest($details[i], '.slick-slide');
			$imgParent.classList.remove('slick-current', 'slick-active', 'first-active', 'last-active');
			$imgParent.style.opacity = 0;
			if ($details[i].classList.contains($btnColor)) {
				$imgParent.classList.add('slick-current', 'slick-active', 'first-active', 'last-active');
				$imgParent.style.opacity = 1;
			}
		}
	});

	var getClosest = function (elem, selector) {

		// Element.matches() polyfill
		if (!Element.prototype.matches) {
			Element.prototype.matches =
				Element.prototype.matchesSelector ||
				Element.prototype.mozMatchesSelector ||
				Element.prototype.msMatchesSelector ||
				Element.prototype.oMatchesSelector ||
				Element.prototype.webkitMatchesSelector ||
				function (s) {
					var matches = (this.document || this.ownerDocument).querySelectorAll(s),
						i = matches.length;
					while (--i >= 0 && matches.item(i) !== this) {}
					return i > -1;
				};
		}

		for (; elem && elem !== document; elem = elem.parentNode) {
			if (elem.matches(selector)) return elem;
		}
		return null;
	};

	/*--------------------------
        jQuery Zoom
	---------------------------- */
	$('.zoom').zoom();
})(jQuery);
