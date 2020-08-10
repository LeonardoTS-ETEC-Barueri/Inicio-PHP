<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 15 - Passagem de Parametros por Valor e Referência</title>
    </head>
    <body>
        <div>
            <h1>Passagem de Parametros por Valor</h1>

            <?php
                function testeValor ($x) {
                    $x += 2;
                    echo "O valor de (X) é <span class='verde'>$x</span>";
                }

                $a = 3;
                testeValor($a);
                echo "<br/>O valor de (A) é <span class='verde'>$a</span>";

                echo "<br/>";
            ?>

            <h1>Passagem de Parametros por Referência</h1>

            <?php
                function testeReferencia (&$x) {
                    $x += 2;
                    echo "O valor de (X) é <span class='verde'>$x</span>";
                }

                $a = 3;
                testeReferencia($a);
                echo "<br/>O valor de (A) é <span class='verde'>$a</span>";

                echo "<br/>";
            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>