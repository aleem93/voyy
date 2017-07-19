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
	        414:{
	            items:2
	        },
	        480:{
	            items:2
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

