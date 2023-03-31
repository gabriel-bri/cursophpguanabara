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
		<h1>Analisador de número real</h1>
	</header>

		<main>
			<?php
				$num = $_GET['numero'] ?? 0;

				echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo o usuário!";

				$int = (int) $num;
				$fra = $num - $int;

				echo "<ul><li>A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";
				echo "<li>A parte francionária do número é <strong>" . number_format($fra, 0, ",", ".") . "</strong></li></ul>";
			?>
			<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
		</main>
</body>
</html>