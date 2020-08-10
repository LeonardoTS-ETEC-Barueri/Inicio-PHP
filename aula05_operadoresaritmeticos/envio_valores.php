<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Operadores Aritméticos em PHP</title>
        <style>
            h2{
                font: 12pt Arial;
                color: #171559;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div>
            <?php
                echo "<u>Recebendo valores personalizados</u><br/>";
                echo "<br/>". '[!] Para que os erros desapareçam coloque isso no fim da URL: ?a=3&b=2'. "<br/>";
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                echo "<br/>» 'a' recebeu $n1; 'b' recebeu $n2.<br/>";
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>