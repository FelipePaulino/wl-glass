
$(function(){ 

	//FORM SUBMIT
	$("form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$("input:text,input:radio,textarea,select").css("background","#FFF");
		$("span.erro2").hide();
		
		var nome=$("input[name='nome']").val();
		var telefone=$("input[name='telefone']").val();
		var email=$("input[name='email']").val();
		var endereco=$("input[name='endereco']").val();
		var numero=$("input[name='numero']").val();
		var assunto=$("input[name='assunto']").val();
		var mensagem=$("textarea[name='mensagem']").val();
		var action=$("input[name='action']").val();

		$.post("includes/php/validacao_home.php",{nome:nome,telefone:telefone,email:email,endereco:endereco,numero:numero,assunto:assunto,mensagem:mensagem,action:action,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var campo=retorno[0];
			var mensagem=retorno[1];
			if(campo=="ok"){
				alert(mensagem);
				document.location.assign("obrigado-contato.php");
			}
			else if(campo=="falha")
				alert(mensagem);
			else{
				erros(campo,mensagem);
				return false;
			}
		});
	});
});

function erros(campo, mensagem){
	if(campo=="mensagem")
		$("textarea[name='"+campo+"']").css("background","#FFFF99").focus();
	else
		$("input[name='"+campo+"']").css("background","#FFFF99").focus();
	$("span.erro2").html(mensagem).fadeIn("fast");
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