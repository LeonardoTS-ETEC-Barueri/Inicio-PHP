<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Tratando os valores passados por [03_posicao_personalizacao.html]</title>
        <?php
            $texto = isset($_GET["dTexto"])?$_GET["dTexto"]:"";
            $tamanho = isset($_GET["dTam"])?$_GET["dTam"]:"14pt";
            $cor = isset($_GET["dCor"])?$_GET["dCor"]:"#000000";
            $corBG = isset($_GET["dCorBG"])?$_GET["dCorBG"]:"_css/php_bg.jpg";
        ?>
        <style>
            span.texto{
                font-size: <?php echo "$tamanho"; ?>;
                color: <?php echo "$cor"; ?>;
            }
            body{
                background: url(<?php echo "$corBG"; ?>) no-repeat;
                background-position: center center; /* Posição absoluta ao centro. */
                background-attachment: fixed;   /* Fixa a imagem do background no visor, para que ela não se mova quando a altura do visor for maior que a da imagem. */
                background-size: cover;         /* Isso faz o re-escalamento da imagem pro tamanho do container. */
                background-color: black;    /* Cor de fundo enquanto a imagem carrega. */
            }
        </style>
    </head>

    <body>
        <div>
            <?php
                echo "<span class='texto'>".(($texto=="")?"Nada foi escrito":$texto)."</span>";
            ?>
            <br/>            
            <a class="direita" href="03_posicao_personalizacao.html">Voltar</a>
            <a class="direita" href="inicio.php">Home</a>
        </div>
    </body>
</html>