// Fade em todas as páginas
$(document).ready(function (){
    $('body').css('opacity', '0').fadeTo(400, 1,'swing');
});
// Componentes
$(function(){
    var path=window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1"?pathLocal+"/index.php":"/index.php";
    $.ajax({
        url:path,
        success: function(data){
            $('footer').html($(data).find('.rodapeText')); //Rodapé
            $('nav.shifter-navigation').html($(data).find('nav').children()); //Itens do menu
            $('.logo').html($(data).find('.bg-logo-softech')); //Topo
        },
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
