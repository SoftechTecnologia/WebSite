// Links da página
var
pathLocal="/site-softech",
principal="/m",
sobreNos="/m/sobre-nos.html",
produtosEServicos="/m/produtos-e-servicos",
downloads="/m/downloads.html",
fale="/m/fale-conosco.html",
mandaMail="/m/envio-de-email/sendmail.php";
if(window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1"){
	principal=pathLocal+principal;
	sobreNos=pathLocal+sobreNos;
	produtosEServicos=pathLocal+produtosEServicos;
	downloads=pathLocal+downloads;
	fale=pathLocal+fale;
	mandaMail=pathLocal+mandaMail;
}