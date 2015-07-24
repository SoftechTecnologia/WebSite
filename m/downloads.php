<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Thiago Jourdan" />
		<meta name="viewport" content="user-scalable=no" />
		<title>Central de Downloads	- Softech</title>
		<?php
			$pathLocal="/site-softech";
			if($_SERVER['SERVER_ADDR']=='::1'||$_SERVER['SERVER_ADDR']=='127.0.0.1'){
		?>
		<link rel="shortcut icon" href="<?php echo $pathLocal ?>/img/icon.ico" />
		<script src="<?php echo $pathLocal ?>/js/jQuery.js"></script>
		<script src="<?php echo $pathLocal ?>/m/js/jquery.fs.shifter.js"></script>
		<script src="<?php echo $pathLocal ?>/m/js/var.js"></script>
		<script src="<?php echo $pathLocal ?>/m/js/js.js"></script>
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/m/jquery.fs.shifter.css" />
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/css.css" />
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/m/css.css" />
		<?php
			}else{
		?>
		<link rel="shortcut icon" href="/img/icon.ico" />
		<script src="/js/jQuery.js"></script>
		<script src="/m/js/jquery.fs.shifter.js"></script>
		<script src="/m/js/var.js"></script>
		<script src="/m/js/js.js"></script>
		<link rel="stylesheet" href="/m/jquery.fs.shifter.css" />
		<link rel="stylesheet" href="/css.css" />
		<link rel="stylesheet" href="/m/css.css" />
		<?php
			}
		?>
	</head>
	<body class="shifter">
		<div class="shifter-page">
			<p class="shifter-handle"></p>
			<div class="logo"></div>
			<div class="meio">
				<fieldset class="texto">
					<h3>Página não disponível na versão Mobile</h3>
					<p>Desculpe, mas esta página está disponível somente na versão "Desktop" desse site.</p>
					<p>Entre no site a partir de um computador para ter acesso aos arquivos.</p>
				</fieldset>
			</div>
		</div>
		<nav class="shifter-navigation"></nav>
		<footer> <!-- Copiado de "/index.html" -->
	</body>
</html>