<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Thiago Jourdan" />
		<title>Ocorreu um erro</title>
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
					<h3>Erro no envio da mensagem!</h3>
					<p>Sentimos muito pelo transtorno, mas pedimos que tente reenviar o e-mail no formulário à direita.</p>
					<p>Caso este erro seja reincidente, pedimos que acesse o seu software gerenciador de e-mails (<a class="linkintext" target="_blank" href="http://goo.gl/NSJeuw">Outlook</a>, <a class="linkintext" target="_blank" href="http://goo.gl/IpXRmC">Gmail</a>, <a class="linkintext" target="_blank" href="http://goo.gl/WD7aOn">Yahoo</a>, <a href="http://goo.gl/3oSmmO" class="linkintext" target="_blank">Roundclub Webmail</a>, <a href="http://goo.gl/SQ27fU" target="_blank" class="linkintext">Squirrelmail</a> etc.) ou utilize qualquer outra forma de contato, e nos comunique do ocorrido.</p>
					<p>Contate-nos, também, pela nossa página no Facebook. Basta acessar <a href="http://fb.com/softechtecnology" target="_blank" class="linkintext">este link</a> e nos enviar uma mensagem privada.</p>
					<p>E, novamente, pedimos desculpas pelo transtorno causado pela falha no nosso sistema. Lembrando que nos deixando ciente do problema que está ocorrendo, poderemos trabalhar para solucioná-lo o mais rápido possível.</p>
				</fieldset>
			</div>
			<div class="direita"></div><!-- Copiado de index.html -->
		</div><!-- Corpo -->
		<footer></footer><!-- Copiado de index.html -->
	</body>
</html>