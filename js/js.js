function topo(){
	prompt('O site está em fase de desenvolvimento. Caso queira entrar em contato para consulta dos serviços, favor, envie um e-mail. Desculpe o transtorno. Atenciosamente, Softech.','softechtecnologia@gmail.com'); 
	$.ajax({
		url:'index.html',
		success:function(copia){
			copia=$(copia).find('div#topo,');
			$('#copy-topo').html(copia);
		}
	});
}