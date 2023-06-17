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
		$total = $_REQUEST['seg'] ?? 0;

	?>
	<main>
		<h1>Calculadra do tempo</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<label for="preco">Qual é o total de segundos?</label>
			<input type="number" name="seg" id="seg" min="1" step="1" required value="<?php 	echo number_format($total, 0, ",", ".") ?>">

			<input type="submit" value="Calcular">
		</form>
	</main>
	<section id="resultado">
		<?php 	 
			$sobra = $total;
			// Semanas
			$semana = (int) ($sobra / 604800);
			$sobra = $sobra % 604800;

			// Dias
			$dia = (int) ($sobra / 86400);
			$sobra = $sobra % 86400;

			// Horas
			$hora = (int) ($sobra / 3600);
			$sobra = ($sobra) % 3600;

			// Minutos
			$minuto = (int) ($sobra / 60);
			$sobra = $sobra % 60;

			$segundo = $sobra;
		?>
		<h2>Totalizando tudo</h2>
		<p>Analisando o valor que você digitou, <strong><?php echo $total; ?> segundos</strong> equivalem a um total de:</p>
		<ul>
			<li><?php echo $semana ?> semanas</li>
			<li><?php echo $dia ?> dias</li>
			<li><?php echo $hora ?> horas</li>
			<li><?php echo $minuto ?> minutos</li>
			<li><?php echo $segundo ?> segundos</li>
		</ul>
	</section>
</body>
</html>