<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Função Soma sem retorno de valores</title>
    </head>
    <body>
        <div>
            <h1>Função Soma sem retorno de valores</h1>

            <?php
                function soma($a, $b) {
                    $soma = $a + $b;
                    echo "<p>A soma vale <span class='verde'>$soma</span></p>";
                }
                soma(3, 4);
                soma(8, 2);
                $x = 9;
                $y = 15;
                soma($x, $y);
            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>