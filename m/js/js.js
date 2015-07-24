// Fade em todas as páginas
$(document).ready(function (){
	$('body').css('opacity', '0').fadeTo(400, 1,'swing');
});
// Componentes
$(function(){
	var path="/index.php";
	if(window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1"){
		path=pathLocal+path;
	}
	$.ajax({
		url:path,
		success: function(topo){topo=$(topo).find('.bg-logo-softech');$('.logo').html(topo);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
	$.ajax({
		url:path,
		success: function(topo){topo=$(topo).find('nav').children();$('nav.shifter-navigation').html(topo);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
	$.ajax({
		url:path,
		success: function(rodape){rodape=$(rodape).find('.rodapeText');$('footer').html(rodape);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
});
