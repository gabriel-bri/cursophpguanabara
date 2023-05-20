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
		$valor1 = $_GET['v1'] ?? '';
		$peso1 = $_GET['p1'] ?? '';

		$valor2 = $_GET['v2'] ?? '';
		$peso2 = $_GET['p2'] ?? '';
	?>
	<main>
		<h1>Médias aritméticas</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<label for="v1">1º valor</label>
			<input type="number" name="v1" id="v1" required value="<?php echo $valor1 ?>">

			<label for="p1">1º peso</label>
			<input type="number" name="p1" id="p1" min="1" required value="<?php echo $peso1 ?>">

			<label for="v2">2º valor</label>
			<input type="number" name="v2" id="v2" required value="<?php echo $valor2 ?>">

			<label for="p2">2º peso</label>
			<input type="number" name="p2" id="p2" min="1" required value="<?php echo $peso2 ?>">

			<input type="submit" value="Calcular médias.">
		</form>
	</main>

	<section id="resultado">
		<?php 
			$ma = ($valor1 + $valor2) / 2;
			$mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
		?>
		<h2>Cálculo das Médias</h2>
		<p>Analisando os valores <?php echo $valor1 ?> e <?php echo $valor2 ?></p>
		<ul>
			<li>
				A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?php echo number_format($ma, 2, ",", ".") ?>.
			</li>
			<li>
				A <strong>Média Aritmética Ponderada</strong> com pesos <?php echo $peso1 ?> e <?php echo $peso2 ?> é igual a <?php echo number_format($mp, 2, ",", ".") ?>.
			</li>
		</ul>
	</section>
</body>
</html>