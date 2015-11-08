<!DOCTYPE html>
<html>
    <head>
        <?php require_once('../pageContents/head.php'); ?>
        <meta name="description" content="Veja quais serviços especializados em Microcomputadores, Notebooks e Netbooks nós oferecemos. Clique aqui!" />
        <title>Produtos e Serviços - Softech</title>
        <link rel="stylesheet" href="<?php echo $pathLocal ?>/produtos-e-servicos/css.css" />
        <!--[if lte IE 9]>
            <script>ie();</script>
        <![endif]-->
    </head>
    <body>
        <header><?php require_once('../pageContents/header.php'); ?></header>
        <div class="corpo">
            <div class="esquerda"><?php require_once('../pageContents/corpoEsquerda.php'); ?></div>
            <div class="meio">
                <table class="texto" cellpadding="10px">
                    <th colspan=2 class="top titulo">Manutenção em Geral</th>
                    <tr class="opcoesServicos">
                        <td colspan=2><a class="servico">Manutenção Básica em Hardware, Software e Periféricos de Microcomputadores</a></td>
                    </tr>
                    <th colspan=2 class="titulo">Serviços em Software</th>
                    <tr class="opcoesServicos">
                        <td><a class="servico">Reinstalação de SO</a></td>
                        <td><a class="servico">Produção e Instalação de Software</a></td>
                    </tr>
                    <tr class="opcoesServicos">
                        <td><a class="servico">Sistema de Backup</a></td>
                        <td><a class="servico">Recuperação de Arquivos</a></td>
                    </tr>
                    <th colspan=2 class="titulo">Serviços em Hardware</th>
                    <tr class="opcoesServicos">
                        <td><a class="servico">Limpeza de Hardware</a></td>
                        <td><a class="servico">Recuperação de Hardwares em Geral</a></td>
                    </tr>
                    <th colspan=2 class="titulo">Web Development</th>
                    <tr class="opcoesServicos">
                        <td><a class="servico">DHTML, ou HTML5</a></td>
                        <td><a class="servico">Biblioteca jQuery</a></td>
                    </tr>
                    <tr class="opcoesServicos">
                        <td class="bottom-left"><a class="servico">PHP</a></td>
                        <td class="bottom-right"><a class="servico">Formas de contato automatizadas</a></td>
                    </tr>
                </table>
            </div>
            <div class="direita"><?php require_once('../pageContents/corpoDireita.php'); ?></div>
        </div><!-- Corpo -->
        <footer><?php require_once('../pageContents/footer.php'); ?></footer>
    </body>
</html>