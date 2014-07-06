$(document).ready(function(){	





	
/***************************************************
		TOOLTIP & POPOVER
***************************************************/
$("[rel=tooltip]").tooltip();
$("[data-rel=tooltip]").tooltip();

/***************************************************
		CAROUSEL - STOP AUTO CYCLE
***************************************************/
 $('.carousel').carousel({
    interval: false});

/***************************************************
		HOVERS
***************************************************/
	$(".hover_img, .hover_colour").on('mouseover',function(){
			var info=$(this).find("img");
			info.stop().animate({opacity:0.1},500);
		}
	);
	$(".hover_img, .hover_colour").on('mouseout',function(){
			var info=$(this).find("img");
			info.stop().animate({opacity:1},800);
		}
	);
	
/***************************************************
		BACK TO TOP LINK
***************************************************/
	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.go-top').fadeIn(200);
		} else {
			$('.go-top').fadeOut(200);
		}
	});
	
	// Animate the scroll to top
	$('.go-top').click(function(event) {
		event.preventDefault();
		
		$('html, body').animate({scrollTop: 0}, 300);
	})
	
	$('#getstarted').click(function(event) {
		event.preventDefault();
		 $('html, body').animate({
        scrollTop: $("#courses").offset().top
    }, 1000);})
	
});




/***************************************************
	ANIMATIONS
***************************************************/

$(function() { 	
$('.welcome').show().addClass("animated fadeInDown");
$('.welcome_index').show().addClass("animated fadeInDown");
$('.intro_sections h6').show().addClass("animated fadeInUp");
$('.fadeinup').show().addClass("animated fadeInUp");
$('.fadeindown').show().addClass("animated fadeInDown");
}); 


function increaseScore(howmuch) {
	$('#pointstotal').fadeOut(function () {
       $("#pointstotal").text(parseInt($("#pointstotal").text(),10)+howmuch);
		$('#pointstotal').fadeIn();
	});


}



/***************************************************
	TYPEAHEAD
***************************************************/
$(function() { 	
$('.typeahead').typeahead({
    source: function (query, process) {
        return $.get('/dcsite/country/typeahead', { query: query }, function (data) {
            return process(data.options);
        });
    }
});
});





