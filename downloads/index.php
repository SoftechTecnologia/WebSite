<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Clique aqui para baixar programas e utilitários diversos." />
		<meta name="author" content="Thiago Jourdan" />
		<title>Central de Downloads	- Softech</title>
		<?php
			$pathLocal="/site-softech";
			if($_SERVER['SERVER_ADDR']=='::1'||$_SERVER['SERVER_ADDR']=='127.0.0.1'){
		?>
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/css.css" />
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/downloads/css.css" />
		<link rel="shortcut icon" href="<?php echo $pathLocal ?>/img/icon.ico" />
		<script src="<?php echo $pathLocal ?>/js/jQuery.js"></script>
		<script src="<?php echo $pathLocal ?>/js/var.js"></script>
		<script src="<?php echo $pathLocal ?>/js/js.js"></script>
		<script src="<?php echo $pathLocal ?>/downloads/var.js"></script>
		<script src="<?php echo $pathLocal ?>/downloads/progs.js"></script>
		<script src="<?php echo $pathLocal ?>/downloads/interface.js"></script>
		<?php
			}else{
		?>
		<link rel="stylesheet" href="/css.css" />
		<link rel="stylesheet" href="/downloads/css.css" />
		<link rel="shortcut icon" href="/img/icon.ico" />
		<script src="/js/jQuery.js"></script>
		<script src="/js/var.js"></script>
		<script src="/js/js.js"></script>
		<script src="/downloads/var.js"></script>
		<script src="/downloads/progs.js"></script>
		<script src="/downloads/interface.js"></script>
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
					<h3 align="center">Navegue abaixo para fazer os downloads</h3>
					<span class="entrelinha">Todos os softwares aqui disponibilizados são gratuitos ou versão para testes.</span><br>
					<div class="oss">
						<p class="windows">- <a class='linkintext' onclick='page(0,0)'>Windows</a></p>
						<p class="mac">- <a class='linkintext' onclick='page(1,0)'>Mac OS</a></p>
						<p class="linux">- <a class='linkintext' onclick='page(2,0)'>Linux</a></p>
					</div>
				</fieldset>
			</div>
			<div class="direita"></div><!-- Copiado de index.html -->
		</div><!-- Corpo -->
		<footer></footer><!-- Copiado de index.html -->
	</body>
</html>