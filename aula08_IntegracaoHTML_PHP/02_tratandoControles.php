<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Tratando os valores passados por [02_maisControles.html]</title>
    </head>

    <body>
        <div>
            <?php
                $usuario = isset($_GET["nUser"]) ? $_GET["nUser"]:"[Não informado]";
                $anoNasc = isset($_GET["nNasc"])?$_GET["nNasc"]:0;
                $genero = isset($_GET["nGenero"])?$_GET["nGenero"]:"[Não informado]";
                $idade = ($anoNasc == 0) ? "[Não informado]" : (date("Y") - $anoNasc)." anos"; // Teriamos um problema se fizessemos (2020 - $anoNasc), só iria valer pro ano de 2020, ano que vem, teremos que atualizar esse valor. (É a maneira didática, tem como capturar o ano atual diretamente no código.)

                echo "Seu cadastro está completo!<br/><br/>";
                echo "Nome: ".( ($usuario == "") ? "[Não informado]": $usuario)."<br/>";
                echo "Idade: ".( ($idade == 0)?"[Não Informado]":$idade). "<br/>";
                echo "Gênero: $genero<br/>";
            ?>
            <br/>            
            <a class="direita" href="02_maisControles.html">Voltar</a>
            <a class="direita" href="inicio.php">Home</a>
        </div>
    </body>
</html>