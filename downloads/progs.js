var SuporteSoftech="/downloads/progs/SuporteSoftech.zip";
if(window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1"){
	SuporteSoftech=pathLocal+SuporteSoftech;
}
var progs=[
		[// Windows
			// Página 1
			progIni+SuporteSoftech+progDown+"Suporte Softech</a>: Atalho aos nossos contatos;</p>", // 1
			progIni+"http://goo.gl/9zP87C"+progDown+"7-zip</a>: Manipulador de arquivos compactos;</p>", // 2
			conjProgIni+"appsWin(0)"+conjProgIr+"Apps Windows</a>: Programas de tratamento;</p>", // 3 Função
			conjProgIni+"remAcces(0)"+conjProgIr+"Acesso Remoto</a>: Programas de acesso remoto;</p>", // 4 Função
			progIni+"http://goo.gl/scBVo8"+progDown+"AOMEI Partition Assistant</a>: Manipulador de discos;</p>", // 5
			conjProgIni+"browsers(0)"+conjProgIr+"Browsers</a>: Navegadores de Web;</p>", // 6 Função
			// Página 2
			progIni+"http://goo.gl/cucP6P"+progDown+"CCleaner</a>: Otimizador de Sistema;</p>", // 1
			progIni+"http://goo.gl/817NGg"+progDown+"CD Burner XP</a>: Gravador de Mídia;</p>", // 2
			progIni+"http://goo.gl/SKcB69"+progDown+"CPU-Z</a>: Leitor de Hardware;</p>", // 3
			progIni+"http://goo.gl/SYlsLb"+progDown+"HWMonitor</a>: Leitor de Hardware;</p>", // 4
			progIni+"https://goo.gl/rPjCUc"+progDown+"Media Player Classic</a>: Player de vídeo;</p>", // 5
			progIni+"http://goo.gl/rG77Yt"+progDown+"Microsoft Security Essentials</a>: Antivírus da Microsoft (Windows 7);</p>", // 6
			// Página 3
			progIni+"https://goo.gl/YWvVRu"+progDown+"Notepad++</a>: Editor de texto avançado;</p>", // 1
			progIni+"https://goo.gl/v988qM"+progDown+"Microsoft Silverlight</a>: Plugin para navegador;</p>", // 2
			progIni+"https://goo.gl/3tCvk9"+progDown+"Recuva</a>: Recuperador de arquivos;</p>", // 3
			progIni+"http://goo.gl/0pFYW8"+progDown+"Unlocker</a>: Manipulador de arquivos;</p>", // 4
			progIni+"http://goo.gl/2N6wyO"+progDown+"WebCam Viewer</a>: Software para WebCam;</p>", // 5
			progIni+"http://goo.gl/8udqEp"+progDown+"µTorrent</a>: Cliente BitTorrent;</p>" // 6
		],[//Mac
			"- <a href='/fale-conosco.html' class='linkintext'>Diga-nos o que precisa!</a>"
		],[//Linux
			"- <a href='/fale-conosco.html' class='linkintext'>Diga-nos o que precisa!</a>"
		]
	];
// Páginas
var numPag=0;
var paginas=[[""],[""],[""]];
var itPorPag=6;