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
                echo "<u>Operadores Aritméticos</u><br/>";
                echo "» Aula #05 <br/><br/>";
                $n1 = 3;
                $n2 = 2;
                $soma = $n1 + $n2;
                echo '→ "A soma de $n1 + $n2 é igual a [ $soma ]"'. "<br/>";
                echo "<br/>A soma de ". $n1. " + ". $n2. " é igual a [". $soma. "]<br/>";
                echo "A subtração de $n1 e $n2 vale: ". ($n1-$n2). "<br/>";
                echo "A multiplicação de $n1 e $n2 vale: ". ($n1 * $n2). "<br/>";
                echo "A divisão de $n1 e $n2 vale: ". ($n1/$n2). "<br/>";
                echo "O resto da divisão de de $n1 e $n2 vale: ". ($n1%$n2). "<br/>";
                echo "A média dos valores é: ". (($n1+$n2)/2). "<br/>";
                
                echo "<br/>» Os operadores aritméticos suportados são os mesmos usados em java.<br/> [ +, -, *, /, % ]";
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>