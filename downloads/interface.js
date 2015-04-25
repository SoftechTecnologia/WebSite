function def(){
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
function page(sys,pag){
	var linkV="def()";
	var voltar=voltaIni+linkV+voltaFim;
	if (sys=="win"){
		var sys="win";
		var ir=linkIni+"page(\""+sys+"\","+linkIr[4]+linkIni+"page(\""+sys+"\","+linkIr[3]+linkIni+"page(\""+sys+"\","+linkIr[2]+linkIni+"page(\""+sys+"\","+linkIr[1];
		var navegacao=voltar+ir+"</p>";
		$('.oss')
		.fadeOut(fdTm, function(){
			$(this)
			.html("<p><h3>Página "+pag+"</h3></p>"+navegacao+pagW[pag]+navegacao)
			.fadeIn(fdTm)
		})
	}
	if(sys=="mac"){
		var sys="mac";
		var ir=linkIni+"page(\""+sys+"\","+linkIr[1];
		var navegacao=voltar+ir+"</p>";
		$('.oss')
		.fadeOut(fdTm, function(){
			$(this)
			.html("<p><h3>Página "+pag+"</h3></p>"+navegacao+pagM[pag]+navegacao)
			.fadeIn(fdTm);
		})
	}
}
function remAcces(){
	var linkV="pagWin(2)";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		var amAd=progIni+"http://goo.gl/fyPhxI"+progDown+"Ammyy Admin</a>;</p>";
		var teamViewer=progIni+"http://goo.gl/53TnGK"+progDown+"TeamViewer</a>;</p>";
		$(this)
		.html("<p><h3>7-zip</h3></p>"+voltar+amAd+teamViewer+voltar)
		.fadeIn(fdTm)
	})
}
function sZip(){
	var linkV="progWin()";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		var sevenZip86=progIni+"http://goo.gl/eSFSgn"+progDown+"Versão de 32 bits (x86)</a></p>";
		var sevenZip64=progIni+"http://goo.gl/EZfmBV"+progDown+"Versão de 64 bits (x64)</a></p>";
		$(this)
		.html("<p><h3>7-zip</h3></p>"+voltar+sevenZip86+sevenZip64+voltar)
		.fadeIn(fdTm)
	})
}
function mPlayer(){
	var linkV="progWin()";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		var mediaPlayer86=progIni+"http://goo.gl/EDQKJn"+progDown+"Versão de 32 bits (x86)</a></p>";
		var mediaPlayer64=progIni+"http://goo.gl/CMnZtu"+progDown+"Versão de 64 bits (x64)</a></p>";
		$(this)
		.html("<p><h3>Media Player Classic</h3></p>"+voltar+mediaPlayer86+mediaPlayer64+voltar)
		.fadeIn(fdTm)
	})
}
function winApp(){
	var linkV="progWin()";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		$(this)
		.html("<p><h3>Aplicativos Windows</h3></p>"+voltar+keyfinder+persoPanel+mbrRegenarator+voltar)
		.fadeIn(fdTm)
	})
}
function naveg(){
	var linkV="progWin()";
	var voltar=voltaIni+linkV+voltaFim;
	$('.oss')
	.fadeOut(fdTm, function(){
		$(this)
		.html("<p><h3>Navegadores</h3></p>"+voltar+firefox+chrome+voltar)
		.fadeIn(fdTm)
	})
}