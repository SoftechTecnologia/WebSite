<!DOCTYPE html>
<html>
	<head>
		<?php require_once('../head.php'); ?>
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/produtos-e-servicos/css.css" />
		<meta name="description" content="Veja quais serviços especializados em Microcomputadores, Notebooks e Netbooks nós oferecemos. Clique aqui!" />
		<title>Produtos e Serviços - Softech</title>
		<script>
			var path="/produtos-e-servicos/index.php";
			if(window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1"){
				path=pathLocal+path;
			}
			$.ajax({
				url:path,
				success: function(corpo){corpo=$(corpo).find('div.meio table');$('.meio').html(corpo);},
				error: function(){alert('Ocorreu um erro ao inicializar o site. É preciso atualizar a página.');}
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