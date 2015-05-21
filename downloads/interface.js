function def(){//Página default
	$('.oss')
	.fadeOut(fdTm, function(){
		var path="/downloads/index.html";
		$.ajax({
			url:path,
			success: function(windows){windows=$(windows).find('.windows');$('.oss').html(windows);},
			error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
		});
		$.ajax({
			url:path,
			success: function(mac){mac=$(mac).find('.mac');$('.oss').append(mac);},
			error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
		});
		$.ajax({
			url:path,
			success: function(linux){linux=$(linux).find('.linux');$('.oss').append(linux);},
			error: function(){alert('Ocorreu um erro ao inicializar o site. \u00c9 preciso atualizar a p\u00e1gina.');}
		});
		$(this)
		.fadeIn(fdTm)
	});
}
function page(sys,pag){//Elementos da página
	var linkV="def()";
	var voltar=voltaIni+linkV+voltaFim;
	var ir=linkIni+"page("+sys+",0)'>1</a>";
	pegaPag(sys);
	for (i=1;i<paginas[sys].length;i++){
		ir=linkIni+"page("+sys+","+i+")'>"+(i+1)+"</a>"+ir;
	}
	var navegacao=voltar+ir+"</p>";
	$('.oss')
	.fadeOut(fdTm, function(){
		$(this)
		.html("<p><h3>Página "+(pag+1)+"</h3></p>"+navegacao+paginas[sys][pag]+navegacao)
		.fadeIn(fdTm)
	})
}
function pegaPag(sys){//Itens da página
	numPag=0;
	for(var atualProg=0;atualProg<progs[sys].length;numPag++){
		paginas[sys][numPag]="";
		for(var numProg=0;numProg<itPorPag&&atualProg<progs[sys].length;numProg++){
			paginas[sys][numPag]=paginas[sys][numPag]+progs[sys][atualProg];
			atualProg++;
		}
	}
}
function remAcces(page){
	var linkV="page(0,"+page+")";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		var amAd=progIni+"http://goo.gl/fyPhxI"+progDown+"Ammyy Admin</a>;</p>";
		var teamViewer=progIni+"http://goo.gl/53TnGK"+progDown+"TeamViewer</a>;</p>";
		$(this)
		.html("<p><h3>Acesso Remoto</h3></p>"+voltar+amAd+teamViewer+voltar)
		.fadeIn(fdTm)
	})
}
function sZip(page){
	var linkV="page(0,"+page+")";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		var sZip86=progIni+"http://goo.gl/eSFSgn"+progDown+"Versão de 32 bits (x86)</a></p>";
		var sZip64=progIni+"http://goo.gl/EZfmBV"+progDown+"Versão de 64 bits (x64)</a></p>";
		$(this)
		.html("<p><h3>7-zip</h3></p>"+voltar+sZip86+sZip64+voltar)
		.fadeIn(fdTm)
	})
}
function mpc(page){
	var linkV="page(0,"+page+")";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		var mpc86=progIni+"http://goo.gl/EDQKJn"+progDown+"Versão de 32 bits (x86)</a></p>";
		var mpc64=progIni+"http://goo.gl/CMnZtu"+progDown+"Versão de 64 bits (x64)</a></p>";
		$(this)
		.html("<p><h3>Media Player Classic</h3></p>"+voltar+mpc86+mpc64+voltar)
		.fadeIn(fdTm)
	})
}
function mse(page){
	var linkV="page(0,"+page+")";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		var mse86=progIni+"http://goo.gl/yWxgG9"+progDown+"Versão de 32 bits (x86)</a></p>";
		var mse64=progIni+"http://goo.gl/Ta1FJr"+progDown+"Versão de 64 bits (x64)</a></p>";
		$(this)
		.html("<p><h3>Microsoft Security Essentials</h3></p>"+voltar+mse86+mse64+voltar)
		.fadeIn(fdTm)
	})
}
function appsWin(page){
	var linkV="page(0,"+page+")";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		var kF=progIni+"http://goo.gl/d5Degi"+progDown+"Key Finder</a>: Verificador de Serial Windows;</p>";
		var pP=progIni+"http://goo.gl/iyFqxV"+progDown+"Personalization Panel</a>: Manipulador Windows;</p>";
		var mbrR=progIni+"http://goo.gl/CJdBUB"+progDown+"MBR Regenerator</a>: Verificador de Serial Windows;</p>";
		$(this)
		.html("<p><h3>Aplicativos Windows</h3></p>"+voltar+kF+pP+mbrR+voltar)
		.fadeIn(fdTm)
	})
}
function browsers(page){
	var linkV="page(0,"+page+")";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		var ff=progIni+"http://goo.gl/ZuUODl"+progDown+"Firefox</a>: Navegador;</p>";
		var gc=progIni+"http://goo.gl/N5lQIR"+progDown+"Google Chrome</a>: Navegador;</p>";
		$(this)
		.html("<p><h3>Browsers</h3></p>"+voltar+ff+gc+voltar)
		.fadeIn(fdTm)
	})
}