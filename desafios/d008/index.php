<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Desafio PHP.</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php  
		//Captura dos dados.
		$numero = $_GET['num'] ?? 0;
	?>
	<main>
		<h1>Anatomia de uma divisãos</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<label for="num">Número.</label>
			<input type="number" name="num" id="num" value="<?php echo $numero; ?>">

			<input type="submit" value="Calcular raízes.">
		</form>
	</main>

	<section id="resultado">
		<h2>Resultado final.</h2>
		<?php

			$rq = $numero ** (1/2);
			$rc = $numero ** (1/3);
			echo "<p>Analisando o número <strong>$numero</strong>, temos:";
			echo "<ul><li>A sua raiz quadrada é " . number_format($rq, 2, ",", ".") . "</li>";
			echo "<li>A sua raiz cúbica é " . number_format($rc, 2, ",", ".") . "</li></ul>";
		?>
		</table>
	</section>
</body>
</html>