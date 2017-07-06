$(function() {


	//menu-toggle
	$(".mobile_menu").after("<div id='my-menu'>").click(function() {
		var mmAPI = $("#my-menu").data( "mmenu" );
		mmAPI.open();
		var thiss = $(this).find(".toggle-mnu");
		thiss.toggleClass("on");
		return false;
	});
$('.caption').equalHeights();

$('.grid').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    responsiveClass:true,
    autoplayHoverPause:true,
    autoplayTimeout:4000,
    smartSpeed:2000,
    lazyLoad:true,
    nav:true,
    responsive:{
        0:{
            items:1,
            loop:true
        },
        600:{
            items:2,
            loop:true
        },
        1000:{
            items:3,
            loop:true
        }
    }
})

$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');

$('.bans').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    responsiveClass:true,
    autoplayHoverPause:true,
    autoplayTimeout:2500,
    smartSpeed: 1000,
    responsive:{
        0:{
            items:2,
            loop:true
        },
        600:{
            items:3,
            loop:true
        },
        1000:{
            items:5,
            loop:true
        }
    }
})

	//mobile-mmenu
	$(".navbar-nav").after("<div id='my-menu'>");
	$(".navbar-nav").clone().appendTo("#my-menu");
	$("#my-menu").find("ul").removeClass("dropdown-menu");
    $("#my-menu").find("ul").removeClass("navbar-nav");
	$("#my-menu").find("span").removeClass("caret");


	$("#my-menu").mmenu({
		"offCanvas": {
                  "position": "right"
               },
               "navbars": [
                 
                  {
                     "position": "bottom",
                     "content": [
              '<a href="mailto:ips@gpk.gov.by"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> <span>ips@gpk.gov.by <br>E-mail</span></a>',
              '<a href="tel:(017) 281-70-96"><i class="fa fa-phone" aria-hidden="true"></i> <span>(017) 281-70-96 <br>Горячая линия</span></a>'
                     ]
                  }
               ]
            });
         

	var api = $("#my-menu").data("mmenu");
	api.bind("closed", function(){
		$(".toggle-mnu").removeClass("on");
	});


 

   

	 
	//metro-title
	$(window).resize(function () {

            $.each($('.metro-tile-page:not(.active)'), function () {
                $(this).css('right', ($(this).width() + 30) * -1);
            });
        });
        
        $(document).ready(function () {
            $.each($(".metro-tile-page"), function (index, tile) {
                $.each($(tile).children('imgg'), function (ind, imgg) {
                    $(tile).css('background-image', 'url(' + $(imgg).attr('src') + ')');
                    $(imgg).hide();
                });
            });
            
            $.each($('.metro-tile-page:not(.active)'), function () {
                $(this).css('right', ($(this).width() + 30) * -1);
            });

            $('.metro-tile').hover(function () {
                $(this).children('.active').clearQueue();
                $(this).children(':not(.active)').clearQueue();

                $(this).children('.active').animate({ 'right': $(this).width() + 30 }, 500, 'swing');
                $(this).children(':not(.active)').animate({ 'right': '5px' }, 500, 'swing');
            }, function () {

                $(this).children('.active').clearQueue();
                $(this).children(':not(.active)').clearQueue();

                $(this).children(':not(.active)').animate({ 'right': ($(this).width() + 10) * -1 }, 500, 'swing');
                $(this).children('.active').animate({ 'right': '5px' }, 500, 'swing');
            });
        });




  

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });


  
	
});



$(window).scroll(function() {

  var st = $(this).scrollTop();
  $(".paralax-text").css({
    "transform" : "translate(0%, " + st / 3 + "%"
  });

});
$(document).ready(function () {
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
    $('.scrollup').fadeIn();
    } else {
    $('.scrollup').fadeOut();
    }
    });
     
    $('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
    });
});