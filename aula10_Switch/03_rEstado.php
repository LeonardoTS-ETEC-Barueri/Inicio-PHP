<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>(Switch) Estados</title>
    </head>
    <body>
        <div>
            <?php
                $regiao = isset($_GET["nEstado"])? $_GET["nEstado"]:0;

                switch($regiao){
                    case "norte":
                        $regiao = "Região Norte";
                        break;
                    case "nordeste":
                        $regiao = "Região Nordeste";
                        break;
                    case "centroOeste":
                        $regiao = "Região Centro-Oeste";
                        break;
                    case "sudeste":
                        $regiao = "Região Sudeste";
                        break;
                    case "sul":
                        $regiao = "Região Sul";
                        break;
                    default:
                        $regiao = "Erro - Região inválida";
                        break;
                }
                echo '<p>Você mora na <span class="verde">'.$regiao.'</span></p>';
            ?>
            <br/>

            <a class="direita" href="javascript:history.go(-1)">Voltar</a>

            <!--<a class="direita" href="02_formDiaSemana.html">Voltar</a> -->
        </div>
    </body>
</html>