<!DOCTYPE html>
<html>
	<head>
		<?php require_once('../pageContents/head.php'); ?>
		<title>Mensagem enviada com sucesso</title>
		<!--[if lte IE 9]>
			<script>ie();</script>
		<![endif]-->
	</head>
	<body>
		<header><?php require_once('../pageContents/header.php'); ?></header>
		<div class="corpo">
			<div class="esquerda"><?php require_once('../pageContents/corpoEsquerda.php'); ?></div>
			<div class="meio">
				<fieldset class="texto">
					<h3>Mensagem enviada com sucesso!</h3>
					<p>Uma cópia da mensagem foi enviada para o e-mail fornecido no formulário. Caso a cópia não chegue na sua caixa de entrada, por favor, cheque a Caixa de Spams ou a Lixeira e, caso não esteja lá, pedimos que reenvie o e-mail no formulário à direita.</p>
					<p>Estando tudo confirmado, aproveite enquanto não retornamos o contato para analisar os serviços que oferecemos <a onclick="location.href=produtosEServicos" class="linkintext">clicando aqui</a>.</p>
					<p>Obrigado por entrar em contato conosco. Faremos o possível para lhe atender o mais rápido possível.</p>
				</fieldset>
			</div>
			<div class="direita"><?php require_once('../pageContents/corpoDireita.php'); ?></div>
		</div><!-- Corpo -->
		<footer><?php require_once('../pageContents/footer.php'); ?></footer>
	</body>
</html>