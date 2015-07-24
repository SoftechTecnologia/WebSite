<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Veja quais serviços especializados em Microcomputadores, Notebooks e Netbooks nós oferecemos. Clique aqui!" />
		<meta name="author" content="Thiago Jourdan" />
		<title>Produtos e Serviços - Softech</title>
		<?php
			$pathLocal="/site-softech";
			if($_SERVER['SERVER_ADDR']=='::1'||$_SERVER['SERVER_ADDR']=='127.0.0.1'){
		?>
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/css.css" />
		<link rel="stylesheet" href="<?php echo $pathLocal ?>/produtos-e-servicos/css.css" />
		<link rel="shortcut icon" href="<?php echo $pathLocal ?>/img/icon.ico" />
		<script src="<?php echo $pathLocal ?>/js/jQuery.js"></script>
		<script src="<?php echo $pathLocal ?>/js/var.js"></script>
		<script src="<?php echo $pathLocal ?>/js/js.js"></script>
		<?php
			}else{
		?>
		<link rel="stylesheet" href="/css.css" />
		<link rel="stylesheet" href="/produtos-e-servicos/css.css" />
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
				<table class="texto" cellpadding="10px">
					<th colspan=2 class="top titulo">Manutenção em Geral</th>
					<tr class="opcoesServicos">
						<td colspan=2><a class="servico">Manutenção Básica em Hardware, Software e Periféricos de Microcomputadores</a></td>
					</tr>
					<th colspan=2 class="titulo">Serviços em Software</th>
					<tr class="opcoesServicos">
						<td><a class="servico">Reinstalação de SO</a></td>
						<td><a class="servico">Produção e Instalação de Software</a></td>
					</tr>
					<tr class="opcoesServicos">
						<td><a class="servico">Sistema de Backup</a></td>
						<td><a class="servico">Recuperação de Arquivos</a></td>
					</tr>
					<th colspan=2 class="titulo">Serviços em Hardware</th>
					<tr class="opcoesServicos">
						<td><a class="servico">Limpeza de Hardware</a></td>
						<td><a class="servico">Recuperação de Hardwares em Geral</a></td>
					</tr>
					<th colspan=2 class="titulo">Web Development</th>
					<tr class="opcoesServicos">
						<td><a class="servico">DHTML, ou HTML5</a></td>
						<td><a class="servico">Biblioteca jQuery</a></td>
					</tr>
					<tr class="opcoesServicos">
						<td class="bottom-left"><a class="servico">PHP</a></td>
						<td class="bottom-right"><a class="servico">Formas de contato automatizadas</a></td>
					</tr>
				</table>
			</div>
			<div class="direita"></div><!-- Copiado de index.php -->
		</div><!-- Corpo -->
		<footer></footer><!-- Copiado de index.php -->
	</body>
</html>