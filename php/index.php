<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<?php
			$pathLocal="/site-softech";
			if($_SERVER['SERVER_ADDR']=='::1'||$_SERVER['SERVER_ADDR']=='127.0.0.1'){
		?>
		<script src="<?php echo $pathLocal ?>/js/var.js"></script>
		<?php
			}else{
		?>
		<script src="/js/var.js"></script>
		<?php
			}
		?>
		<script>location.href=naoAutorizado</script>
	</head>
	<body></body>
</html>