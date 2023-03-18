<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tipos primitivos em PHP</title>
</head>
<body>
	<h1>Teste de tipos primitivos!</h1>
	<?php
		//0x = hexadecimal, 0b =  binário e 0 = octal  
		// $num = 0b1001;
		// echo "O valor da variável é $num";

		// $v = "Gabriel";
		// var_dump($v);

		// $num = (integer) 3e2; // coerção
		// echo "O valor é $num";
		// var_dump($num);

		// $num = (float) "950";
		// var_dump($num);

		// $casado = true;
		// var_dump($casado);
		// print "O valor para casado é $casado"

		// $vet = [6, 2, 9, 3, 5, "Maria", false, 2.5];
		// var_dump($vet);

		class Pessoa {
			// Funciona em versões mais recentes do PHP 
			private string $nome;
		}

		$p = new Pesosa;
		var_dump($p);
	?>	
</body>
</html>