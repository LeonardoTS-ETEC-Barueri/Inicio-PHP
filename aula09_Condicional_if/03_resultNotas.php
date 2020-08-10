<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Calculo da Situação do Aluno</title>
        <style>
            .verde{
                font-weight: bold;
                color: green;
            }
            .amarelo{
                font-weight: bold;
                color: yellow;
            }
            .vermelho{
                font-weight: bold;
                color: red;
            }
        </style>
    </head>

    <body>
        <div>
            <?php
                $notaUm = isset($_GET["nNota1"])?$_GET["nNota1"]:0;
                $notaUm = ($notaUm == null)? 0 :$notaUm;
                $notaDois = isset($_GET["nNota2"])?$_GET["nNota2"]:0;
                $notaDois = ($notaDois == null)? 0 :$notaDois;
                $calcMedia = ($notaUm + $notaDois) / 2;

                if ($calcMedia <= 5.0) {
                    echo 'A média entre <span class="vermelho">'.$notaUm.'</span> e <span class="vermelho">'.$notaDois.'</span> é <span class="vermelho">'.$calcMedia.'</span><br/>';
                    $sitRep = "REPROVADO";
                    echo 'Situação: <span class="vermelho">'.$sitRep.'</span><br/>';
                } elseif ($calcMedia <= 7.0){
                    echo 'A média entre <span class="amarelo">'.$notaUm.'</span> e <span class="amarelo">'.$notaDois.'</span> é <span class="amarelo">'.$calcMedia.'</span><br/>';
                    $sitRep = "RECUPERAÇÃO";
                    echo 'Situação: <span class="amarelo">'.$sitRep.'</span><br/>';
                } else {
                    echo 'A média entre <span class="verde">'.$notaUm.'</span> e <span class="verde">'.$notaDois.'</span> é <span class="verde">'.$calcMedia.'</span><br/>';
                    $sitRep = "APROVADO";
                    echo 'Situação: <span class="verde">'.$sitRep.'</span><br/>';
                }
                
            ?>
            <br/>            
            <a class="direita" href="03_formNotas.html">Voltar</a>
            <a class="direita" href="inicio.php">Home</a>
        </div>
    </body>
</html>