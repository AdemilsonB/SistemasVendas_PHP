<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="format.css">
	<title>Aula 07 - Home</title>
</head>
<body>

	<h1 class="cor">Cadastro de Venda</h1>

	<form action="index.php" method="post">
		<p>
			<h4><label>Selecione o tipo do produto a ser comprado:</label></h4>
			<select name="opcao" class="button boott">
				<option value="Eletrônicos">Eletrônicos</option>
				<option value="Vestuário">Vestuário</option>
				<option value="Alimentos">Alimentos</option>
			</select>
		</p>
		<p>
			<button type="submit" name="Enviar" class="buttonn boottt">Iniciar Venda</button>

		</p>
	</form><br>

	<?php 

	if (isset($_POST['Enviar']))
	{
		$opcao= $_POST['opcao'];

		echo "SISTEMA DE VENDAS – VENDA DE $opcao<br><br>";
	
		echo "<h4>Preencha os dados:</h4>";
	?>

	<form method="post" action="venda.php">

		<p>
			<label class="font">Nome do cliente:</label><br>
			<input type="text" name="nome" placeholder="digite seu nome:" class="buttonnnn boot">
		</p>
		<p>
			<label class="font">Nome do Produto:</label><br>
			<input type="text" name="Nprod" placeholder="digite o nome:" class="buttonnnn boot">
		</p>
		<p>
			<label class="font">Valor do produto:</label><br>
			<input type="number" name="Vprod" placeholder="R$ 00" step="0.01" class="buttonnnn boot">

		</p>
		<p>
			<label class="font">Quantidade de produtos:</label><br>
			<input type="number" name="qntd" placeholder="digite a quantidade:" class="buttonnnn boot">
		</p>
		<p>
			<label class="font">Digite seu CPF (opcional):</label><br>
			<input type="text" name="cpf" placeholder="000.000.000-00"class="buttonnnn boot">
		</p>
		<p>
			<label><h4>Selecione um método de pagamento:</h4></label>
			<select name="met" class="button boott">
				<option selected disabled>Selecione uma forma de pagemento:</option>
				<option value="1">A vista no dinheiro</option>
				<option value="2">A vista no débito</option>
				<option value="3">Parcelado em até 3x no cartão</option>
				<option value="4">Parcelado em até 5x no cartão</option>
			</select>
		</p>
		<p>
			<button type="submit" name="enviar" class="buttonn boottt">Enviar</button>
			<button type="reset" name="apagar" class="buttonnn boottt">Apagar</button>
		</p>
	</form>

	<?php
	}
	?>

</body>
</html>