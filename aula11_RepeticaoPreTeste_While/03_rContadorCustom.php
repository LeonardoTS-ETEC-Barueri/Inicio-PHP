<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Aula 11 - Contador Personalizavel</title>
    </head>

    <body>
        <div>
            <h1 style="font-size:15pt; text-align:center;">Os números no seu intervalo são...</h1>

            <?php
                $inicio = isset($_GET["nInicio"])? $_GET["nInicio"]: 0;
                $inicio = ($inicio == null)? 0: $inicio;
                $fim = isset($_GET["nFim"])? $_GET["nFim"]: 0;
                $fim = ($fim == null)? 0: $fim;
                $salto = isset($_GET["nSalto"])? abs($_GET["nSalto"]): 1;
                $salto = ($salto == null)? 1: $salto;
                $salto = ($salto == 0)? 1: $salto;

                if ($inicio < $fim){
                    while($inicio <= $fim){
                        echo "$inicio";
                        $inicio += $salto;

                        if ($inicio <= $fim){
                            echo " ";
                        }
                    }
                    echo ".";
                } elseif ($inicio > $fim){
                    while($inicio >= $fim){
                        echo "$inicio";
                        $inicio -= $salto;

                        if ($inicio >= $fim){
                            echo " ";
                        }
                    }
                    echo ".";
                }
            ?>

            <br/>
            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>