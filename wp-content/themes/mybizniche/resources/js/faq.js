(function ($) {
    var app = {
        data: {
            bannner_height: undefined
        },
        init: function () {
            app.data.bannner_height = $(".banner").height();
            $(window).scroll(function () {
                app.checkHeader();
            });
            $(window).resize(function () {
                app.data.bannner_height = $(".banner").height();
            });
            app.checkHeader();
            app.sideNav();
            $(window).scrollTop(0);
        },sideNav:function(){
            $(".sidenav li a").click(function(e){
                e.preventDefault();
                var href = $(this).attr("href");
                setTimeout(function(){
                    $(href).next().addClass("animHighlights");
                    setTimeout(function(){
                        $(href).next().removeClass("animHighlights");
                    },800);
                },500)
                $("html,body").animate({scrollTop:$(href).offset().top - (app.data.bannner_height * 0.5)},500);
            });
        },
        checkHeader: function () {
            var st = $(window).scrollTop();
            if (st >= 280) {
                
                if (!$(".banner").hasClass("sticky")) {
                    $(".banner").addClass("sticky");
                    $(".accordion").addClass("sticky");
                    $("section.content").css("padding-top", app.data.bannner_height)
                }
            } else {
                if ($(".banner").hasClass("sticky")) {
                    $(".banner").removeClass("sticky");
                    $(".accordion").removeClass("sticky");
                    $("section.content").css("padding-top", 0);
                }
            }

        }
    };

    document.addEventListener('DOMContentLoaded', app.init);
})(jQuery);