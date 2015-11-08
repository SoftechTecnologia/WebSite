function def(){//Página default
    $('.oss').fadeOut(fdTm, function(){
        var path="/downloads/index.php";
        if(window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1") path=pathLocal+path;
        var errorMsg="Ocorreu um erro ao inicializar o site. É preciso atualizar a página.";
        $.ajax({
            url:path,
            success: function(windows){windows=$(windows).find('.windows');$('.oss').html(windows);},
            error: function(){alert(errorMsg);location.href="/downloads";}
        });
        $.ajax({
            url:path,
            success: function(mac){mac=$(mac).find('.mac');$('.oss').append(mac);},
            error: function(){alert(errorMsg);location.href="/downloads";}
        });
        $.ajax({
            url:path,
            success: function(linux){linux=$(linux).find('.linux');$('.oss').append(linux);},
            error: function(){alert(errorMsg);location.href="/downloads";}
        });
        $(this).fadeIn(fdTm);
    });
}
function page(sys,pag){//Elementos da página
    var linkV="def()";
    var voltar=voltaIni+linkV+voltaFim;
    var ir=linkIni+"page("+sys+",0)'>1</a>";
    pegaPag(sys);
    for (i=1;i<paginas[sys].length;i++) ir=linkIni+"page("+sys+","+i+")'>"+(i+1)+"</a>"+ir;
    var navegacao=voltar+ir+"</p>";
    $('.oss').fadeOut(fdTm, function(){
        $(this).html("<p><h3>Página "+(pag+1)+"</h3></p>"+navegacao+paginas[sys][pag]+navegacao).fadeIn(fdTm);
    });
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
function appsWin(page){
    var linkV="page(0,"+page+")";
    var voltar=voltaIni+linkV+voltaFim;
    $('.oss').fadeOut(fdTm, function(){
        var kF=progIni+"https://goo.gl/JIXKvt"+progDown+"Key Finder</a>: Verificador de Serial Windows;</p>";
        var pP=progIni+"http://goo.gl/YnWkST"+progDown+"Personalization Panel</a>: Manipulador Windows;</p>";
        var mbrR=progIni+"http://goo.gl/84Mn55"+progDown+"MBR Regenerator</a>: Verificador de Serial Windows;</p>";
        $(this).html("<p><h3>Aplicativos Windows</h3></p>"+voltar+kF+pP+mbrR+voltar).fadeIn(fdTm);
    });
}
function remAcces(page){
    var linkV="page(0,"+page+")";
    var voltar=voltaIni+linkV+voltaFim;
    $('.oss').fadeOut(fdTm, function(){
        var amAd=progIni+"http://goo.gl/D9urea"+progDown+"Ammyy Admin</a>;</p>";
        var teamViewer=progIni+"https://www.teamviewer.com/"+progDown+"TeamViewer</a>;</p>"; // Encurtador Google não suportou o link
        var crd=progIni+"https://goo.gl/6DYhTZ"+progDown+"Chrome Remote Desktop</a> (Navegador \"Chrome\" requerido).</p>";
        $(this).html("<p><h3>Acesso Remoto</h3></p>"+voltar+amAd+teamViewer+crd+voltar).fadeIn(fdTm);
    });
}
function browsers(page){
    var linkV="page(0,"+page+")";
    var voltar=voltaIni+linkV+voltaFim;
    $('.oss').fadeOut(fdTm, function(){
        var ff=progIni+"https://goo.gl/UmtZ3Z"+progDown+"Firefox</a></p>";
        var gc=progIni+"http://goo.gl/WGphk6"+progDown+"Google Chrome</a></p>";
        var op=progIni+"http://goo.gl/msTkIb"+progDown+"Opera</a></p>";
        var sf=progIni+"http://goo.gl/4ZLCJa"+progDown+"Safari</a></p>";
        $(this).html("<p><h3>Browsers</h3></p>"+voltar+ff+gc+op+sf+voltar).fadeIn(fdTm);
    });
}
function office(page){
    var linkV="page(0,"+page+")";
    var voltar=voltaIni+linkV+voltaFim;
    $('.oss').fadeOut(fdTm, function(){
        var mo=progIni+"http://goo.gl/LVQ5no"+progDown+"Office 365</a></p>";
        var lo=progIni+"https://goo.gl/Du5bHq"+progDown+"LibreOffice</a></p>";
        var gd=progIni+"https://docs.google.com"+progDown+"Google Docs</a></p>";
        $(this).html("<p><h3>Pacotes Office</h3></p>"+voltar+mo+lo+gd+voltar).fadeIn(fdTm);
    });
}
function unlocker(page){
    var linkV="page(0,"+page+")";
    var voltar=voltaIni+linkV+voltaFim;
    $('.oss')
    .fadeOut(fdTm, function(){
        var x86=progIni+"http://goo.gl/0pFYW8"+progDown+"32 bits</a>;</p>";
        var x64=progIni+"http://goo.gl/ITWKPE"+progDown+"64 bits</a>;</p>";
        $(this).html("<p><h3>Unlocker</h3></p>"+voltar+x86+x64+voltar).fadeIn(fdTm);
    });
}
function SOs(page){
    var linkV="page(0,"+page+")";
    var voltar=voltaIni+linkV+voltaFim;
    $('.oss')
    .fadeOut(fdTm, function(){
        var win10=progIni+"https://goo.gl/DxUVyt"+progDown+"Windows 10 Home (32b/64b)</a>;</p>";
        var win8=progIni+"https://goo.gl/Jv3qj8"+progDown+"Windows 8.1 AIO (32b/64b)</a>;</p>";
        var win7=progIni+"https://goo.gl/mH5Zs0"+progDown+"Windows 7 AIO (32b/64b)</a>;</p>";
        var win98se=progIni+"https://goo.gl/xOkTHM"+progDown+"Windows 98 SE</a>;</p>";
        $(this).html("<p><h3>Mídias de instalação de SO</h3></p>"+voltar+win10+win8+win7+win98se+voltar).fadeIn(fdTm);
    });
}