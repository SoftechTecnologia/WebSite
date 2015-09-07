$(document).ready(function (){
	// Fade In em todas as páginas
	include(pathLocal+"/js/otherFunctions.js");
	$("body").css("opacity", "0").fadeTo(fdTm, 1,"swing");
	$(".email,.confirmaEmail").keyup(function(){
		if($(".email").val()==$(".confirmaEmail").val()) $(".confirmaEmail").removeClass("incorrect");
		else $(".confirmaEmail").addClass("incorrect");
	});
	// Envio de email
	$(".formEmail").submit(function(){
		if($(".confirmaEmail").hasClass("incorrect")){
			alert("A confirmação de email está incorreta!");
			return false;
		}
		var btnText=$(".buttonSender").html();
		$(".buttonSender").html("Aguarde...");
		$.ajax({
			data:{
				nome:$(".nome").val(),
				email:$(".email").val(),
				assunto:$(".assunto").val(),
				mensagem:$(".mensagem").val()
			},
			type:"POST",
			url:pathLocal+"/php/sendmail.php",
			success:function(dados){
				swal({
					type:$(dados).filter(".retorno").attr("data-type"),
					title:$(dados).filter(".retorno").html()
				},function(){
					if($(dados).filter(".retorno").attr("data-type")=="success") $(".formEmail input,.formEmail textarea").val("");
					$(".buttonSender").html(btnText);
				})
			},
			error:function(jqXHR, textStatus, errorThrown){
				swal({
					title: "Ocorreu um erro!",
					text: "<p>Descrição do erro: \""+textStatus+" "+errorThrown+"\".</p><p>Gostaria de tentar novamente?</p>",
					type: "error",
					html: true,
					showCancelButton: true,
					confirmButtonText: "Sim, tente!",
					cancelButtonText: "Não, tudo bem.",
					closeOnConfirm: false
				},function(){
					$(".buttonSender").html(btnText);
				});
			}
		});
		return false;
	})
});
window.onbeforeunload=function (){
	// Fade Out em todas as páginas
	$("body").css("opacity", "1").fadeTo(fdTm, 0,"swing");
};
// Redirec. IE
function ie(){
	alert("É recomendado que se utilize um navegador mais atualizado, pois esta versão do navegador não suporta todas as funcionalidades.");
	location.href="http://www.google.com.br/chrome/browser/desktop/";
}
// Link para abrir e pôr foco em chat
function chatlink(){
	$("#habla_oplink_a").click();
	$("#habla_wcsend_input").focus();
};
function include(url){
	if(/css$/.test(url)&&$("link[href='"+url+"']").length==0) $("head").append("<link rel='stylesheet' href='"+url+"'>");
	else if(/js$/.test(url)&&$("script[src='"+url+"']").length==0) $("head").append("<script src='"+url+"'></script>");
}