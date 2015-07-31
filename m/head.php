<?php
	$pathLocal="";
	if($_SERVER['SERVER_ADDR']=='::1'||$_SERVER['SERVER_ADDR']=='127.0.0.1'){
		$pathLocal="/site-softech";
	}
echo '
	<meta charset="utf-8" />
	<meta name="author" content="Thiago Jourdan" />
	<meta name="viewport" content="user-scalable=no" />
	<link rel="shortcut icon" href="'.$pathLocal.'/img/icon.ico" />
	<script src="'.$pathLocal.'/js/jQuery.js"></script>
	<script src="'.$pathLocal.'/m/js/jquery.fs.shifter.js"></script>
	<script src="'.$pathLocal.'/m/js/var.js"></script>
	<script src="'.$pathLocal.'/m/js/js.js"></script>
	<link rel="stylesheet" href="'.$pathLocal.'/m/jquery.fs.shifter.css" />
	<link rel="stylesheet" href="'.$pathLocal.'/css.css" />
	<link rel="stylesheet" href="'.$pathLocal.'/m/css.css" />
';
?>