$(function(){
	$.ajax({
		url:'../index.html',
		success: function(rodape){
			rodape=$(rodape).find(',#rodape #esquerda,#rodape #meio');
			$('#rodape').html(rodape);
		},
		error: function(){
			alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');
		}
	});
});