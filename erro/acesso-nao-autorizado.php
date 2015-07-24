<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Thiago Jourdan" />
		<title>403 - Acesso não autorizado</title>
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
					<h3>403 - Acesso não autorizado</h3>
					<p>Você não tem permissão suficiente para acessar o link em questão.</p>
					<p>Caso você ache que esteja se encontrando com esta página por engano, por favor, nos comunique no <a onclick="chatlink()" class="linkintext">Chat Online</a> ou pelo formulário de e-mail à direita.</p>
					<p>Utilize o menu de navegação acima para voltar ao site.</p>
				</fieldset>
			</div>
			<div class="direita"></div><!-- Copiado de index.html -->
		</div><!-- Corpo -->
		<footer></footer><!-- Copiado de index.html -->
	</body>
</html>