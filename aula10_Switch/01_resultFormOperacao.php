<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Estrutura Condicional de Múltipla Escolha (Switch)</title>
    </head>
    <body>
        <div>
            <?php
                $valor = isset($_GET["nNumero"])? $_GET["nNumero"] : 0;
                $valor = ($valor == null)? 0 : $valor;
                $operacao = isset($_GET["nOperacao"])? $_GET["nOperacao"] : "dobrar";
                if ($operacao == "dobrar"){
                    $operacao = "dobrado";
                    $resultado = ($valor * 2);
                } elseif ($operacao == "rCubo"){
                    $operacao = "em raiz cúbica";
                    $resultado = number_format(pow($valor, 1/3), 2);    // PHP aceita o simbolo "^" como exponenciação. Ficaria: ($valor ^ 3).
                } elseif ($operacao == "rQuadrada"){
                    $operacao = "em raiz quadrada";
                    $resultado = number_format(sqrt($valor), 2);       // ($valor ^ 1/2).
                }

                echo "<h1>Resultado da Operação</h1><br/>";
                echo "<p>".$valor." quando ".$operacao.' é <span class="verde">'.$resultado.'</span></p>';

                echo "<br/><h1>Solução Correta usando o Switch</h1><br/>";

                $opc = isset($_GET["nOp"])?$_GET["nOp"]:1;
                $num = isset($_GET["nNum"])? $_GET["nNum"]: 0;
                $num = ($num == null)? 0: $num;

                switch($opc){
                    case 1:
                        $r = ($num * 2);
                        echo "<p>$num quando dobrado resulta em ".'<span class="verde">'.$r.'</span></p>';
                        break;
                    case 2:
                        $r = number_format(sqrt($num), 2);
                        echo "<p>$num quando ao quadrado resulta em ".'<span class="verde">'.$r.'</span></p>';
                        break;
                    case 3:
                        $r = number_format(pow($num, 1/3), 2);
                        echo "<p>$num quando ao cubo resulta em ".'<span class="verde">'.$r.'</span></p>';
                        break;
                    default:
                        echo "<p>Erro</p>";
                        break;
                }
            ?>
            <br/>
            <a class="direita" href="01_formOperacao.html">Voltar</a> 
        </div>
    </body>
</html>