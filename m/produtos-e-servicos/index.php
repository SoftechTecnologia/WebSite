<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="/img/icon.ico" />
		<meta name="description" content="Veja quais serviços especializados em Microcomputadores, Notebooks e Netbooks nós oferecemos. Clique aqui!" />
		<meta name="author" content="Thiago Jourdan" />
		<meta name="viewport" content="user-scalable=no" />
		<title>Produtos e Serviços - Softech</title>
		<script src="/js/jQuery.js"></script>
		<script src="/m/js/var.js"></script>
		<script src="/m/js/jquery.fs.shifter.js"></script>
		<script src="/m/js/js.js"></script>
		<link rel="stylesheet" href="/css.css" />
		<link rel="stylesheet" href="/m/css.css" />
		<link rel="stylesheet" href="/m/jquery.fs.shifter.css" />
		<style>
			body{text-decoration:none}
			.shifter .shifter-handle{
				float:right;
				margin:-5px 0 0}
			.shifter .shifter-navigation{
				background:#5071F4;
				padding:100px 30px 30px}
			.shifter .shifter-navigation a{
				display:block;
				margin:0 0 50px}
		</style>
		<script>
			$.ajax({
				url:'/produtos-e-servicos/index.html',
				success: function(corpo){corpo=$(corpo).find('div#meio table#texto');$('#meio').html(corpo);},
				error: function(){alert('Ocorreu um erro ao inicializar o site. É preciso atualizar a página.');}
			});
		</script>
	</head>
	<body class="shifter" style="width:100%">
		<div class="shifter-page">
			<p class="shifter-handle"></p>
			<div id="logo"></div><div id="meio"> <!-- Copiado de "/index.html" -->
			</div>
		</div>
		<nav class="shifter-navigation"></nav>
		<div id="rodape"></div> <!-- Copiado de "/index.html" -->
	</body>
</html>