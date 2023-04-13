<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anatomia de uma divisão.</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php  
		//Captura dos dados.

		$dividendo = $_GET['d1'] ?? 0;
		$divisor = $_GET['d2'] ?? 1;
	?>
	<main>
		<h1>Anatomia de uma divisãos</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<label for="d1">Divividendo.</label>
			<input type="number" name="d1" id="d1" min="0" value="<?php echo $dividendo; ?>">

			<label for="d2">Divisor</label>
			<input type="number" name="d2" id="d2" min="1" value="<?php echo $divisor; ?>">

			<input type="submit" value="Analisar">
		</form>
	</main>

	<section id="resultado">
		<h2>Estutura da divisão.</h2>
		<?php
			//Cálculos
			$quociente = intdiv($dividendo, $divisor);
			$resto = $dividendo % $divisor; 
		?>

		<table class="divisao">
			<tr>
				<td><?php echo $dividendo; ?></td>
				<td><?php echo $divisor; ?></td>
			</tr>

			<tr>
				<td><?php echo $resto; ?></td>
				<td><?php echo $quociente; ?></td>
			</tr>
		</table>
	</section>
</body>
</html>