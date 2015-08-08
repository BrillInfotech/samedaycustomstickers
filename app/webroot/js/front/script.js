  $(function() {
		$(this).bind("contextmenu", function(e) {
			e.preventDefault();
		});
	//}); /*
$(document).bind('keydown', 'ctrl+s', function(){$('#save').click(); return false;});
$(document).ready(function() {
    var ww = $(window).width();
    $('.page-wrap').width($(window).width());
    $('nav .mob-link').append($('footer .col-sm-9 ').html());
    $('.nav-toggle').click(function() {
        $('body').toggleClass('nav-active');
    });
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
           
            return false;
        } else {
            return false;
        }
};*/
    function showModal() {
        $('.how-to-video').modal('show');
    };
    $('.how-to-order img,.how-to-order .player').on('click', showModal)
    $(".flexiselDemo3").flexisel({
        visibleItems: 6,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 1
            },
            landscape: {
                changePoint: 640,
                visibleItems: 2
            },
            tablet: {
                changePoint: 768,
                visibleItems: 4
            },
            desktop: {
                changePoint: 992,
                visibleItems: 6
            }
        },
        lightbox: true
    });
	
	if($("#content-slider").length > 0){
  $("#content-slider").lightSlider({
                loop: true,
                keyPress: true
            });
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
			
	}
			
		 $(".selectboxdiv").each(function() {
        $(this).wrap("<span class='select-wrapper'></span>");
        $(this).after("<span class='holder'></span>");
    });
    $(".selectboxdiv").change(function() {
        var selectedOption = $(this).find(":selected").text();
        $(this).next(".holder").text(selectedOption);
    }).trigger('change');
    $(".scroll").click(function(event) {
            event.preventDefault(); 
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1200);
        });
		$('.login-page').css('min-height',$(window).height() - $('header').height());
		$(":file").jfilestyle({buttonText: "Find file"});
});
$(window).resize(function() {
    $('.page-wrap').width($(window).width())
})
     