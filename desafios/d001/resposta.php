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
		<h1>Resultado final</h1>
	</header>

		<main>
			<?php
				$numero = $_GET["numero"] ?? 0;

				echo "<p>O número escolhido foi: <strong>$numero</strong>";
				echo "<p>O seu antecessor: <strong>" . ($numero - 1) . "</strong>";
				echo "<p>O seu sucessor: <strong>" . ($numero + 1) . "</strong>";
			?>
			<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
		</main>
</body>
</html>