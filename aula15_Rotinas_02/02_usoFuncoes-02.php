<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 15 - Re-utilização de código</title>
    </head>
    <body>
        <div>
            <h1>Re-utilização de código (Require com erro)</h1>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
            <?php
                require "02_funcoes2.php";
                echo "<h2>Testando novas funções</h2>";
                mostraValor(4);
            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>