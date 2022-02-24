jQuery(document).ready(function ($) {
	/**
	 * Load more resources
	 */
	$(document).on('click', '.resources .load-more', function (e) {
		e.preventDefault();

		//Get values for ajax query
		var maxpages = $(this).data('maxpages'),
			posts_per_page = $(this).data('ppp'),
			exclude = $(this).data('exclude'),
			button = $(this),
			data = {
				action: 'loadmore',
				page: marketedge_loadmore_params.current_page,
				posts_per_page: posts_per_page,
				exclude: exclude,
			};

		$.ajax({
			url: marketedge_loadmore_params.ajaxurl, // AJAX handler
			data: data,
			type: 'POST',
			beforeSend: function (xhr) {
				button.addClass('loading');
				button.text('Loading'); // change the button text, you can also add a preloader image
			},
			success: function (data) {
				if (data) {
					var items = $(data); // data is the HTML of loaded posts

					$('.resources .grid').append(items);

					marketedge_loadmore_params.current_page++;

					if (marketedge_loadmore_params.current_page == maxpages) {
						button.remove(); // if last page, remove the button
					}

					button.removeClass('loading');
					button.text('Load More');
				} else {
					button.remove(); // if no data, remove the button as well
				}
			},
		});
	});
});
