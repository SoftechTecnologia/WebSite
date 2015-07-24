<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="/img/icon.ico" />
		<meta name="description" content="Não hesite em nos contatar para obter um serviço especializado em informática. Clique aqui e solicite manutenção em Microcomputadores, Notebooks e Netbooks!" />
		<meta name="author" content="Thiago Jourdan" />
		<meta name="viewport" content="user-scalable=no" />
		<title>Fale Conosco - Softech</title>
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
				url:'/fale-conosco.html',
				success: function(corpo){corpo=$(corpo).find('div#meio fieldset#texto');$('#meio').html(corpo);},
				error: function(){alert('Ocorreu um erro ao inicializar o site. É preciso atualizar a página.');}
			});
			$.ajax({
				url:'/index.html',
				success: function(direita){direita=$(direita).find('#direita fieldset#texto');$('#meio').append(direita);},
				error: function(){if(msgExec==0){alert(msgErroIni+"a lateral direita"+msgErroFim);location.reload();msgExec++}}
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