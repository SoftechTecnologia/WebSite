<!DOCTYPE html>
<html>
    <head>
        <?php require_once('head.php'); ?>
        <meta name="description" content="Clique aqui e saiba um pouco sobre a empresa Softech e seu método de trabalho." />
        <title>Sobre nós - Softech</title>
        <script>
            var path="/sobre-nos.php";
            if(window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1") path=pathLocal+path;
            $.ajax({
                url:path,
                success: function(corpo){corpo=$(corpo).find('div.meio fieldset.texto');$('.meio').html(corpo);},
                error: function(){alert('Ocorreu um erro ao inicializar o site. É preciso atualizar a página.');}
            });
        </script>
    </head>
    <body class="shifter">
        <div class="shifter-page">
            <p class="shifter-handle"></p>
            <div class="logo"></div><div class="meio"> <!-- Copiado de "/index.html" -->
            </div>
        </div>
        <nav class="shifter-navigation"></nav>
        <footer></footer> <!-- Copiado de "/index.html" -->
    </body>
</html>