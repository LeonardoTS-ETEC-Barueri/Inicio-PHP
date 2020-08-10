<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>(Switch) com agrupamento de casos</title>
    </head>
    <body>
        <div>
            <?php
                $dia = isset($_GET["nDia"])?$_GET["nDia"]:0;
                //$dia = ($dia == null)? 0: $dia;

                echo "<h1>Análise completa</h1>";

                switch($dia){
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                        echo "<p>Levanta e vai estudar!</p>";
                        break;
                    case 7:
                    case 8:
                        echo "<p>Fique em casa, hoje é fim de semana.</p>";
                        break;
                    default:
                        echo "<p>Erro: Digite 2, 3, 4, 5, 6, 7 ou 8.</p>";
                        break;
                }

            ?>
            <br/>

            <a class="direita" href="javascript:history.go(-1)">Voltar</a>

            <!--<a class="direita" href="02_formDiaSemana.html">Voltar</a> -->
        </div>
    </body>
</html>