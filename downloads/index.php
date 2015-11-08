<!DOCTYPE html>
<html>
    <head>
        <?php require_once('../pageContents/head.php'); ?>
        <link rel="stylesheet" href="<?php echo $pathLocal ?>/downloads/css.css" />
        <script src="<?php echo $pathLocal ?>/downloads/var.js"></script>
        <script src="<?php echo $pathLocal ?>/downloads/progs.js"></script>
        <script src="<?php echo $pathLocal ?>/downloads/interface.js"></script>
        <meta name="description" content="Clique aqui para baixar programas e utilitários diversos." />
        <title>Central de Downloads	- Softech</title>
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
                    <h3 align="center">Navegue abaixo para fazer os downloads</h3>
                    <span class="entrelinha">Todos os softwares aqui disponibilizados são gratuitos ou versão para testes.</span><br>
                    <div class="oss">
                        <p class="windows">- <a class='linkintext' onclick='page(0,0)'>Windows</a></p>
                        <p class="mac">- <a class='linkintext' onclick='page(1,0)'>Mac OS</a></p>
                        <p class="linux">- <a class='linkintext' onclick='page(2,0)'>Linux</a></p>
                    </div>
                </fieldset>
            </div>
            <div class="direita"><?php require_once('../pageContents/corpoDireita.php'); ?></div>
        </div><!-- Corpo -->
        <footer><?php require_once('../pageContents/footer.php'); ?></footer>
    </body>
</html>