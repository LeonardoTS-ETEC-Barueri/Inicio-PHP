<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Função Soma com retorno de valores</title>
    </head>
    <body>
        <div>
            <h1>Função Soma com retorno de valores</h1>

            <?php
                function soma($a, $b) {
                    $soma = $a + $b;
                    return $soma;
                    // ou simplesmente, [ return $a + $b ];
                }
                $x = 3;
                $y = 4;
                $resp = soma($x, $y);

                echo "<p>A soma entre $x e $y é igual a <span class='verde'>$resp</span></p>";
            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>