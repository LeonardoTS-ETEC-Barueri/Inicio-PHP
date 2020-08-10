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
                $ano = isset($_GET["nAnoNasc"]) ? $_GET["nAnoNasc"] : "Algo deu errado.";
                $ano = ($ano == null) ? 0 : $ano;
                $idade = Date("Y") - $ano;

                echo "<h1>Será que seu voto é obrigatório?</h1><br/>";
                echo "<p>— Você nasceu em $ano e tem $idade anos de idade.</p><br/>";

                if ($idade >= 16 && $idade < 18){
                    $vota = "já pode votar";
                    $tipoVoto = "Seu voto é opcional";
                    $dirige = "não pode dirigir";
                } else {
                    if ($idade >= 18 && $idade <= 64){
                    $vota = "já pode votar";
                    $tipoVoto = "Seu voto é obrigatório";
                    $dirige = "já pode dirigir";
                    } else {
                        if ($idade > 64) {
                            $vota = "já pode votar";
                            $tipoVoto = "Seu voto é opcional";
                            $dirige = "já pode dirigir";
                        } else {
                            $vota = "não pode votar";
                            $tipoVoto = "Você não vota";
                            $dirige = "não pode dirigir";
                        }
                    }
                }               // Podemos usar (else if (...) { (...) }) aqui. No PHP usamos "elseif" tudo junto.

                echo "<p>• Com essa idade você $vota e $dirige. $tipoVoto.</p><br/>";
            ?>
            <br/>            
            <a class="direita" href="02_formIdadeVoto.html">Voltar</a>
            <a class="direita" href="inicio.php">Home</a>
        </div>
    </body>
</html>