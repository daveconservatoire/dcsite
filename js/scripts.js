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


/***************************************************
	DONATIONS BANNER
***************************************************/

$(function() { 	


if ($.cookie("noti") !== "closed") { // or you could just check for cookie existing

   $('.dropdown-notification').removeClass('hidden');
   $('.dropdown-notification').addClass('visible-desktop');
} 

// On button click close and add cookie (expires in 100 days)
$('.close').on('click', function(){
   $.cookie("noti", "closed", { expires : 1 });
   $('.dropdown-notification').addClass('hidden');
    $('.dropdown-notification').removeClass('visible-desktop');
    ga('send', 'event', 'button', 'click', 'patreonbannerclose');
})


$('#patreonbutton').on('click', function(){
   $.cookie("noti", "closed", { expires : 1 });
      $('.dropdown-notification').addClass('hidden');
    $('.dropdown-notification').removeClass('visible-desktop');
    ga('send', 'event', 'button', 'click', 'patreonopen');

});

$('.paypalform').on('click', function(){
   
    ga('send', 'event', 'button', 'click', 'paypalsubbuttonclick');

});

});
/***************************************************
	DONATIONS HANDLER
***************************************************/

$(function() { 
	
	var chargeamount;

  var handler = StripeCheckout.configure({
    key: 'pk_0UX1ZN0mYrHD4A4ir530xL3LEryjh',
    image: '/dcsite/img/stripelogo.png',
    token: function(token) {
	
      // Use the token to create the charge with a server-side script.
      // You can access the token ID with `token.id`
      
       var $form = $('#payment-form');
      // response contains id and card, which contains additional card details
       var token = token.id;
       var email = token.email;
      // Insert the token into the form so it gets submitted to the server
    $form.append($('<input type="hidden" name="stripeToken" />').val(token));
 
     $.cookie("noti", "closed", { expires : 100 });
     
    // and submit
    $form.get(0).submit();  
    }
  });

  $('#10Button').on('click', function(e) {
	  $("#chargeamount").val("1000");
    // Open Checkout with further options
    handler.open({
      name: 'Dave Conservatoire',
      description: 'Donation ($10.00)',
      panelLabel: 'Donate',
      amount: 1000
    });
    e.preventDefault();
  });
    $('#20Button').on('click', function(e) {
	   $("#chargeamount").val("2000");
    // Open Checkout with further options
    handler.open({
      name: 'Dave Conservatoire',
      description: 'Donation ($20.00)',
      panelLabel: 'Donate',
      amount: 2000
    });
    e.preventDefault();
  });
    $('#50Button').on('click', function(e) {
	   $("#chargeamount").val("5000");
    // Open Checkout with further options
    handler.open({
      name: 'Dave Conservatoire',
      description: 'Donation ($50.00)',
      panelLabel: 'Donate',
      amount: 5000
    });
    e.preventDefault();
  });

  // Close Checkout on page navigation
  $(window).on('popstate', function() {
    handler.close();
  });
  });


// Subscription Slider

$(function() { 
$('#ex1').slider({
	formatter: function(value) {
		return 'Current value: ' + value;
		
	}
});
$("#ex1").on("slide", function(slideEvt) {
	if(slideEvt.value=="0") {
	    $("#subamount").text("I'm not able to help right now.");	
	    $(".subchange").removeClass("alert-success").addClass("alert-danger");
	}
	else {
	$("#subamount").text("I would like to subscribe to Dave Conservatoire for $"+ slideEvt.value +" per month.");
	$(".subchange").removeClass("alert-danger").addClass("alert-success");
	}

});

$(".subbutton").on("click", function() {
	
if ($('#ex1').val()!=0) {
window.location.href = "https://www.paypal.com/cgi-bin/webscr?business=dave@daveconservatoire.org&cmd=_xclick-subscriptions&currency_code=USD&p3=1&t3=M&no_shipping=1&src=1&sra=1&a3="+$('#ex1').val()+"&item_name=Dave%20Conservatoire%20Subscription%20&return_url=http://localohost:8888/dcsite/thanks&cancel_return=http://www.daveconservatoire.org/subrequest&rm=2";
} else {
	
	$('#suremodal').modal('show');
	}

})

});


