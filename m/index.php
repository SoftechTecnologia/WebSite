<!DOCTYPE html>
<html>
    <head>
        <?php require_once('head.php'); ?>
        <meta name="description" content="Assistência especializada em Software e Hardware. Oferecemos soluções em tecnologia voltada para Microcomputadores, Notebooks e Netbooks." />
        <title>Softech Tecnologia</title>
        <script>
            var path="/index.php";
            if(window.location.hostname=="localhost"||window.location.hostname=="127.0.0.1") path=pathLocal+path;
            $.ajax({
                url:path,
                success: function(data){$('.meio').html($(data).find('div.meio fieldset.texto'));},
                error: function(){alert('Ocorreu um erro ao inicializar o corpo. É preciso atualizar a página.');}
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