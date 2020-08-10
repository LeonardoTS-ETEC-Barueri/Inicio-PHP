<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css" type="text/css"/>
        <title>Operadores Lógicos em PHP</title>
    </head>

    <body>
        <div>
            <?php
                echo "<u>Operadores Lógicos: Sou obrigado a votar?</u><br/><br/>";
                echo "• Vamos receber o ano de nascimento através de parâmetros URL<br/>Calcular sua idade e então, exibir se você está obrigado a votar ou não.<br/><br/>-Se você tiver entre 16 e 18 anos ou acima de 64 anos, seu voto é opcional<br/>-Se tiver abaixo de 16 anos, você não vota.<br/>-Se tiver entre 18 e 64, você é obrigado a votar.<br/><br/>";

                $ano = $_GET["nasc"];
                $idade = (2020 - $ano);
                $r = ( ($idade > 17) && ($idade < 65) )? "seu voto é obrigatório": (($idade > 15) && ($idade < 18) ? "seu voto é opcional" : "ainda não vota.");
                echo "Quem nasceu em $ano tem $idade anos.<br/>";
                echo "Portanto, $r<br/>";
                
            ?>
            <br/>
            <a class="direita" href="inicio.php">Voltar</a>
        </div>
    </body>
</html>