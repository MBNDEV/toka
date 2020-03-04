(function($){

    var app = {
        onReady: function(){

        },
        onLoad: function(){
			$(document).foundation();

            app.utils();
			app.stickyHeader();
			app.mobileMenu();
			app.smoothscroll();
			app.sliders();
		},
		utils: function(){
			$('.wrap-words').each(function(i, e){
				var text = $(e).text();

				$(e).html(text.replace(/\w+/g, '<span>$&</span>'));
			});
		},
		stickyHeader: function(){
			$(window).on('scroll load', function(e){
				var scrolled	= window.pageXOffset || window.scrollY,
					header		= $('#header');

				if(scrolled >= 280){
					header.addClass('fixed');
				}else{
					header.removeClass('fixed');
				}
			});
		},
		mobileMenu: function(){
			$('.header-nav-toggle').on('click', function(e){
				e.preventDefault();
				$('.header').toggleClass('mobile-open');
			});

			$(window).on('resize', function(){
				$('.header').removeClass('mobile-open');
			});
		},
        smoothscroll: function(){
			$('.smoothscrolling').on('click', function(){
				var headerH	= $('.header').height();

				$('html, body').animate({
					scrollTop: $(this.hash || $('a', this)[0].hash).offset().top
				}, { duration: 1000 });
				return false;
			});
		},
		sliders: function(){
			var introBoxes = function(){
				var w	= window.innerWidth,
					$e	= $('.sec-intro .boxes');

				if(w <= 768){
					if(!$e.hasClass('slick-initialized')){
						$e.slick({
							slidesToShow: 1,
							infinite: true,
							dots: false,
							arrows: true,
							autoplay: true,
							autoplaySpeed: 5000,
							pauseOnHover: true,
						});
					}
				}else{
					if($e.hasClass('slick-initialized')){
						$e.slick('unslick');
					}
				}
			}

			introBoxes();
			$(window).on('resize', introBoxes);



            $('.find-slider').slick({
                slidesToShow: 1,
                infinite: true,
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 6000,
                pauseOnHover: false,
				speed: 1300,
				fade: true,
				asNavFor: '.find-slider-nav',
				responsive: [
					{
						breakpoint: 1023,
						settings: {
							adaptiveHeight: true,
						}
					}
				]
			});
			$('.find-slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.find-slider',
				dots: false,
				arrows: false,
				infinite: true,
				centerMode: true,
				focusOnSelect: true,
				variableWidth: true,
				responsive: [
					{
						breakpoint: 1023,
						settings: {
							variableWidth: false,
						}
					}
				]
			});


		}
    }


    document.addEventListener('DOMContentLoaded', app.onReady);
    window.addEventListener('load', app.onLoad);

})(jQuery);
