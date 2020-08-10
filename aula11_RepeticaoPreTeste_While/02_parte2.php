<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Aula 11 - Utilidade das Variáveis de Variáveis</title>
    </head>

    <body>
        <div>
            <h1 style="font-size:15pt; text-align:center;">Resultado das nossas caixas dinâmicas</h1>

            <?php
                $i = 0;
                while ($i < 5){
                    $v = "num".$i;              // Inicia a Variável de Variável.
                    $url = "nValor".($i+1);     // Cada repetição se tornará "nValor1", "nValor2", "nValor3", ... que será o parâmetro de envio de dados recebido em "$_GET[valor]".
                    $$v = isset($_GET[$url]) ? $_GET[$url] : 0; // 1ª Repetição ficará assim: [ var num0 = nValor1; ]. 2ª será: [ var num1 = nValor2; ]. Etc...
                    $i++;   // Avança o contador, evitando repetição infinita.
                }
                // Exibindo o resultado das repetições..

                $i = 0;
                while ($i < 5){
                    $v = "num".$i;  // Inicia a Variável de Variável.
                    echo "Valor ".($i+1).": ".$$v."<br/>";  // Saída: Valor 1: ConteúdoDe'num0'.
                    $i++; 
                }

            ?>
            
            <br/>
            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>