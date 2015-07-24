<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Thiago Jourdan" />
		<title>Mensagem enviada com sucesso</title>
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
					<h3>Mensagem enviada com sucesso!</h3>
					<p>Uma cópia da mensagem foi enviada para o e-mail fornecido no formulário. Caso a cópia não chegue na sua caixa de entrada, por favor, cheque a Caixa de Spams ou a Lixeira e, caso não esteja lá, pedimos que reenvie o e-mail no formulário à direita.</p>
					<p>Estando tudo confirmado, aproveite enquanto não retornamos o contato para analisar os serviços que oferecemos <a onclick="location.href=produtosEServicos" class="linkintext">clicando aqui</a>.</p>
					<p>Obrigado por entrar em contato conosco. Faremos o possível para lhe atender o mais rápido possível.</p>
				</fieldset>
			</div>
			<div class="direita"></div><!-- Copiado de index.html -->
		</div><!-- Corpo -->
		<footer></footer><!-- Copiado de index.html -->
	</body>
</html>