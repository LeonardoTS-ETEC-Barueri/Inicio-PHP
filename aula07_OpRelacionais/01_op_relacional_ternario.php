<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Operadores Relacionais e Ternário em PHP</title>
    </head>

    <body>
        <div>
            <?php
                echo "<u>Utilizando o Operador Ternário e Relacionais no PHP</u><br/><br/>";
                
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $tipo = $_GET["op"];
                echo "Os valores passados foram $n1 e $n2. <br/>";
                echo "Seu tipo de calculo foi: $tipo<br/>*<sup>Passe 'soma' para somar, qlqr outra coisa será uma multiplicação.</sup> <br/>";
                $resultado = ($tipo == "soma") ? ($n1 + $n2) : ($n1 * $n2); // Se tipo for "soma" então Faz a Soma, se não, Faz a Multiplicação.
                echo "Resultado: $resultado";
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>