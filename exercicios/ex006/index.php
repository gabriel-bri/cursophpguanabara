<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php  
		//Captura dos dados.

		$valor1 = $_GET['v1'] ?? 0;
		$valor2 = $_GET['v2'] ?? 0;
	?>
	<main>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<label for="v1">
				Valor 1
			</label>

			<input type="number" name="v1" id="v1" value="<?php echo $valor1; ?>">

			<label for="v2">
				Valor 2
			</label>

			<input type="number" name="v2" id="v2" value="<?php echo $valor2; ?>">

			<input type="submit" value="Somar">
		</form>
	</main>

	<section id="resultado">
		<h2>Resultado da soma:</h2>
		<?php  
			$soma = $valor1 + $valor2;
			print "<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</strong>";
		?>
	</section>
</body>
</html>