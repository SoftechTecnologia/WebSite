<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Clique aqui para baixar programas e utilitários diversos." />
		<meta name="author" content="Thiago Jourdan" />
		<title>Solicitação de serviço - Softech</title>
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
		<header></header><!-- Copiado de index.php -->
		<div class="corpo">
			<div class="esquerda"></div><!-- Copiado de index.php -->
			<div class="meio">
				<fieldset class="texto">
					<h3>Em manutenção</h3>
					<p>Estamos trabalhando para finalizar esse sistema pra você poder utilizar.</p>
				</fieldset>
			</div>
			<div class="direita"></div><!-- Copiado de index.php -->
		</div><!-- Corpo -->
		<footer></footer><!-- Copiado de index.php -->
	</body>
</html>