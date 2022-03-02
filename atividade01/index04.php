<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Potência</title>
</head>
<body>
    <?php
        
        echo("<h2>Laço de repetição </h2> <h3>Desenvolva um programa para calcular a potência de um número por uma base qualquer. O programa deverá realizar a leitura da base e do expoente. </h3>");

        $base = 2;
        $expoente = 4;
        $potencia =1;

        for($i =0; $i != $expoente; $i++){
            $potencia = $potencia * $base;
        };

        echo("A potência de base " . $base . " e expoente " . $expoente . " é = " . $potencia);
    ?>
</body>
</html>