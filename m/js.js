// Links da página
var principal="/m";
var sobreNos="/m/sobre-nos.html";
var produtosEServicos="/m/produtos-e-servicos";
var faq="/m/perguntas-frequentes.html";
var downloads="/m#";
var fale="/m/fale-conosco.html";
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
});
