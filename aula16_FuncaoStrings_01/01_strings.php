<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 16 - Manipulação de Strings (01/02)</title>
    </head>
    <body>
        <div>
            <?php
            echo "<h1>Exemplo: printf()</h1>";
                $p = "Leite";
                $pr = 4.5;
                //echo "O $p custa R$: ".number_format($pr);
                printf("O %s custa R$: %.2f", $p, $pr);
            
            echo "<br/>";
            echo "<h1>Exemplo: print_r() / var_dump() / var_export()</h1>";
                $v[0] = 4;
                $v[1] = 3;
                $v[2] = 8;
                print_r($v);

                echo "<br/>";

                $v2 = array(3, 7, 6, 2, 1, 9);
                print_r($v2);

                echo "<br/>";

                var_dump($v);

                echo "<br/>";

                var_export($v2);

            echo "<br/>";
            echo "<h1>Exemplo: wordwrap()</h1>";

                $txt = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, qui tenetur. Error rem, nihil eligendi voluptatem iste, rerum, magnam modi eius ipsa vitae distinctio obcaecati numquam cumque labore. Facilis, eius.";
                $res = wordwrap($txt, 20, "<br>\n", false);
                echo($res);

            echo "<br/>";
            echo "<h1>Exemplo: strlen()</h1>";

                $txt = "Curso em Vídeo";
                $tamanho = strlen($txt);
                echo "<span class='verde'>$tamanho</span>";

            echo "<br/>";
            echo "<h1>Exemplo: trim()</h1>";

                $nome = "   Jose da Silva   ";
                echo $nome."<br/>";
                echo("Qtd caracteres: <span class='verde'>".strlen($nome)."</span><br/>");
                $novo = trim($nome);
                echo("Nome pós-trim: ".$novo."<br/>");
                echo("Qtd caracteres: <span class='verde'>".strlen($novo)."</span>");

            echo "<br/>";
            echo "<h1>Exemplo: ltrim() - Left Trim</h1>";

                $nome = "   Jose da Silva   ";
                echo $nome."<br/>";
                echo("Qtd caracteres: <span class='verde'>".strlen($nome)."</span><br/>");
                $novo = ltrim($nome);
                echo("Nome pós-trim: ".$novo."<br/>");
                echo("Qtd caracteres: <span class='verde'>".strlen($novo)."</span>");

            echo "<br/>";
            echo "<h1>Exemplo: rtrim() - Right Trim</h1>";
    
                $nome = "   Jose da Silva   ";
                echo $nome."<br/>";
                echo("Qtd caracteres: <span class='verde'>".strlen($nome)."</span><br/>");
                $novo = rtrim($nome);
                echo("Nome pós-trim: ".$novo."<br/>");
                echo("Qtd caracteres: <span class='verde'>".strlen($novo)."</span>");

            echo "<br/>";
            echo "<h1>Exemplo: str_word_count()</h1>";   

                $frase = "Eu vou estudar PHP";
                $cont = str_word_count($frase, 0);
                echo "Frase: $frase <br/>";
                echo "Quantidade de palavras: ";
                print("<span class='verde'>".$cont."</span><br/>");
                echo "Array: ";
                    $contArr = str_word_count($frase, 1);
                    echo "<span class='verde'>";
                    print_r($contArr)."<br/>";
                    echo "</span><br/>";
                echo "Vetor: ";
                    $contVet = str_word_count($frase, 2);
                    echo "<span class='verde'>";
                    print_r($contVet)."<br/>";
                    echo "</span><br/>";
                
            echo "<br/>";
            echo "<h1>Exemplo: explode()</h1>"; 

                $site = "Curso em Vídeo";
                echo "String: $site <br/>";
                $vetor = explode(" ", $site);
                echo "Vetor: ";
                    echo "<span class='verde'>";
                    print_r($vetor);
                    echo "</span><br/>";

            echo "<br/>";
            echo "<h1>Exemplo: str_split()</h1>"; 

                $nome = "Maria";
                echo "String: $nome <br/>";
                $vetor = str_split($nome);
                echo "Vetor: ";
                    echo "<span class='verde'>";
                    print_r($vetor);
                    echo "</span><br/>";

            echo "<br/>";
            echo "<h1>Exemplo: implode()</h1>"; 

                $vetor2[0] = "Curso";
                $vetor2[1] = "em";
                $vetor2[2] = "Vídeo";
                echo "Vetor: ";
                    echo "<span class='verde'>";
                    print_r($vetor2);
                    echo "</span><br/>";
                echo "Implode: ";
                    $texto = implode("#", $vetor2);
                    echo "<span class='verde'>".$texto."</span><br/>";

            echo "<br/>";
            echo "<h1>Exemplo: chr()</h1>";

                $letra = chr(67);
                echo "A letra de código 67 é <span class='verde'>[ $letra ]</span><br/>";

            echo "<br/>";
            echo "<h1>Exemplo: ord()</h1>";

                $letra = "C";
                $cod = ord($letra);
                echo "A letra <span class='verde'>[ $letra ]</span> corresponde ao código <span class='verde'>[ $cod ]</span><br/>";

            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>