<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Prática Ternários e Relacionais em PHP</title>
    </head>

    <body>
        <div>
            <?php
                echo "<u>Prática: Operador Ternários e Operadores Relacionais.</u><br/><br/>";
                echo "• Vamos receber as notas do aluno através de parâmetros URL<br/>  Calcular sua média e então, exibir sua situação.<br/><br/>";

                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $m = ($nota1 + $nota2)/2;
                echo "A media entre $nota1 e $nota2 é [$m]<br/>";
                $sit = ($m < 6) ? "Reprovado" : "Aprovado";
                echo "A situação do aluno é [$sit]";
                // echo "A situação do aluno é [". (($m < 6) ? "Reprovado" : "Aprovado"). "]"; // Podemos economizar uma variável, utilizando o Operador Ternário diretamente na saída. Note o uso dos parênteses!
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>