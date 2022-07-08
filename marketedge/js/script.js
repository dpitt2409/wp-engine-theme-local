jQuery(document).ready(function ($) {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll >= 100) {
			$('body').addClass('scrolled');
		} else {
			$('body').removeClass('scrolled');
		}
	});

	var customers_slider = $('.customers-slider');
	if (customers_slider.length) {
		customers_slider.slick({
			infinite: true,
			slidesToShow: 3,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 3000,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
					},
				},
				{
					breakpoint: 800,
					settings: {
						infinite: true,
						slidesToShow: 2,
					},
				},
				{
					breakpoint: 700,
					arrows: false,
					settings: 'unslick',
				},
			],
		});
	}
	$(window).on('resize orientationchange', function () {
		var $customers_slider = $('.customers-slider');
		if (customers_slider.length) {
			if (!$customers_slider.hasClass('slick-initialized')) {
				$customers_slider.slick({
					infinite: true,
					centerMode: true,
					centerPadding: '10%',
					slidesToShow: 4,
					arrows: true,
					autoplay: true,
					autoplaySpeed: 3000,
					responsive: [
						{
							breakpoint: 1200,
							settings: {
								centerPadding: '10%',
								slidesToShow: 3,
							},
						},
						{
							breakpoint: 800,
							settings: {
								infinite: true,
								centerMode: true,
								centerPadding: '15%',
								slidesToShow: 2,
							},
						},
						{
							breakpoint: 700,
							arrows: false,
							settings: 'unslick',
						},
					],
				});
			}
		}
	});

	// Expand mobile sub menus
	$('li.menu-item-has-children').on('click', function (event) {
		$(this).toggleClass('active');
	});

	// Add smooth scrolling to all links
	$('a').on('click', function (event) {
		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== '') {
			// Store hash
			var hash = this.hash;
			$('html, body').animate(
				{
					scrollTop: $(hash).offset().top,
				},
				1500
			);
			return false;
		}
	});

	// If we need to show a popup
	function createCookie(name, value, hours) {
		var date = new Date();
		date.setTime(date.getTime() + hours * 60 * 60 * 1000);
		var expires = '; expires=' + date.toGMTString();
		document.cookie = name + '=' + value + expires + '; path=/';
	}
	function getCookie(name) {
		var cookieArr = document.cookie.split(';');
		for (var i = 0; i < cookieArr.length; i++) {
			var cookiePair = cookieArr[i].split('=');
			if (name == cookiePair[0].trim()) {
				return decodeURIComponent(cookiePair[1]);
			}
		}
		return null;
	}

	// Check if we need to show popup
	if ($('.scrollpop').length) {
		// Default scroll position
		var pop_expires = $('.scrollpop #pop_expires').val(),
			pop_delay = $('.scrollpop #pop_delay').val(),
			CurrentScroll = 0,
			triggered = false;

		// Check if user has cookie
		var marketedge_ps = getCookie('marketedge_ps');
		if (marketedge_ps != 'true') {
			$(window).scroll(function () {
				// Check if we already triggered
				if (triggered === false) {
					// Get current scroll
					var NextScroll = $(this).scrollTop();

					// If scroll less than previous we went up
					if (NextScroll < CurrentScroll) {
						triggered = true;
						setTimeout(() => {
							$.magnificPopup.open({
								items: {
									src: '#mag',
								},
								type: 'inline',
								callbacks: {
									close: function () {
										// Set cookie
										// name, value, hours
										createCookie('marketedge_ps', 'true', pop_expires);
									},
								},
							});
						}, pop_delay);
					}

					//Update current scroll position
					CurrentScroll = NextScroll;
				}
			});
		}
	}
});
