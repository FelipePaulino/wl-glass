<?php

	include_once "includes/php/validacao_modal.php";
	include_once "includes/php/validacao_home.php";

?>
<?php include 'header.php' ?>


		<div class="grid-menor">
		<br class="quebra">
		<p class="texto-slider">Obrigado pelo contato<br class="quebra">
		Volte para a página inicial <a href="index.php">aqui</a></p>
		<br class="quebra">
		</div>
		



		<footer style="margin-top: 200px;">
			<div class="container">
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<p><span>Av. Cangaíba, 4063 - Cangaiba, São Paulo - SP,  - CEP: 03711-009 |</span> © 2018 - WL GLass. Todos os Direitos Reservados.</p>
				<span class="assinatura">
	            	<a href="https://www.3xceler.com.br/criacao-de-sites" title="Criação de Sites: Agência 3xceler" class="pull-left" target="_blank" style="color:#fff;">Criação de sites</a> : 
	            	<img src="images/logo-3xceler.png" alt="Logo Agência 3xceler" title="Logo Agência 3xceler">
       		 	</span>
			</div>
		</footer>





	</body>
<script type="text/javascript" src="includes/js/jquery.js"></script>
<script type="text/javascript" src="includes/js/modal.js"></script>
<script type="text/javascript" src="includes/js/home.js"></script>
     

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="includes/slick/slick.min.js"></script>
<script type="text/javascript" src="includes/js/parallax.js"></script>
<script type="text/javascript" src="includes/js/fresco/fresco.js"></script>
<script type="text/javascript">
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
</script>
<script type="text/javascript">
	
$(function(){
$('.parallax').parallax({imageSrc: 'images/parallax.png'});
})
</script>
<script type="text/javascript">
 $(function(){
	$( ".whats .fa-times" ).click(function() {
	  $( ".whats" ).animate({
	    right: "-130px"
	  }, 500 );
	});

});
</script>
<script type="text/javascript">
	$(function(){
		$('.nos-ligamos').click(function(){
			$('.modal').fadeIn(500)
		})
		$('.modal .fa-times').click(function(){
			$('.modal').fadeOut(500)
		})
	})
</script>
<script type="text/javascript">
// ANCORA ANIMA PARA FORMULÁRIO DE CONTATO //
   jQuery(document).ready(function($) { 
      $(".scroll").click(function(event){        
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top -150}, 1000);
     });
  });
</script>
<script type="text/javascript">
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
		</script>
</html>