<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, localtreechildrenuser-scalable=no"> 
<meta name="robots" content="index, follow">

<link rel="canonical"   href="<?php echo $canonnical; ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="description" content="<?php echo $description; ?>">
<title>WL Glass</title>


<!-- Última versão JavaScript compilada e minificada -->
<link rel="stylesheet"   href="includes/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css"   href="includes/slick/slick.css"/>
<link rel="stylesheet"   href="includes/css/stylesheet.css">
<link rel="stylesheet"   href="includes/css/geral.css">
<link rel="stylesheet" type="text/css" href="includes/css/fresco/fresco.css" />

<link rel="stylesheet"   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Tema opcional -->
<link rel="stylesheet"   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Última versão JavaScript compilada e minificada -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WDBN5WW');</script>
<!-- End Google Tag Manager -->

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5QsdwsF7hyvZGybzJMp2KFnw1pOR0Aow";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

</head>

<body id="home" name="home">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDBN5WW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<div class="modal">
		<div class="fundo"></div>
		<div class="form-modal">
		<i class="fa fa-times" aria-hidden="true"></i>
			<p>Preencha os campos abaixo e entraremos em contato o mais breve possível.</p>
			<form action="" method="post" id="form">
    		<div>
            	<label>Nome:</label>
            	<input name="nomemodal"  type="text" class="nome" value="" />
           </div>
			<div>
            	<label>Telefone:</label>
            	<input name="telefonemodal" class="telefone" type="text" value="" />
			</div>
			<input type="hidden" name="actionmodal" value="enviaFormmodal" />                            
            <input name="enviarmodal" type="submit" value="Enviar" class="botao" />
            <span class="erromodal">
                <?php
                if($retornomodal_php!=""){
                echo $retornomodal_php;
                }
                ?>
            </span>
        </form>
		</div>
	</div>
	<div class="whats">
		<i class="fa fa-times" aria-hidden="true"></i>
		<a href="https://api.whatsapp.com/send?phone=5511986372738"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
		<a href="https://api.whatsapp.com/send?phone=5511986372738"><h4><span>Manda um</span>Whatsapp!</h4></a>
	</div>
	<nav>
	<div class="container">

		<a href="/" class="logo"><img src="images/logo.png"></a>
		<div id="nav-icon1">
	  <span></span>
	  <span></span>
	  <span></span>
	</div>
				<div class="menu-inteiro">
			<ul class="menu" >
				<li><a href="http://www.wlglass.com.br/#" class="scroll">Home<span></span></a></li>
				<li><a href="#sobre" class="scroll">Sobre Nós<span></span></a></li>
				<li><a href="#galeria" class="scroll">Galeria<span></span></a></li>
				<li><a href="#contato" class="scroll">Contato<span></span></a></li>
			</ul>

			<ul class="telefones">
				<li><a href="tel:1120425493"><i class="fa fa-phone" aria-hidden="true"></i> 11 2042.5493</a></li>
				<li><a href="https://api.whatsapp.com/send?phone=5511986372738"><i class="fa fa-whatsapp" aria-hidden="true"></i>11 98637.2738</a></li>
				<li class="nos-ligamos"><a href="#">NÓS TE LIGAMOS!</a></li>
			</ul>
			</div>
			</div>
		</nav>