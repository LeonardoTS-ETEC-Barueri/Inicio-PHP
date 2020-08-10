<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 18 - Variáveis Compostas (Coleções Dinâmicas) (01/02)</title>
    </head>
    <body>
        <div>
            <pre>
                <?php
                    $n = array(3, 5, 8, 2);
                    echo "<h1>Vetores</h1>";
                    echo "<br/>";
                    print_r($n);
                    echo "<br/>";
                    $n[] = 7;
                    print_r($n);
                    echo "<br/>";

                    echo "<h1>Vetores por Range</h1>";
                    echo "<br/>";
                    $c = range(5, 20, 2);
                    print_r($c);
                    echo "<br/>";

                    echo "<h1>Exibindo Vetores com ForEach</h1>";
                    echo "<br/>";

                    echo "<table border='1'><tr>";
                    echo "<td> Array </td>";
                    foreach($c as $valor){
                        echo "<td> $valor </td>";
                    }
                    echo "</tr></table>";
                    echo "<br/>";

                    echo "<h1>Vetores com Chaves Personalizadas</h1>";
                    echo "<br/>";

                    $v = array( 1 => "A",
                                3 => "B",
                                6 => "C",
                                8 => "D");
                    
                    print_r($v);
                    echo "<br/>";

                    echo "<h1>Vetores com Chaves Associativas</h1>";
                    echo "<br/>";
                    
                    $v2 = array(    "nome" => "Ana",
                                    "idade" => 23,
                                    "peso" => 65.5);
                    $v2["fuma"] = true;

                    print_r($v2);
                    echo "<br/>";
                    foreach($v2 as $campo => $conteudo){
                        echo "O campo $campo possui o conteúdo $conteudo.<br/>";
                    }
                    echo "<br/>";

                    echo "<h1>Matrizes / Vetores Multidimensionais</h1>";
                    echo "<br/>";

                    $m = array( array(6, 4),
                                array(4, 9),
                                array(3, 2));

                    $m[0][1] = $m[2][0];

                    print_r($m);
                ?>
            </pre>
            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>