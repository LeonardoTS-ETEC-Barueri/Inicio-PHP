<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Variáveis Referenciadas do PHP</title>
    </head>

    <body>
        <div>
            <?php
                echo "<u>Utilizando Variáveis Referenciadas do PHP</u><br/><br/>";
                $a = 3;
                $b = $a;
                $b += 5;                
                echo "Valor da Variável A: $a<br/>Valor da Variável B: $b<br/>";
                echo "<sup>B recebeu o valor de A e depois, B + 5. Portanto B deve exibir 8.</sup><br/>";
                $a = 3;
                $b = &$a;
                $b += 5;
                echo "Valor da Variável A: $a<br/>Valor da Variável B: $b<br/>";
                echo "<sup>B recebeu uma referência de A e depois, B + 5. Portanto B e A devem exibir 8.</sup><br/>";
                echo "Apesar de somente B receber a alteração em seu valor, por estar conectado em A através de uma referência, a alteração dele afetou o valor de A.<br/>"
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>