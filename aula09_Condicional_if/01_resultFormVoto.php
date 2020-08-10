<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Recebendo os parâmetros do Formulário da Idade de Voto</title>
    </head>

    <body>
        <div>
            <?php
                $ano = isset($_GET["nAnoNasc"])? $_GET["nAnoNasc"]: "Algo deu errado.";
                $ano = ($ano == null)?0:$ano;
                $idade = Date("Y") - $ano;

                echo "<h1>Será que você já pode votar?</h1><br/>";
                echo "<p>— Você nasceu em $ano e tem $idade anos de idade.</p><br/>";

                if ($idade >= 18){
                    $vota = "já pode votar";
                    $dirige = "já pode dirigir";
                } else {
                    $vota = "não pode votar";
                    $dirige = "não pode dirigir";
                }

                echo "<p>• Com essa idade você $vota e também $dirige.</p><br/>"
            ?>
            <br/>            
            <a class="direita" href="01_formIdadeVoto.html">Voltar</a>
            <a class="direita" href="inicio.php">Home</a>
        </div>
    </body>
</html>