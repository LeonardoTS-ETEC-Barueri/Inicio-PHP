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
                echo "<u>Funções Aritméticas</u><br/>";
                echo "<br/>". '[!] Para que os erros desapareçam coloque isso no fim da URL: ?x=10&y=-2.5'. "<br/>";
                $v1 = $_GET["x"];
                $v2 = $_GET["y"];
                echo "<h2>» Valores recebidos: $v1 e $v2</h2>";
                echo "O valor absoluto de $v2 é ". abs($v2). "<br/>";
                echo "O valor de $v1<sup>$v2</sup> é ". pow($v1,$v2). "<br/>";
                echo "A raiz de $v1 é ". sqrt($v1). "<br/>";
                echo "O valor de $v2 arredondado é ". round($v2). "<br/>";
                echo "A parte inteira de $v2 é ". intval($v2). "<br/>";
                echo "O valor de $v1 em moeda é R$: ". number_format($v1,2). "<br/>";
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>