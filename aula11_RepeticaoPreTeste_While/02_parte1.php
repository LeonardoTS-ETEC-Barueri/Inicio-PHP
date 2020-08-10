<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Aula 11 - Integração PHP e HTML</title>
    </head>

    <body>
        <div>
            <h1 style="font-size:15pt; text-align:center;">Criando caixas de textos em formulários HTML dinâmicamente com PHP</h1>

            <form method="GET" action="02_parte2.php">
                <?php
                    $c = 0;
                    while($c < 5){
                        echo "<label for='tValor".($c+1)."'>Valor ".($c+1).": </label><input type='number' id='tValor".($c+1)."' name='nValor".($c+1)."' max='100' min='0' value='0'/><br/>";
                        $c++;
                    }
                ?>
                <input type="submit" value="Enviar"/>
            </form>

            <br/>
            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>