<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Não hesite em nos contatar para obter um serviço especializado em informática. Clique aqui e solicite manutenção em Microcomputadores, Notebooks e Netbooks!" />
		<meta name="author" content="Thiago Jourdan" />
		<title>Fale Conosco - Softech</title>
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
					<h3>Fale Conosco!</h3>
					<p>Deseja esclarescer alguma dúvida, nos dar sugestões, informar algum erro ou conhecer melhor os nossos serviços?</p>
					<p>Estas são as nossas formas de contato:</p>
					<ul>
						<li>Móvel Oi:<br><a class="linkintext">(85) 9 8562-3662</a></li>
						<li>Móvel Tim:<br><a class="linkintext">(85) 9 9947-2102</a></li>
						<li>Endereço (temporário):<br><a href="https://goo.gl/maps/TZMy4" target="_blank" title="Clique aqui e veja no mapa" class="linkintext">Rua Fagundes Varela, 817, Casa 7</a></li>
						<li>E-mail:<br><a class="linkintext">adm@softechtecnologia.hol.es</a></li>
					</ul>
					<p>Contate-nos, também, pelo <a onclick="chatlink()" class="linkintext">Chat Online</a>.
					Caso estejamos off-line, ou queira um atendimento registrado, preencha
					o formulário abaixo com sua solicitação, dúvida ou sugestão, que faremos o possível para retornar o contato
					o mais breve possível.</p>
				</fieldset>
			</div>
			<div class="direita"></div><!-- Copiado de index.html -->
		</div>
		</div><!-- Corpo -->
		<footer></footer><!-- Copiado de index.html -->
	</body>
</html>