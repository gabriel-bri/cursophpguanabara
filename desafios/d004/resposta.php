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

				$incio = date("m-d-Y", strtotime("-7 days"));
				$fim = date("m-d-Y");
				$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $incio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';

				$dados = json_decode(file_get_contents($url), true);

				$cotacao = $dados["value"][0]["cotacaoCompra"];

				echo "<p>Seus " . numfmt_format_currency($padrao, $dinheiro, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dinheiro / $cotacao, "USD") . "<strong>";

				echo "<p>*<strong>Cotação fixa de R$ 5,28</strong> informada diretamente no código";
			?>
			<p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
		</main>
</body>
</html>