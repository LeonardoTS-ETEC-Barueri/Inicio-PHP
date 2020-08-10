<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Operadores de Incrementos em PHP</title>
    </head>

    <body>
        <div>
            <?php
                echo "<u>Utilizando Operadores de Incrementos</u><br/><br/>";
                $atual = $_GET["aa"];
                echo "Pós-decremento: O ano atual é $atual, e o ano anterior foi ". $atual--. ".<br/>";
                echo "<sup>Ano atual foi reduzido em 1 pelo pós-decremento acima.</sup> <br/>";
                echo "Pré-decremento: O ano atual é $atual, e o ano anterior foi ". --$atual. ".<br/>";
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>