<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Aula 11 - Estrutura de Repetição com Teste Lógico no início - While</title>
    </head>

    <body>
        <div>
            <h1 style="font-size:20pt; text-align:center;">Contagem progressiva e regressiva entre 1 e 10</h1>

            <?php
                $cp = 1;
                $cr = 10;
                while ($cp <= 10){
                    echo $cp." ↔ ";
                    while($cr >= 1){
                        echo $cr."<br/>";
                        $cr--;
                        break;
                    }
                    $cp++;
                }
            ?>

            <br/>
            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>