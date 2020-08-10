<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Operadores de Atribuição em PHP</title>
    </head>

    <body>
        <div>
            <?php
                echo "<u>Utilizando Operadores de Atribuição</u><br/><br/>";
                $preco = $_GET["p"];
                echo "O preço do produto é R$: ". number_format($preco,2). "<br/>";
                $preco += ($preco*10/100);
                echo "O preço aumentou em 10%, ficando em R$: ". number_format($preco, 2). "<br/>"; // (preco = preco + (preco * 0.10)) também funciona.
                $preco -= ($preco*10/100);
                echo "Um desconto de 10% ocorreu no valor acima, ficando em R$: ". number_format($preco, 2). "<br/>";
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>