<?php
$pathLocal="";
if($_SERVER['SERVER_ADDR']=='::1'||$_SERVER['SERVER_ADDR']=='127.0.0.1'){$pathLocal="/site-softech";}
echo '
	<meta charset="utf-8" />
	<meta name="author" content="Thiago Jourdan" />
	<link rel="stylesheet" href="'.$pathLocal.'/css.css" />
	<link rel="shortcut icon" href="'.$pathLocal.'/img/icon.ico" />
	<script src="'.$pathLocal.'/js/jQuery.js"></script>
	<script src="'.$pathLocal.'/js/var.js"></script>
	<script src="'.$pathLocal.'/js/js.js"></script>
';
?>