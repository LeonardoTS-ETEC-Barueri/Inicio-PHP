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
                echo "<u>Utilizando Variáveis Variantes do PHP</u><br/><br/>";
                $x = "abc";
                $$x = "def";
                echo 'Variável X, contém "'. $x.'"'."<br/>";
                echo 'A variável variante "abc" criada a partir de X, contém o valor "'. $abc.'"'."<br/>";
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>