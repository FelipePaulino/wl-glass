
$(function(){ 

	//FORM SUBMIT
	$(".modal form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$("input:text,input:radio,textarea,select").css("background","#FFF");
		$("span.erromodal").hide();
		
		var nomemodal=$("input[name='nomemodal']").val();
		var telefonemodal=$("input[name='telefonemodal']").val();
		var actionmodal=$("input[name='actionmodal']").val();

		$.post("includes/php/validacao_modal.php",{nomemodal:nomemodal,telefonemodal:telefonemodal,actionmodal:actionmodal,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var campomodal=retorno[0];
			var mensagemmodal=retorno[1];
			if(campomodal=="ok"){
				alert(mensagemmodal);
				document.location.assign("obrigado-modal.php");
			}
			else if(campomodal=="falha")
				alert(mensagemmodal);
			else{
				erros(campomodal,mensagemmodal);
				return false;
			}
		});
	});
});

function erros(campomodal, mensagemmodal){
	if(campomodal=="mensagem")
		$("textarea[name='"+campomodal+"']").css("background","#FFFF99").focus();
	else
		$("input[name='"+campomodal+"']").css("background","#FFFF99").focus();
	$("span.erromodal").html(mensagemmodal).fadeIn("fast");
}

function soNum(inputData, e){
	if(document.all) // Internet Explorer
		var tecla = event.keyCode;
	else //Outros Browsers
		var tecla = e.which;
	
	if(!(tecla > 47 && tecla < 58)&&tecla!=8&&tecla!=0){
		alert("Digite somente números");
		return false;
	}
}