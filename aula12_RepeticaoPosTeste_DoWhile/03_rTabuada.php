<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Aula 12 - Fatorial - Do While</title>
    </head>

    <body>
        <div>
            <?php
                $valor = isset($_GET["nValor1"])? $_GET["nValor1"]: 0;
                $valor = ($valor == null)? 0: $valor;

                echo "<h1 style='font-size:20pt; text-align:center;'>Tabuada do $valor</h1>";

                $count = 1;
                do {
                    echo "$valor x $count = ".($valor*$count)."<br/>";

                    $count++;
                } while ($count <= 10);
                
            ?>

            <br/>
            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>