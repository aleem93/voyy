$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});

$(document).ready(function(){
// =======HOME PAGE MAIN SLIDER=======
	$('.owl-carousel.main_slider').owlCarousel({
	    loop:true,
	    items:1,
	    margin:10,
	    nav:true,
	    //dots:true,
	    navText:[
		  "<i class='fa fa-angle-left fa-lg'></i>",
		  "<i class='fa fa-angle-right fa-lg'></i>"
		  ],
		responsiveClass:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})
// =======HOME PAGE TESTIMONAL SLIDER=======
	$('.owl-carousel.home_new_pro').owlCarousel({
	    loop:true,
	    items:4,
	    margin:15,
	    nav:true,
		navText:[
		"<i class='fa fa-angle-left fa-lg'></i>",
		"<i class='fa fa-angle-right fa-lg'></i>"
		],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        980:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	})
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
   $("#upload-file-nxt").click(function() {
      $(".u-information").hide();
      $(".vendor-select").show();
        
    });
});

// $('a[href="#navbar-more-show"], .navbar-more-overlay').on('click', function(event) {
// 		event.preventDefault();
// 		$('body').toggleClass('navbar-more-show');
// 		if ($('body').hasClass('navbar-more-show'))	{
// 			$('a[href="#navbar-more-show"]').closest('li').addClass('active');
// 		}else{
// 			$('a[href="#navbar-more-show"]').closest('li').removeClass('active');
// 		}
// 		return false;
// });

// // Toggle Function
// $('.toggle').click(function(){
//    $('#login-step2').show(); 
//    $('#login-step1').slideUp(); 
//    $('#login-step2').slideDown();

// });
 
// $('#login-step2 .sub1').click(function(){
//    $('#login-step3').show(); 
//    $('#login-step2').slideUp(); 
//    $('#login-step3').slideDown();

// });

