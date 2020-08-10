<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Tipos Primitivos em PHP</title>
    </head>

    <body>
        <div>
            <?php
                echo "<u>Variáveis</u><br/>n = 4<br/>no = 'Taka'<br/><br/>";
                $n = 4;
                $no = "Taka";
                echo "CSS made by $no <br/><br/>";

                echo "<u>Concatenação</u><br/><br/>";
                echo "» Aula #04 <br/>";
                echo "Me chamo [ ". $no. " ] :) - Echo - Usando « pontos »". "<br/>";
                echo "Me chamo [ $no ] :) - Echo - Usando interpretação de var com « áspas duplas ». </br>";
                echo 'Me chamo [ $no ] :) - Echo - Interpretação não ocorre com « áspas simples ».', "</br>";
                echo $n + 2, "<br/>";
                $n = 4.5; /* A variável [n] inteira, se tornará um decimal */
                echo $n, "<br/>";
                echo (int) $n. " - Uso do typecast no decimal acima.<br/>";
            ?>
        </div>
    </body>
</html>