// PONTINHO ANIMADO DO MOUSE //
$(document).ready(function () {
	function playslider(){
		$( ".mouse span.pontinho" ).animate({
			top: "15px",
	  	}, 600, function() {
	  	$( ".mouse span.pontinho" ).animate({
	  		top: "10px"
	  	},600, playslider )
  		});
	}   
	playslider(); //start it up the first time
});

//PARALLAX//	
$(function(){
$('.parallax').parallax({imageSrc: 'images/parallax.png'});
})

//FECHAR CTA WHATS//
 $(function(){
	$( ".whats .fa-times" ).click(function() {
	  $( ".whats" ).animate({
	    right: "-130px"
	  }, 500 );
	});

});


//ABRIR E FECHAR MODAL DE CONTATO//
	$(function(){
		$('.nos-ligamos').click(function(){
			$('.modal').fadeIn(500)
		})
		$('.modal .fa-times').click(function(){
			$('.modal').fadeOut(500)
		})
	})

// ANCORA DO MENU PARA PARTES DO SITE //
   jQuery(document).ready(function($) { 
      $(".scroll").click(function(event){        
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top -150}, 1000);
     });
  });

	$(function() {
    var sticky_navigation_offset_top = $('nav').offset().top;   
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (scroll_top >= 0) { 
        	$('nav li').css('font-family','Gotham-Light')
        	$('nav li').eq(0).css('font-family','Gotham-Bold')
        	$('nav li span').removeClass('selecao')
        	$('nav li:eq(0) span').addClass('selecao')

        }
        if (scroll_top >= 800) { 
        	$('nav li').css('font-family','Gotham-Light')
        	$('nav li').eq(1).css('font-family','Gotham-Bold')
        	$('nav li span').removeClass('selecao')
        	$('nav li:eq(1) span').addClass('selecao')
        }
        if (scroll_top >= 5600) { 
        	$('nav li').css('font-family','Gotham-Light')
        	$('nav li').eq(2).css('font-family','Gotham-Bold')
        	$('nav li span').removeClass('selecao')
        	$('nav li:eq(2) span').addClass('selecao')
        } 
        if (scroll_top >= 6500) { 
        	$('nav li').css('font-family','Gotham-Light')
        	$('nav li').eq(3).css('font-family','Gotham-Bold')
        	$('nav li span').removeClass('selecao')
        	$('nav li:eq(3) span').addClass('selecao')
        } else {

        }   
    };
     
    // run our function on load
    sticky_navigation();
     
    // and run it again every time you scroll
    $(window).scroll(function() {
         sticky_navigation();
    });
 
});




//CARROSEIS DE ANIMAÇÃO DO MOBILE//
$(function(){
	var x = $(window).width()
	if(x < 480){
		$(function(){  	
			$('.beneficios-slick').slick({
				dots: false,
				arrows:false,      
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,	
			});
			$('.certificados-slick').slick({
				dots: false,
				arrows:false,      
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,	
			});
			$('.outros-slick').slick({
				dots: false,
				arrows:false,      
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,	
			});
			$('.fotos-slick').slick({
				dots: false,
				arrows:false,      
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,	
			});
		});  
	}
})


//ANIMAÇÃO NO BURGER MOBILE//
	$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});

//ABRIR E FECHAR MENU MOBILE//
	$(function(){
		$('#nav-icon1').click(function(){
			$('.menu-inteiro').toggleClass('abrir-menu')
		})
		$('ul.menu li').click(function(){
			$('.menu-inteiro').removeClass('abrir-menu')
		})
	})
