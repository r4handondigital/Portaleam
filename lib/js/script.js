$(document).ready(function(){
/*
	Códigos de invocação dos plugins.
*/

	

	$('.destaque-principal').owlCarousel({
        loop:true,
        items:1,
         nav:false,
          autoplay:true,
        animateOut: 'fadeOut',
      
    });

    $('.anima-banner').owlCarousel({
    	dots:false,
        loop:true,
        autoplay:true,
   		autoplayTimeout:5000,
        items:1,
         nav:false,
        animateOut: 'fadeOut',
      
    });


    $(".button-collapse").sideNav();

	
    
});























