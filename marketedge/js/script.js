jQuery(document).ready(function ($) {
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll >= 100) {
			$('body').addClass('scrolled');
		} else {
			$('body').removeClass('scrolled');
		}
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

	// Check if we need to show popup
	if ($('.scrollpop #pop_enable').length) {
		// Default scroll position
		var pop_expires = $('.scrollpop #pop_expires').val(),
			pop_delay = $('.scrollpop #pop_delay').val(),
			CurrentScroll = 0,
			triggered = false;
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
});
