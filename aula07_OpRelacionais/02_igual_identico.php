<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Relacionais: Igual / Idêntico em PHP</title>
    </head>

    <body>
        <div>
            <?php
                echo "<u>Diferença entre Relacionais: Igual e Idêntico</u><br/><br/>";
                
                $a = 3;
                $b = "3";
                $r = ($a == $b) ? "SIM" : "NÃO";
                echo "As variáveis A e B são iguais? $r<br/>";
                $r = ($a === $b) ? "SIM" : "NÃO";
                echo "As variáveis A e B são idênticas? $r<br/>";
                echo "<sub>Veja o código fonte!</sub><br/>"

            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>