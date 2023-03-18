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
		<h1>Resultado do processamento</h1>
	</header>

		<main>
			<?php
				$nome = $_GET['nome'] ?? "Sem nome";
				$sobrenome = $_GET['sobrenome'] ?? "Desconhecido";

				echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome!</strong> Este é meu site!";
			?>
			<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
		</main>
</body>
</html>