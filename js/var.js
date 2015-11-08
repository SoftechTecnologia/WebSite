// Navegação
var pathLocal="",
siteSoftech="http://www.softech.hol.es",
principal="/",
sobreNos="/sobre-nos.php",
produtosEServicos="/produtos-e-servicos",
downloads="/downloads",
fale="/fale-conosco.php",
doeSangue="/promocoes/campanha-doe-sangue.php",
mandaMail="/envio-de-email/sendmail.php",
naoAutorizado="/erro/acesso-nao-autorizado.php";
if (window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1"){
    pathLocal="/site-softech";
    principal=pathLocal+principal;
    sobreNos=pathLocal+sobreNos;
    produtosEServicos=pathLocal+produtosEServicos;
    downloads=pathLocal+downloads;
    fale=pathLocal+fale;
    doeSangue=pathLocal+doeSangue;
    mandaMail=pathLocal+mandaMail;
    naoAutorizado=pathLocal+naoAutorizado;
}
// Erro no Ajax
var msgErroIni="Ocorreu um erro ao inicializar ",
msgErroFim=". A página será recarregada",
msgExec=0;
// Outras
var fdTm=400;