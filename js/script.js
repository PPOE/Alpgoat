(function ($, document, window) {
	$(document).ready(function () {

		/* Main Navigation Font Size */
		function navFontSize() {
			var fontSize;
			var nav = $('#main-nav')
			fontSize = 0.5 + (nav.width() / 1500);
			nav.css({'font-size': fontSize + 'em'});
		}
		navFontSize();
		$(window).resize(navFontSize);
	
		/* Cut the first image of the category description and set it as a featured image */
		/* This method is realy crappy, I guess */
		var catDes = $('.category-description');
		if (catDes.find('img') && catDes.length > 0) {
			$('#content').prepend('<figure class="post-image" id="category-image"></figure>');
			catDes.find('img').first().appendTo('#category-image');
			catDes.find('.meta-thumbnail-caption').appendTo('#category-image');
		}

		/* Toggle Menu */
		$('.menu-toggle').smoothScroll().click(function () {
			$('#main-nav div').slideToggle('200');
		});

		/* Dynamic equal width in Footer-Menu */
		var n = 100 / ($('#footer_navigation ul li').length - $('#footer_navigation ul ul li').length);
		$('#footer_navigation ul li').css('width', n + '%');

		/* Responsive Youtube/Vimeo Videos */
		$('.article').fitVids();
	
		/* Check if Slider exists */
		if($('#front-page-slider').length>0) {
			/* Slider on Frontpage */
			$('#front-page-slider').flexslider({
				slideshow:		true,
				useCSS:			false,
				animation:		'slide',
				direction:		'horizontal',
				reverse:		false,
				touch:			true,
				pauseOnAction:	false,
				pauseOnHover:	false,
				pausePlay:		true,
				start:			function(slider) {
									$('body').removeClass('loading');
								}
			});
		}
	});
}(jQuery, document, window))