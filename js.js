// Links da página
var principal="/",sobreNos="/sobre-nos.html",produtosEServicos="/produtos-e-servicos",downloads="/downloads.html",fale="/fale-conosco.html",doeSangue="/promocoes/campanha-doe-sangue.html";
// Fade em todas as páginas
$(document).ready(function (){
	$('body').css('opacity', '0').fadeTo(500, 1,'swing');
});
// Link para abrir e pôr foco em chat
function chatlink(){
	$('#habla_oplink_a').click();
	$('#habla_wcsend_input').focus();
};
// Redirecionamento para site mobile
var url_mobile = 'http://softechtecnologia.hol.es/m';
(function(a,b){
	if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))
		window.location=b
})(navigator.userAgent||navigator.vendor||window.opera,url_mobile);
(function(i,s,o,g,r,a,m){
	i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)
	},
	i[r].l=1*new Date();
	a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];
	a.async=1;
	a.src=g;
	m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-54058374-1', 'auto');
ga('send', 'pageview');

// Requisições Ajax
$(function(){
	$.ajax({
		url:'/index.html',
		success: function(topo){topo=$(topo).find('#bg-logo-softech, #menu');$('#topo').html(topo);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
	$.ajax({
		url:'/index.html',
		success: function(esquerda){esquerda=$(esquerda).find('#esquerda #fb, #esquerda a');$('#corpo #esquerda').html(esquerda);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
	$.ajax({
		url:'/index.html',
		success: function(txtimg){txtimg=$(txtimg).find('#direita fieldset#texto');$('#direita').html(txtimg);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
	$.ajax({
		url:'/index.html',
		success: function(rodape){rodape=$(rodape).find('#rodapetext');$('#rodape').html(rodape);},
		error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
	});
});
// Interface de Downloads
// Imagens
var iconVoltar="data:image/png;base64,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";
// Padrões de código
var progIni="<p>- <a class='linkintext' target='_blank' href='";
var progDown="' title='Clique para fazer o download'>";
var conjProgIni="<p>- <a class='linkintext' target='_blank' onclick='";
var conjProgIr="' title='Clique para ir'>";
var voltaIni="<p><img src='"+iconVoltar+"' width='15px' height='15px' /> <a class='linkintext' onclick='";
var voltaFim="'>Voltar</a></p>";
// Sistemas Operacionais
var windows="<p>- <a class='linkintext' onclick='progWin();'>Windows</a></p>";
var mac="<p>- <a class='linkintext' onclick='progMac()'>Mac OS</a></p>";
var linux="<p>- Linux: <a href='/fale-conosco.html' class='linkintext'>Diga-nos o que precisa!</a></p>";
// Windows
// Programas Windows
var stSupport=progIni+"http://goo.gl/tcEqog"+progDown+"Suporte Softech</a>: Atalho aos nossos contatos;</p>";
var sevenZipConj=conjProgIni+"sZip()"+conjProgIr+"7-zip</a>: Manipulador de arquivos compactos;</p>";//Função
var winProg=conjProgIni+"winApp()"+conjProgIr+"Apps Windows</a>: Programas de tratamento;</p>";//Função
var acessoRemoto=conjProgIni+"remAcces()"+conjProgIr+"Acesso Remoto</a>: Programas de acesso remoto;</p>";
var ccleaner=progIni+"http://goo.gl/cucP6P"+progDown+"CCleaner</a>: Otimizador de Sistema;</p>";
var cdburner=progIni+"http://goo.gl/ZXoesq"+progDown+"CD Burner XP</a>: Gravador de Mídia;</p>";
var cpuz=progIni+"http://goo.gl/47fe47"+progDown+"CPU-Z</a>: Leitor de Hardware;</p>";
var firefox=progIni+"http://goo.gl/ZuUODl"+progDown+"Firefox</a>: Navegador;</p>";
var chrome=progIni+"http://goo.gl/N5lQIR"+progDown+"Chrome</a>: Navegador;</p>";
var hwmonitor=progIni+"http://goo.gl/CHK2U4"+progDown+"HWMonitor</a>: Leitor de Hardware;</p>";
var lofficeWin=progIni+"http://goo.gl/1qcJSn"+progDown+"LibreOffice</a>: Pacote office;</p>";
var mediaPlayerConj=conjProgIni+"mPlayer()"+conjProgIr+"Media Player Classic</a>: Player de vídeo;</p>";//Função
var mse=progIni+"http://goo.gl/HwjJbF"+progDown+"Microsoft Security Essentials</a>: Antivírus;</p>";
var silverlight=progIni+"http://goo.gl/Dm9ZG0"+progDown+"Microsoft Silverlight</a>: Plugin para navegador;</p>";
var pdfarc=progIni+"http://goo.gl/6W9zbn"+progDown+"PDF Architect</a>: Leitor/Editor de PDFs;</p>";
var unlocker=progIni+"http://goo.gl/Y74RSS"+progDown+"Unlocker</a>: Manipulador de arquivos;</p>";
var utorrent=progIni+"http://goo.gl/t5dyx7"+progDown+"µTorrent</a>: Cliente BitTorrent;</p>";
var programasWin=stSupport+sevenZipConj+winProg+acessoRemoto+ccleaner+cdburner+cpuz+firefox+chrome+hwmonitor+lofficeWin+mediaPlayerConj+mse+silverlight+pdfarc+unlocker+utorrent;
// Programas Mac
var lofficeMac=progIni+"http://goo.gl/nSeYxU"+progDown+"LibreOffice</a>: Pacote office (OS 10.8+);</p>";
var programasMac=lofficeMac;
function def(){
	$('#opcoes')
	.fadeOut(500, function(){
		$(this)
		.html(windows+mac+linux)
		.fadeIn(500)
	});
}
function progWin(){
	var link="def()";
	var voltar=voltaIni+link+voltaFim;
	$('#opcoes')
	.fadeOut(500, function(){
		$(this)
		.html(voltar+programasWin+voltar)
		.fadeIn(500)
	})
}
function remAcces(){
	var link="progWin()";
	var voltar=voltaIni+link+voltaFim;
	$('#opcoes')
	.fadeOut(500, function(){
		var amAd=progIni+"http://goo.gl/fyPhxI"+progDown+"Ammyy Admin</a>;</p>";
		var teamViewer=progIni+"http://goo.gl/53TnGK"+progDown+"TeamViewer</a>;</p>";
		$(this)
		.html("<p><h3>7-zip</h3></p>"+voltar+amAd+teamViewer+voltar)
		.fadeIn(500)
	})
}
function sZip(){
	var link="progWin()";
	var voltar=voltaIni+link+voltaFim;
	$('#opcoes')
	.fadeOut(500, function(){
		var sevenZip86=progIni+"http://goo.gl/eSFSgn"+progDown+"Versão de 32 bits (x86)</a></p>";
		var sevenZip64=progIni+"http://goo.gl/EZfmBV"+progDown+"Versão de 64 bits (x64)</a></p>";
		$(this)
		.html("<p><h3>7-zip</h3></p>"+voltar+sevenZip86+sevenZip64+voltar)
		.fadeIn(500)
	})
}
function mPlayer(){
	var link="progWin()";
	var voltar=voltaIni+link+voltaFim;
	$('#opcoes')
	.fadeOut(500, function(){
		var mediaPlayer86=progIni+"http://goo.gl/EDQKJn"+progDown+"Versão de 32 bits (x86)</a></p>";
		var mediaPlayer64=progIni+"http://goo.gl/CMnZtu"+progDown+"Versão de 64 bits (x64)</a></p>";
		$(this)
		.html("<p><h3>Media Player Classic</h3></p>"+voltar+mediaPlayer86+mediaPlayer64+voltar)
		.fadeIn(500)
	})
}
function winApp(){
	var link="progWin()";
	var voltar=voltaIni+link+voltaFim;
	$('#opcoes')
	.fadeOut(500, function(){
		var keyfinder=progIni+"http://goo.gl/d5Degi"+progDown+"Key Finder</a>: Verificador de Serial Windows;</p>";
		var persoPanel=progIni+"http://goo.gl/iyFqxV"+progDown+"Personalization Panel</a>: Manipulador Windows;</p>";
		var mbrRegenarator=progIni+"http://goo.gl/CJdBUB"+progDown+"MBR Regenerator</a>: Verificador de Serial Windows;</p>";
		$(this)
		.html("<p><h3>Aplicativos Windows</h3></p>"+voltar+keyfinder+persoPanel+mbrRegenarator+voltar)
		.fadeIn(500)
	})
}
// Mac
function progMac(){
	var link="def()";
	var voltar=voltaIni+link+voltaFim;
	$('#opcoes')
	.fadeOut(500, function(){
		$(this)
		.html(programasMac+voltar)
		.fadeIn(1000);
	})
}