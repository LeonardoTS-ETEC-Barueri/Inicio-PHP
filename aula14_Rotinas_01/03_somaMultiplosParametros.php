<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Função Soma com múltiplos parâmetros</title>
    </head>
    <body>
        <div>
            <h1>Função Soma com múltiplos parâmetros</h1>

            <?php
                function soma() {
                    $p = func_get_args();
                    $t = func_num_args();
                    $s = 0;
                    for ($i = 0; $i < $t; $i++){
                        $s += $p[$i];
                    }
                    return $s;
                }

                $resultado = soma(3, 5, 2, 10, 22, 48, 31);

                echo "A soma dos valores é <span class='verde'>$resultado</span>";
            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>