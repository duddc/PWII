<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Números pares e ímpares</title>
</head>
<body>
    <?php
        
        echo("<h2>Laço de repetição </h2> <h3>Desenvolva um programa para calcular a soma de todos os números ímpares de 0 à 20 e a multiplicação de todos os números pares de 0 à 20.</h3>");

        $somaImpar = 0;
        $mutiPar = 1; 
        $impar= 0;
        $par = 0;

        for($i=0; $i <=20; $i++){
            if($i % 2 == 0){
                $par = $i;
                $mutiPar = $mutiPar * $par;
            }else{
                $impar = $i;
                $somaImpar = $somaImpar + $impar;
            }
        }

        echo("A soma de todos os números ímpares de 1 a 20, é igual a " . $somaImpar .
        "<br> A mutiplicação de todos os números pares de 1 a 20 é igual a " . $mutiPar);
        
    ?>
</body>
</html>