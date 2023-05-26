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
		$preco = $_GET['preco'] ?? '0';
		$reaj = $_GET['reaj'] ?? '0';

	?>
	<main>
		<h1>Reajustador de preço</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<label for="preco">Preço do produto?</label>
			<input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?php echo $preco ?>">

			<label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
			<input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?php echo $reaj; ?>">

			<input type="submit" value="Reajustar">
		</form>
	</main>

	<?php 
		$aumento = $preco * $reaj / 100;
		$novo = $preco + $aumento;
	?>
	<section id="resultado">
		<h2>Resultado do Reajuste</h2>
		<p>O produto que custava <?php 	echo number_format($preco, 2, ",", ".") ?>, com <strong><?php echo $reaj ?>% de aumento</strong> vai passar a custar <strong><?php echo number_format($novo, 2, ",", ".") ?><strong> a partir de agora!</p>
	</section>

	<script type="text/javascript">
		// Declarações automáticas.
		mudaValor();
		function mudaValor() {
			p.innerText = reaj.value;
		}
	</script>
</body>
</html>