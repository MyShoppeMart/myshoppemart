jQuery(function(){
    $ = jQuery;
    $(window).load( function() {
        $('.external-link').unbind('click');    
    });
    //main menu
    $("#templatemo_banner_menu ul").singlePageNav({offset: $('#templatemo_banner_menu').outerHeight()});
    $("#templatemo_mobile_menu ul").singlePageNav({offset: $('#templatemo_mobile_menu').outerHeight()});
    //banner slide
    $('.banner').unslider({fluid: true});
    $(window).on("load scroll resize", function(){
        banner_height = ($(document).width()/1900) * 760;
        $('.banner').height(banner_height);
        $('.banner ul li').height(banner_height);
        if(banner_height < 250){
            caption_margin_top = (banner_height-100)/2;
            $('.banner .slide_caption:hidden').show();
            $('.banner .slide_caption').css({"margin-top":caption_margin_top});
        }else{
            $('.banner .slide_caption').hide();
        }
        $("#templatemo_banner_slide > ul > li").css({"background-size":"cover"});
    });
    //about icon
    $(window).on("load scroll resize", function(){
        about_wap_width = $(".about_icon").width();
        about_icon_padding_left = (about_wap_width/100)*30;
        about_icon_width = (about_wap_width/100)*40;
        about_icon_size = (about_icon_width/100)*50;
        about_icon_padding_top = (about_icon_width/100)*25;
        $(".about_icon .imgwap").css({
                                                    'margin-left': about_icon_padding_left,
                                                    'width': about_icon_width,
                                                    'height': about_icon_width,
                                                    });
        $("#templatemo_about .about_icon .imgwap i").css({
                                                                                    "font-size":about_icon_size,
                                                                                    "padding-top":about_icon_padding_top,
                                                                                  });
        $(".about_icon p").css({
                                            'padding-left': "10%",
                                            'padding-right': "10%",
                                            });
    });
    
    /*
    var dt = window.atob('IHwgPGEgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL3d3dy50ZW1wbGF0ZW1vLmNvbS9wcmV2aWV3L3RlbXBsYXRlbW9fNDExX2RyYWdvbmZydWl0Ij5EcmFnb25mcnVpdDwvYT4gYnkgPGEgcmVsPSJub2ZvbGxvdyIgaHJlZj0iaHR0cDovL3d3dy50ZW1wbGF0ZW1vLmNvbSI+dGVtcGxhdGVtbzwvYT4='); 
    var y = document.getElementById('footer');
    y.innerHTML += dt;
    */
    
    //mobile menu and desktop menu
    $("#templatemo_mobile_menu").css({"right":-1500});
    $("#mobile_menu").click(function(){
            $("#templatemo_mobile_menu").show();
            $("#templatemo_mobile_menu").animate({"right":0});
            return false;
    });
    $(window).on("load resize", function(){
            if($(window).width()>768){
                $("#templatemo_mobile_menu").css({"right":-1500});
            }
    });

    jQuery.fn.anchorAnimate = function(settings) {
        settings = jQuery.extend({
            speed : 1100
        }, settings);   
        return this.each(function(){
            var caller = this
            $(caller).click(function (event){
                event.preventDefault();
                var locationHref = window.location.href;
                var elementClick = $(caller).attr("href");
                var destination = $(elementClick).offset().top - $('#templatemo_banner_menu').outerHeight() ;
                $("#templatemo_mobile_menu").animate({"right":-1500});
                $("#templatemo_mobile_menu").fadeOut() ;
                $("html,body").css({"overflow":"auto"});
                $("html,body").stop().animate({ scrollTop: destination}, settings.speed, function(){
                    // Detect if pushState is available
                    if(history.pushState) {
                        history.pushState(null, null, elementClick);
                    }
                });
                return false;
            });
        });
    }
    //animate scroll function calll
    $("#templatemo_mobile_menu a").anchorAnimate();    
    //about
    $(document).scroll(function(){
        document_top = $(document).scrollTop();
        event_wapper_top = $("#templatemo_about").position().top - $('#templatemo_banner_menu').outerHeight();
        if(document_top<event_wapper_top){
            degree = (360/event_wapper_top)*(document_top);
            event_animate_num = event_wapper_top - document_top;
            event_animate_alpha = (1/document_top)*(event_wapper_top);
            $("#templatemo_about .imgwap").css({
                        '-webkit-transform': 'rotate(' + degree + 'deg)',
                        '-moz-transform': 'rotate(' + degree + 'deg)',
                        '-ms-transform': 'rotate(' + degree + 'deg)',
                        '-o-transform': 'rotate(' + degree + 'deg)',
                        'transform': 'rotate(' + degree + 'deg)',
            });
            $("#templatemo_about .about_icon").css({
                        'opacity':event_animate_alpha
            });
        }else{
            $("#templatemo_about .imgwap").css({
                        '-webkit-transform': 'rotate(' + 360 + 'deg)',
                        '-moz-transform': 'rotate(' + 360 + 'deg)',
                        '-ms-transform': 'rotate(' + 360 + 'deg)',
                        '-o-transform': 'rotate(' + 360 + 'deg)',
                        'transform': 'rotate(' + 360 + 'deg)',
            });
            $("#templatemo_about .about_icon").css({
                        'opacity':1
            });
        }
    });
});
   