<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Aula 13 - Tabuada do 1 até 10</title>
    </head>

    <body>
        <div>
            <h1>Tabuada do 1 até 10 com Variável de Controle</h1>

            <?php
                $userNum = isset($_GET["nNum"])? $_GET["nNum"]: 0;
                $userNum = $userNum == null? 0:$userNum;
                $userNum = $userNum == ""? 0:$userNum;

                for ($i = 1; $i < 11; $i++){
                    $r = $userNum * $i;
                    echo "$userNum x $i = $r";
                    echo "<br/>";
                }


            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>