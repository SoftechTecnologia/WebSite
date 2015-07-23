// Navegação
if (window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1"){
	var
	principal="/site-softech/",
	sobreNos="/site-softech/sobre-nos.html",
	produtosEServicos="/site-softech/produtos-e-servicos",
	downloads="/site-softech/downloads",
	fale="/site-softech/fale-conosco.html",
	doeSangue="/site-softech/promocoes/campanha-doe-sangue.html",
	mandaMail="/site-softech/envio-de-email/sendmail.php";
}else{
	var
	principal="/",
	sobreNos="/sobre-nos.html",
	produtosEServicos="/produtos-e-servicos",
	downloads="/downloads",
	fale="/fale-conosco.html",
	doeSangue="/promocoes/campanha-doe-sangue.html",
	mandaMail="/envio-de-email/sendmail.php";
}
// Erro no Ajax
var msgErroIni="Ocorreu um erro ao inicializar ";
var msgErroFim=". A página será recarregada";
var msgExec=0;
// Outras
var fdTm=600;