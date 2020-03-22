(function( $ ) {
	'use strict';
	$(document).ready(function () {
		$(window).on("scroll", function () {
			let documentHeight = $(document).height();
			let windowHeight = $(window).height();
			let scrollPosition = $(window).scrollTop();
			let scrollLength = documentHeight - windowHeight;

			if(scrollPosition >= scrollLength * 0.5){
				$(".back-to-top").css("display", "block");
			}else {
				$(".back-to-top").css("display", "none");
			}
			$(".back-to-top").on("click", function () {
				$(window).scrollTop(0);
			});
		});
	});

})( jQuery );
