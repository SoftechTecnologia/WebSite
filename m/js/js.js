// Fade em todas as páginas
$(document).ready(function (){
    $('body').css('opacity', '0').fadeTo(400, 1,'swing');
});
// Componentes
$(function(){
    var path="/index.php";
    if(window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1") path=pathLocal+path;
    $.ajax({
        url:path,
        success: function(topo){topo=$(topo).find('.bg-logo-softech');$('.logo').html(topo);},
        error: function(){alert('Ocorreu um erro ao inicializar o site. É preciso atualizar a página.');}
    });
    $.ajax({
        url:path,
        success: function(topo){topo=$(topo).find('nav').children();$('nav.shifter-navigation').html(topo);},
        error: function(){alert('Ocorreu um erro ao inicializar o site. É preciso atualizar a página.');}
    });
    $.ajax({
        url:path,
        success: function(rodape){rodape=$(rodape).find('.rodapeText');$('footer').html(rodape);},
        error: function(){alert('Ocorreu um erro ao inicializar o site. É preciso atualizar a página.');}
    });
});
// Enviar e-mail
function verificaEmail(){
    if($('#email').val()==$('#confirmaEmail').val()) $('#confirmaEmail').removeClass('incorrect');
    else $('#confirmaEmail').addClass('incorrect');
}
function enviarEmail(){
    if($('#confirmaEmail').hasClass('incorrect')){
        alert("A confirmação de email está incorreta!");
        $('#confirmaEmail').focus();
        $('.formEmail').submit(function(e){e.preventDefault();});
    }else $('.formEmail').attr('action',mandaMail).unbind('submit').submit();
}
