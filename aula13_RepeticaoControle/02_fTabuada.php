<!--
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 13 - Tabuada do 1 até 10</title>
    </head>
    <body>
        <div>
            <form method="GET" action="02_rTabuada.php">
                <label for="tNum">Número: </label>
                <input type="number" name="nNum" id="tNum" min="0" value="0"/>
                <input type="submit" value="Calcular Tabuada"/>
            </form>

            <br/>
            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>
-->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 13 - Tabuada do 1 até 10</title>
    </head>
    <body>
        <div>
            <h1>Tabuada de 1 até 10</h1>
            <form method="GET" action="02_rTabuada.php">
                <select name="nNum">
                    <?php
                        for ($c = 1; $c <= 10; $c++){
                            echo "<option>$c</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Calcular"/>
            </form>

            <br/>
            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>