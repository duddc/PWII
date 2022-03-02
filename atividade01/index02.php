<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Maior e menor</title>
</head>
<body>
    <?php
        echo("<h2>Tomada de decisão </h2> <h3>Desenvolva uma página que a partir de três números inteiros e determine qual é o menor e qual é o maior </h3>");

        $num1 = 3;
        $num2 = 25;
        $num3 = 15;

        if($num1 < $num2){
            $maior = $num2;
            $menor = $num1;
        }else if($maior < $num3){
            $maior = $num3;
        }else if ($menor < $num3){
            $menor = $num3;
        }
        
        echo("maior = " .$maior ." menor = ".$menor);
    ?>
</body>
</html>-