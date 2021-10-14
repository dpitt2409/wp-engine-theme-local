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
});
