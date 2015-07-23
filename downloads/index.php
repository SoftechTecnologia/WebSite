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
		<!-- Início do Chat Online -->
		<script data-cfasync="false">
			/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
			f[z]=function(){(a.s=a.s||[]).push(arguments)};var a=f[z]._={
			},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
			f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
			0:+new Date};a.P=function(u){
			a.p[u]=new Date-a.p[0]};function s(){
			a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
			hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
			return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
			b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
			b.contentWindow[g].open()}catch(w){
			c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
			var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
			b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})
			({loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
			/* custom configuration goes here (www.olark.com/documentation) */
			olark.identify('7364-449-10-2021');/*]]>*/
		</script>
		<!-- Fim do Chat Online -->
		<!--[if lte IE 9]>
			<script>ie();</script>
		<![endif]-->
	</head><!-- Head -->
	<body>
		<div id="topo"></div><!-- Topo --><!-- Copiado de index.html -->
		<div id="corpo" style="width:100%;">
			<div id="esquerda" align="center"></div><!-- Copiado de index.html -->
			<div id="meio">
				<fieldset id="texto" align="left">
					<h3 align="center">Navegue abaixo para fazer os downloads</h3>
					<span id="entrelinha">Todos os softwares aqui disponibilizados são gratuitos ou versão para testes.</span><br>
					<div class="oss">
						<p class="windows">- <a class='linkintext' onclick='page(0,0)'>Windows</a></p>
						<p class="mac">- <a class='linkintext' onclick='page(1,0)'>Mac OS</a></p>
						<p class="linux">- <a class='linkintext' onclick='page(2,0)'>Linux</a></p>
					</div>
				</fieldset>
			</div>
			<div id="direita" align="center"></div><!-- Copiado de index.html -->
		</div><!-- Corpo -->
		<div id="rodape"></div><!-- Copiado de index.html -->
	</body>
</html>