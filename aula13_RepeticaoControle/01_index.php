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
            <h1>Contagens com Variável de Controle</h1>

            <?php
                echo "Progressiva: ";
                for ($i = 1; $i <= 10; $i++){
                    echo "$i ";
                }
                echo "<br/>";
                echo "Regressiva: ";
                for ($i = 10; $i >= 1; $i--){
                    echo "$i ";
                }
                echo "<br/>";
                echo "0 Até 100, saltando 5: ";
                for ($i = 0; $i <= 100; $i = $i + 5){
                    echo "$i ";
                }
                echo "<br/>";
                echo "20 até 0, saltando 5: ";
                for ($i = 20; $i >= 0; $i = $i - 5){
                    echo "$i ";
                }


            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>