<!DOCTYPE html>
<html>
    <head>
        <?php require_once('../pageContents/head.php'); ?>
        <title>404 - Página não encontrada</title>
        <!--[if lte IE 9]>
            <script>ie();</script>
        <![endif]-->
    </head>
    <body>
        <header><?php require_once('../pageContents/header.php'); ?></header>
        <div class="corpo">
            <div class="esquerda"><?php require_once('../pageContents/corpoEsquerda.php'); ?></div>
            <div class="meio">
                <fieldset class="texto">
                    <h3>404 - Página não encontrada</h3>
                    <p>O link que você tentou acessar não existe mais ou foi posto incorretamente.</p>
                    <p>Por favor, nos diga o que estava procurando através do <a onclick="chatlink()" class="linkintext">Chat Online</a> ou do formulário de e-mail à direita, pois solucionaremos este problema o mais rápido possível.</p>
                    <p>Caso deseje, atualize a página ou utilize o menu de navegação acima para voltar ao site.</p>
                </fieldset>
            </div>
            <div class="direita"><?php require_once('../pageContents/corpoDireita.php'); ?></div>
        </div>
        <footer><?php require_once('../pageContents/footer.php'); ?></footer>
    </body>
</html>