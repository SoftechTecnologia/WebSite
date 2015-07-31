<!DOCTYPE html>
<html>
	<head>
		<?php require_once('../pageContents/head.php'); ?>
		<title>Ocorreu um erro</title>
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
					<h3>Erro no envio da mensagem!</h3>
					<p>Sentimos muito pelo transtorno, mas pedimos que tente reenviar o e-mail no formulário à direita.</p>
					<p>Caso este erro seja reincidente, pedimos que acesse o seu software gerenciador de e-mails (<a class="linkintext" target="_blank" href="http://goo.gl/NSJeuw">Outlook</a>, <a class="linkintext" target="_blank" href="http://goo.gl/IpXRmC">Gmail</a>, <a class="linkintext" target="_blank" href="http://goo.gl/WD7aOn">Yahoo</a>, <a href="http://goo.gl/3oSmmO" class="linkintext" target="_blank">Roundclub Webmail</a>, <a href="http://goo.gl/SQ27fU" target="_blank" class="linkintext">Squirrelmail</a> etc.) ou utilize qualquer outra forma de contato, e nos comunique do ocorrido.</p>
					<p>Contate-nos, também, pela nossa página no Facebook. Basta acessar <a href="http://fb.com/softechtecnology" target="_blank" class="linkintext">este link</a> e nos enviar uma mensagem privada.</p>
					<p>E, novamente, pedimos desculpas pelo transtorno causado pela falha no nosso sistema. Lembrando que nos deixando ciente do problema que está ocorrendo, poderemos trabalhar para solucioná-lo o mais rápido possível.</p>
				</fieldset>
			</div>
			<div class="direita"><?php require_once('../pageContents/corpoDireita.php'); ?></div>
		</div><!-- Corpo -->
		<footer><?php require_once('../pageContents/footer.php'); ?></footer>
	</body>
</html>