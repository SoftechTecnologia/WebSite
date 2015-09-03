<!DOCTYPE html>
<html>
	<head>
		<?php require_once('head.php'); ?>
		<meta name="description" content="Não hesite em nos contatar para obter um serviço especializado em informática. Clique aqui e solicite manutenção em Microcomputadores, Notebooks e Netbooks!" />
		<title>Fale Conosco - Softech</title>
		<script>
			var path="/fale-conosco.php",pathIndex="/index.php";
			if(window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1"){
				path=pathLocal+path;
				pathIndex=pathLocal+pathIndex;
			}
			$.ajax({
				url:path,
				success: function(corpo){corpo=$(corpo).find('div.meio fieldset.texto');$('.meio').html(corpo);},
				error: function(){alert('Ocorreu um erro ao inicializar o site. É preciso atualizar a página.');}
			});
			$.ajax({
				url:pathIndex,
				success: function(direita){direita=$(direita).find('.direita fieldset.texto');$('.meio').append(direita);},
				error: function(){if(msgExec==0){alert(msgErroIni+"a lateral direita"+msgErroFim);location.reload();msgExec++}}
			});
		</script>
	</head>
	<body class="shifter">
		<div class="shifter-page">
			<p class="shifter-handle"></p>
			<div class="logo"></div><div class="meio"> <!-- Copiado de "/index.html" -->
			</div>
		</div>
		<nav class="shifter-navigation"></nav>
		<footer></footer> <!-- Copiado de "/index.html" -->
	</body>
</html>