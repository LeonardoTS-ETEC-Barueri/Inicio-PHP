<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Continuação do HTML 01_exercicioHTML - PHP Tratando o valor</title>
    </head>

    <body>
        <div>
            <?php
                $valor = $_GET["nValor"];
                $rq = sqrt($valor);
                echo "A raiz quadrada de $valor é ". number_format($rq,2). "<br/>";
            ?>
            <br/>            
            <a class="direita" href="01_exercicioHTML.html">Voltar</a>
            <a class="direita" href="inicio.php">Home</a>
        </div>
    </body>
</html>