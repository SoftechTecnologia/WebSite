<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Veja quais serviços especializados em Microcomputadores, Notebooks e Netbooks nós oferecemos. Clique aqui!" />
		<meta name="author" content="Thiago Jourdan" />
		<meta name="viewport" content="user-scalable=no" />
		<title>Produtos e Serviços - Softech</title>
		<?php
			$pathLocal="/site-softech";
			if($_SERVER['SERVER_ADDR']=='::1'||$_SERVER['SERVER_ADDR']=='127.0.0.1'){
		?>
		<link rel="shortcut icon" href="<?php echo $pathLocal ?>/img/icon.ico" />
		<script src="<?php echo $pathLocal ?>/js/jQuery.js"></script>
		<script src="<?php echo $pathLocal ?>/m/js/jquery.fs.shifter.js"></script>
		<script src="<?php echo $pathLocal ?>/m/js/var.js"></script>
		<script src="<?php echo $pathLocal ?>/m/js/js.js"></script>
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/m/jquery.fs.shifter.css" />
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/css.css" />
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/produtos-e-servicos/css.css" />
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/m/css.css" />
		<?php
			}else{
		?>
		<link rel="shortcut icon" href="/img/icon.ico" />
		<script src="/js/jQuery.js"></script>
		<script src="/m/js/jquery.fs.shifter.js"></script>
		<script src="/m/js/var.js"></script>
		<script src="/m/js/js.js"></script>
		<link rel="stylesheet" href="/m/jquery.fs.shifter.css" />
		<link rel="stylesheet" href="/css.css" />
		<link rel="stylesheet" href="/produtos-e-servicos/css.css" />
		<link rel="stylesheet" href="/m/css.css" />
		<?php
			}
		?>
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