<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Conversor de Moedas v1.0</h1>
	</header>

		<main>
			<?php
				$dinheiro = $_GET["dinheiro"] ?? 0;
				$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

				echo "<p>Seus " . numfmt_format_currency($padrao, $dinheiro, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dinheiro / 5.28, "USD") . "<strong>";

				echo "<p>*<strong>Cotação fixa de R$ 5,28</strong> informada diretamente no código";
			?>
			<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
		</main>
</body>
</html>