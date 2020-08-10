<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link type="text/css" rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 17 - Manipulação de Strings (02/02)</title>
    </head>
    <body>
        <div>
            <?php
            echo "<h1>Exemplo: strtolower()</h1>";

                $nome = "LEONARDO";
                echo "O nome foi digitado assim: <span class='verde'>$nome</span><br/>";
                echo "Ficou assim: <span class='verde'>".strtolower($nome)."</span>";

            echo "<br/>";
            echo "<h1>Exemplo: strtoupper()</h1>";

                $nome = "leonardo";
                echo "O nome foi digitado assim: <span class='verde'>$nome</span><br/>";
                echo "Ficou assim: <span class='verde'>".strtoupper($nome)."</span>";

            echo "<br/>";
            echo "<h1>Exemplo: ucfirst()</h1>";

                $nome = "leoNardo";
                $nomeOk = ucfirst($nome);
                $nomeOk2 = ucfirst(strtolower($nome));
                echo "O nome foi digitado assim: <span class='verde'>$nome</span><br/>";
                echo "Ficou assim: <span class='verde'>$nomeOk</span><br/>";

                echo "Junto ao strtolower(): <span class='verde'>$nomeOk2</span>";

            echo "<br/>";
            echo "<h1>Exemplo: ucwords()</h1>";

                $nome = "leonardo t. s.";
                $nomeOk = ucwords($nome);
                echo "O nome foi digitado assim: <span class='verde'>$nome</span><br/>";
                echo "Ficou assim: <span class='verde'>$nomeOk</span><br/>";

            echo "<br/>";
            echo "<h1>Exemplo: strrev()</h1>";

                $nome = "leonardo t. s.";
                echo "O nome foi digitado assim: <span class='verde'>$nome</span><br/>";
                echo "Ficou assim: <span class='verde'>".strrev($nome)."</span><br/>";

            echo "<br/>";
            echo "<h1>Exemplo: strpos()</h1>";

                $frase = "Estou aprendendo PHP";
                $pos = strpos($frase, "PHP");
                echo "Na frase: $frase"."<br/>";
                echo 'Em strpos($frase, "PHP"). A string "PHP" foi encontrada na posição: <span class="verde">'.$pos.'</span><br/>';
                echo "<br/><span class='vermelho'>[!] Atenção:</span> Em strpos(var, pesquisa) - a pesquisa é Case-sensitive - Se não encontrar algo, retornará <span class='verde'>FALSO</span>";

                echo "<br/><span class='vermelho'>[!] Atenção:</span> Podemos utilizar <span class='verde' style='text-decoration: underline;'>stripos(var, pesquisa)</span> se desejarmos ignorar, em nossa pesquisa, a caixa da String. -- Perceba a presença do i de (ignore).";

            echo "<br/>";
            echo "<h1>Exemplo: substr_count()</h1>";

                $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
                $count = substr_count($frase, "PHP");
                echo "Na frase: $frase"."<br/>";
                echo '"PHP" foi encontrado <span class="verde">'.$count.'</span> vezes<br/>';

                echo "<br/><span class='vermelho'>[!] Atenção:</span> substr_count(var, pesquisa) - a pesquisa é Case-sensitive.";

            echo "<br/>";
            echo "<h1>Exemplo: substr()</h1>";

                $site = "Curso em Video";
                $sub = substr($site, 0, 5);
                echo "String: $site"."<br/>";
                echo '[ substr($site, 0, 5) ] retorna:'."<span class='verde'>$sub</span><br/>";
                $sub = substr($site, -5);
                echo '[ substr($site, -6) ] retorna:'."<span class='verde'>$sub</span><br/>";
                $sub = substr($site, -5, 2);
                echo '[ substr($site, -6, 3) ] retorna:'."<span class='verde'>$sub</span><br/>";

            echo "<br/>";
            echo "<h1>Exemplo: str_pad()</h1>";

                $nome = "Leonardo";
                $pad = str_pad($nome, 30, "#", STR_PAD_RIGHT);
                echo 'Meu nome em 30 espaços: <span class="verde">'.$pad.'</span>.<br/>';

            echo "<br/>";
            echo "<h1>Exemplo: str_repeat()</h1>";

                $txt = "Php";
                echo 'O texto gerado foi: <span class="verde">'.str_repeat($txt, 5).'</span>.<br/>';

            echo "<br/>";
            echo "<h1>Exemplo: str_replace()</h1>";

                $frase = "Gosto de estudar Matemática!!! Matemática é muito legal!";
                echo 'Frase original: <span class="verde">'.$frase.'</span><br/>';
                echo 'Frase alterada: <span class="verde">'.str_replace("Matemática", "PHP", $frase).'</span><br/>';

                echo "<br/><span class='vermelho'>[!] Atenção:</span> Em str_replace(palavra original, palavra que substituirá a orignial, var com a string) - tudo é Case-sensitive. Além disso, ele substitui todas as ocorrências da palavra<br/>";

                echo "<br/><span class='vermelho'>[!] Atenção:</span> Apesar disso, você poderá colocar o i de (ignore) no comando para ignorar a sensibilidade da caixa do texto. <span class='verde'>".'str_ireplace("matemática", "PHP", var string)'."</span><br/>";

            ?>

            <a class="direita" href="javascript: history.go(-1)">Voltar</a>
        </div>
    </body>
</html>