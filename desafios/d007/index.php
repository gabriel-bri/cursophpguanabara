<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Desafio PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php  
		//Captura dos dados.
		$minimo = 1380.60;
		$salario = $_GET['sal'] ?? $minimo;
	?>
	<main>
		<h1>Informe seu salário</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<label for="sal">Salário (R$)</label>
			<input type="number" name="sal" id="sal" step="0.01" value="<?php echo $salario; ?>">

			<p>Considerando o salário mínimo de <strong>R$<?php echo number_format($minimo, 2, ",", ".");?></strong></p>
			<input type="submit" value="Calcular">
		</form>
	</main>

	<section>
		<h2>Resultado final.</h2>
		<?php
			$tot = intdiv($salario, $minimo);
			$dif = $salario % $minimo;

			echo "<p>Quem recebe um salário de R\$" . number_format($salario, 2, ",", ".") . " ganha <strong>$tot salários mínimos</strong> + R\$ " . number_format($dif, 2, ",", ".") . "</p>";		
		?>
	</section>
</body>
</html>