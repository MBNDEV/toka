!function(t){var a={data:{bannner_height:void 0},init:function(){a.data.bannner_height=t(".banner").height(),t(window).scroll(function(){a.checkHeader()}),t(window).resize(function(){a.data.bannner_height=t(".banner").height()}),a.checkHeader(),a.sideNav(),t(window).scrollTop(0)},sideNav:function(){t(".sidenav li a").click(function(n){n.preventDefault();var e=t(this).attr("href");setTimeout(function(){t(e).next().addClass("animHighlights"),setTimeout(function(){t(e).next().removeClass("animHighlights")},800)},500),t("html,body").animate({scrollTop:t(e).offset().top-.5*a.data.bannner_height},500)})},checkHeader:function(){280<=t(window).scrollTop()?t(".banner").hasClass("sticky")||(t(".banner").addClass("sticky"),t(".accordion").addClass("sticky"),t("section.content").css("padding-top",a.data.bannner_height)):t(".banner").hasClass("sticky")&&(t(".banner").removeClass("sticky"),t(".accordion").removeClass("sticky"),t("section.content").css("padding-top",0))}};document.addEventListener("DOMContentLoaded",a.init)}(jQuery);