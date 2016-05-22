$(document).ready(function() {
	$('.mobile-menu').children().on('click', function() {
		$('nav').fadeIn();
	});

	$('.nav-close').on('click', function() {
		$('nav').fadeOut();
	});

	$(window).resize(function() {
		if ($(window).width() > 767) {
			$('nav').show();
		} else {
			$('nav').hide();
		}
	});

	$('body').mousemove(function(e) {
		$('.loading').css({
			'top' 	: e.pageY,
			'left' 	: e.pageX
		});
	});

	setTimeout(function() {
		$('.overlay').hide();
		$('.loading').fadeOut();
		$('body').css({
			'overflow-y' 	: 'scroll',
			'cursor' 		: 'default'
		});
	}, 2500);
});