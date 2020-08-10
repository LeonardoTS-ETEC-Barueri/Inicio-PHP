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

                echo "<h1 style='font-size:20pt; text-align:center;'>Fatorial de $valor</h1>";

                $count = $valor;
                echo "$count! = ";
                do {
                    echo "$count x ";
                    $count --;
                } while ($count > 1);
                echo "$count = ";
                
                $count = $valor;    // Digamos que começamos o $valor com 5.
                $fat = 1;           // Fat começa com 1.
                do {
                    $fat = $fat * $count;   // Fat recebe (1*5 = 5) → Fat recebe ( 5*4 = 20 ) → Fat recebe ( 20*3 = 60)...
                    $count--;
                } while ($count >= 1);
                echo number_format($fat,0,",",".");
                
            ?>

            <br/>
            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>