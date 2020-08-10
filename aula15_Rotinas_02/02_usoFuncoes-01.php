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
            <h1>Re-utilização de código (Include)</h1>

            <?php
                include "02_funcoes.php";
                echo "<h2>Testando novas funções</h2>";
                ola();
            ?>

            <br/>
            <h1>(Include com Erro)</h1>

            <?php
                include "02_funcoes2.php";
                echo "<h2>Testando novas funções</h2>";
                ola();
            ?>
            
            <a href="02_usoFuncoes-02.php">Etapa 2</a>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>