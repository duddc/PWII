<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Números primos</title>
</head>
<body>
    <?php
        
        echo("<h2>Laço de repetição </h2> <h3>Desenvolva uma página que ao ler um número diga se ele é primo ou não. </h3>");

        $resto=0;
        $num =5;

			for ($i=1; $i<=$num; $i++) {
				if ($num % $i == 0) {
					$resto++;
				}
			} 
			
			if ($resto > 2) {
				echo("O número ". $num ." não é primo");
			}else {
				echo("O número ". $num . " é primo");
			} 

    ?>
</body>
</html>