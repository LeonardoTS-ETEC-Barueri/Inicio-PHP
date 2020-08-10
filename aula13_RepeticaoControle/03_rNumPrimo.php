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
            <?php
                $userNum = isset($_GET["nNum"])? $_GET["nNum"]: 0;
                $userNum = $userNum == null? 0:$userNum;
                $userNum = $userNum == ""? 0:$userNum;

                $qtdMult = 0;

                echo "<h1>Analisando o número $userNum</h1>";

                echo "Valores múltiplos: ";
                for ($i = 1; $i <= $userNum; $i++){
                    if ($userNum % $i == 0){
                        echo "$i ";
                        $qtdMult ++;
                    }
                }
                echo "<br/><br/>Total de múltiplos: $qtdMult<br/><br/>";
                echo "Resultado: $userNum ";
                if ($qtdMult == 2 ){
                    echo '<span class="verde">É PRIMO!</span>';
                } else {
                    echo '<span class="vermelho">NÃO É PRIMO!</span>';
                }
            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>