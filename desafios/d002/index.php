<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Desafio PHP.</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h2>Trabalhando com números aleatórios:</h2>
	</header>

	<section>
		<p>Gerando um número aleatório entre 0 e 100...</p>
		<p>
			<?php  
				echo "O valor gerado foi <strong>" . mt_rand(0, 100) . "</strong>";
			?>
		</p>

		<button onclick="javascript:document.location.reload()">Gerar outro.</button>
	</section>
</body>
</html>