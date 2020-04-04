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
			app.customScrollBar();
			app.sideBarMenu();
			app.accountTabs();
			app.pTabs();
			app.ajaxAddCart();
			app.addCloseNotify();

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
                autoplaySpeed: 6777000,
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

			var faqSlider = function(){
				var w	= window.innerWidth,
					$e	= $('.featured-faqs, .faq-boxes');

				if(w <= 1023){
					if(!$e.hasClass('slick-initialized')){
						$e.slick({
							slidesToShow: 1,
							infinite: true,
							dots: true,
							arrows: false,
							autoplay: true,
							autoplaySpeed: 5000,
							pauseOnHover: true,
							adaptiveHeight:true
						});
					}
				}else{
					if($e.hasClass('slick-initialized')){
						$e.slick('unslick');
					}
				}
			}

			faqSlider();
			$(window).on('resize', faqSlider);

			
            $('.bg-slider').slick({
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 10000,
				speed: 1300,
                pauseOnHover: false,
				fade: true
			});
		},
		customScrollBar: function(){
			$('.with-scrollbar').each(function(i, e){
				$(e).niceScroll({
					cursorborder: '',
					cursorcolor: 'rgba(20, 200, 240, 0.4)',
				});
			});

			$(window).on('scroll', function(){
				$('.with-scrollbar').getNiceScroll().resize();
			});
		},
		sideBarMenu: function(){
			$('a.sidebar-menu-toggle').on('click', function(e){				
				var hash = this.hash;
				if(!hash)
					return;

				e.preventDefault();
				$(hash+'.sidebar-menu-wrap').addClass('in');
				$('body').addClass('hide-scrollbar');
			});

			$('.sidebar-menu-wrap').on('click', function(e){
				if (e.target !== this)
				return;
				$(this).removeClass('in');
				$('body').removeClass('hide-scrollbar');
			});

			$('.sidebar-menu .close').on('click', function(){
				$(this).closest('.sidebar-menu-wrap').removeClass('in');
				$('body').removeClass('hide-scrollbar');
			});
		},
		sideBarMenuHover: function(){
			$('a.option-menu.sidebar-menu-toggle').mouseover(function(e){
				var hash = this.hash;
				if(!hash)
					return;

				e.preventDefault();
				
				$(hash+'.sidebar-menu-wrap').addClass('in');
				$('body').addClass('hide-scrollbar');
			});
		},
		
		accountTabs: function(){
			$('#account-tabs').on('change.zf.tabs', function(){
				$('.sidebar-menu-wrap .sidebar-menu .inner').getNiceScroll().resize();
			});
		},

		pTabs: function(){
			$('.p-tabs li a').on('click', function(e){
				e.preventDefault();

				$(this).closest('ul').children('li').removeClass('active');
				$(this).parent().addClass('active');

				$('.p-tab-cont').children('.tab-item').removeClass('in');
				$('.p-tab-cont').find(this.hash).addClass('in');
			});
		},

		ajaxAddCart: function() {
			 $('body').on( 'added_to_cart', function(){
				$('.mini-cart-settings').addClass('in');
			});
	
			var $warp_fragment_refresh = {
				url: wc_cart_fragments_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'get_refreshed_fragments' ),
				type: 'POST',
				success: function( data ) {
					if ( data && data.fragments ) {
						$.each( data.fragments, function( key, value ) {
							$( key ).replaceWith( value );
						});
						$( document.body ).trigger( 'wc_fragments_refreshed' );
					}
				}
			};	
			$('.entry-summary form.cart').on('submit', function (e) {
				e.preventDefault();
				$('.entry-summary').block({
					message: null,
					overlayCSS: {
						cursor: 'none'
					}
				});
				var product_url = window.location,
					form = $(this);
				$.post(product_url, form.serialize() + '&_wp_http_referer=' + product_url, function (result) {
					var cart_dropdown = $('.widget_shopping_cart', result)
					$('.widget_shopping_cart').replaceWith(cart_dropdown);
					$.ajax($warp_fragment_refresh);
					$('.entry-summary').unblock();
					$('.mini-cart-settings').addClass('in');
				});   
			});
		},
		
		addCloseNotify: function() {
			$('.woocommerce-notices-wrapper').append('<span class="close-notify" />');
			$('.close-notify').click(function(){
				//$(this).parent().addClass('hide');
				$(this).parent().children().first().remove();
			})
		}
		
    }

    jQuery(document).ready(function(){
		jQuery('.mega-menu-item ul a').click(function(){
			console.log('test');
			jQuery('.mega-toggle-on').removeClass('mega-toggle-on');
		});

        if (jQuery(window).width() > 1024) {
            app.sideBarMenuHover();
        }  
    });
    jQuery(window).resize(function () {
            if (jQuery(window).width() > 1024) {
                app.sideBarMenuHover();
            }
    });

    document.addEventListener('DOMContentLoaded', app.onReady);
	window.addEventListener('load', app.onLoad);
	

})(jQuery);
