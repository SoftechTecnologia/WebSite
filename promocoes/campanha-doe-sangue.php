<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Não hesite em nos contatar para obter um serviço especializado em informática. Clique aqui e solicite manutenção em Microcomputadores, Notebooks e Netbooks!" />
		<meta name="author" content="Thiago Jourdan" />
		<title>Doe Sangue - Softech</title>
		<?php
			$pathLocal="/site-softech";
			if($_SERVER['SERVER_ADDR']=='::1'||$_SERVER['SERVER_ADDR']=='127.0.0.1'){
		?>
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/css.css" />
		<link rel="shortcut icon" href="<?php echo $pathLocal ?>/img/icon.ico" />
		<script src="<?php echo $pathLocal ?>/js/jQuery.js"></script>
		<script src="<?php echo $pathLocal ?>/js/var.js"></script>
		<script src="<?php echo $pathLocal ?>/js/js.js"></script>
		<?php
			}else{
		?>
		<link rel="stylesheet" href="/css.css" />
		<link rel="shortcut icon" href="/img/icon.ico" />
		<script src="/js/jQuery.js"></script>
		<script src="/js/var.js"></script>
		<script src="/js/js.js"></script>
		<?php
			}
		?>
		<!--[if lte IE 9]>
			<script>ie();</script>
		<![endif]-->
	</head>
	<body>
		<header></header><!-- Copiado de index.html -->
		<div class="corpo">
			<div class="esquerda"></div><!-- Copiado de index.html -->
			<div class="meio">
				<fieldset class="texto">
					<h3>Doe Sangue. Doe Vida.</h3>
					<p>A Softech preza o bem-estar das pessoas, promovendo campanhas de incentivo à realização de ações para o bem-estar social.</p>
					<p>A doação de sangue é um gesto simples, sem custo e que pode salvar uma ou mais vidas.</p>
					<p>Talvez a pessoa que necessitará desta doação, pode ser um ente querido ou um amigo.</p>
					<p>Pare para pensar: e se você recebesse uma ligação informando que sua mãe, pai, seu(sua) companheiro(a), etc., sofreu um acidente e que precisará de uma transfusão de sangue?</p>
					<p>Pensando nisso, a Softech lançou uma promoção para que você, leitor, cliente e, principalmente, pessoa, se sensibilize e busque pensar em como seus atos de solidariedade impactam fortemente na vida das pessoas.</p>
					<p><a class="linkintext">10%</a> de desconto em todos os serviços da Softech é o que os doadores de sangue têm direito. Ao mesmo tempo que você economiza, está salvando vidas.</p>
					<p>Todos estamos em busca de um mundo melhor. Todos queremos uma nova chance. Vamos proporcionar essa nova chance às pessoas. Seja um doador.</p>
				</fieldset>
			</div>
			<div class="direita"></div><!-- Copiado de index.html -->
		</div><!-- Corpo -->
		<footer></footer><!-- Copiado de index.html -->
	</body>
</html>