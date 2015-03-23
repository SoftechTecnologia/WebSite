// Links da página
var principal="/m",sobreNos="/m/sobre-nos.html",produtosEServicos="/m/produtos-e-servicos",downloads="/m/downloads.html",fale="/m/fale-conosco.html";
// Fade em todas as páginas
$(document).ready(function (){
	$('body').css('opacity', '0').fadeTo(500, 1,'swing');
});
// Componentes
$(function(){
	$.ajax({
		url:'/index.html',
		success: function(topo){topo=$(topo).find('#bg-logo-softech');$('#logo').html(topo);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
	$.ajax({
		url:'/index.html',
		success: function(topo){topo=$(topo).find('#menu');$('nav.shifter-navigation').html(topo);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
	$.ajax({
		url:'/index.html',
		success: function(rodape){rodape=$(rodape).find('#rodapetext');$('#rodape').html(rodape);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
});
