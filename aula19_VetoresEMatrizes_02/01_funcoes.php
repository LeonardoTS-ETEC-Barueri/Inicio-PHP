<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 19 - Variáveis Compostas (Coleções Dinâmicas) (02/02)</title>
    </head>
    <body>
        <div>
            <?php
                echo '<h1>print_r($vetor)</h1>';
                    echo "<pre>";
                        $v = array("A", "J", "M", "X", "K");
                        print_r($v);
                    echo "</pre>";

                echo "<br/>";
                echo '<h1>var_dump($vetor)</h1>';
                    var_dump($v);

                echo "<br/>";
                echo '<h1>echo count($vetor)</h1>';
                    
                    echo "Quantidade de elementos: <span class='verde'>".count($v)."</span>";

                echo "<br/>";
                echo '<h1>Adicionando ou Removendo elementos no FIM do Vetor</h1>';

                    print_r($v);
                    echo "<br> Esse é o vetor em seu estado inicial. <br>";
                    $v[] = "O";
                    echo '<br>Com [ $v[] = "O" ] adicionamos um elemento no final do vetor.<br>Também podemos usar uma função de tratamento de estruturas de dados: <span class="verde">array_push($v, "O");</span><br><br> Veja como ficou nosso vetor abaixo. <br>';
                    print_r($v);
                    echo '<br><br>Com [ <span class="verde">array_pop($v);</span> ] podemos remover o último elemento desse vetor.<br><br> Veja como ficou nosso vetor abaixo. <br>';
                    array_pop($v);
                    print_r($v);

                echo "<br/>";
                echo '<h1>Adicionando ou Removendo elementos no INÍCIO do Vetor</h1>';

                    print_r($v);
                    echo "<br> Esse é o vetor em seu estado inicial. <br>";
                    array_unshift($v, "O");
                    echo '<br> Com [ <span class="verde">array_unshift($v, "O");</span> ] podemos adicionar um elemento ao INÍCIO desse vetor.<br><br> Veja como ficou nosso vetor abaixo. <br>';
                    print_r($v);
                    echo '<br><br> Com [ <span class="verde">array_shift($v);</span> ] podemos remover elemento inicial desse vetor.<br><br>Note que em ambos os casos,o índice foi atualizado de acordo com a modificação.<br><br> Veja como ficou nosso vetor abaixo. <br>';
                    array_shift($v);
                    print_r($v);

                echo "<br/>";
                echo '<h1>Colocando os vetores em ordem Crescente </h1>';

                    sort($v);
                    print_r($v);

                echo "<br/>";
                echo '<h1>Colocando os vetores em ordem Decrescente </h1>';

                    rsort($v);
                    print_r($v);

                echo "<br/>";
                echo '<h1>Ordenação Associativa Crescente</h1>';

                    asort($v);
                    print_r($v);

                echo "<br/>";
                echo '<h1>Ordenação Associativa Decrescente</h1>';

                    arsort($v);
                    print_r($v);

                echo "<br/>";
                echo '<h1>Ordenação Crescente de Chaves</h1>';

                    $v = array(2 => "A", 0 => "J", 4 => "M", 3 => "X", 1 => "K");
                    echo "Valores iniciais: ";
                    print_r($v);
                    echo "<br><br>Valores ordenados: ";
                    ksort($v);
                    print_r($v);

                echo "<br/>";
                echo '<h1>Ordenação Decrescente de Chaves</h1>';

                    $v = array(2 => "A", 0 => "J", 4 => "M", 3 => "X", 1 => "K");
                    echo "Valores iniciais: ";
                    print_r($v);
                    echo "<br><br>Valores ordenados: ";
                    krsort($v);
                    print_r($v);

                    $v = array("A", "J", "M", "X", "K");


                echo "<br/>";

            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>