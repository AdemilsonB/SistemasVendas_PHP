<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="format.css">
	<title>Valor final da compra</title>
</head>
<body class="fontt">

	<a href="index.php">Voltar para Home</a><br><br>

	<?php
	if (isset($_POST['enviar'])) 
	{
		
		if (empty($_POST['nome']) || empty($_POST['Nprod']) || empty($_POST['Vprod']) || empty($_POST['qntd']) || empty($_POST['met']))
		{
			echo "<h3>É necessário preencher os dados do formulário que não são opcionais!</h3>";
		}
		else
		{
			$nome = $_POST['nome'];
			$Nprod = $_POST['Nprod'];
			$Vprod = $_POST['Vprod'];
			$qntd = $_POST['qntd'];
			$met = $_POST['met'];
			$cpf = $_POST['cpf'];
			$result = $Vprod * $qntd;

			$soma = 0;
			$somaF = 0;
			$Dcpf = 0;
			$DFcpf = 0;

			$Vprod = number_format($Vprod, 2, ".", ",");
			$result = number_format($result, 2, ".", ",");

			echo "<h3>Nota Fiscal da Compra:</h3>";
			echo "Cliente: $nome.<br>";
			echo "Produto: $Nprod.<br>";
			echo "Preço do Produto: R$ $Vprod<br>";
			echo "Quantidade de Produto: $qntd Unidade(s).<br>";
			echo "CPF do Cliente: $cpf<br>";
			echo "Valor da Compra: R$ $result<br><br>";

			if ($met == 1)
			{
				$soma = ($result * 0.05);
				$somaF = $result - $soma;
				echo "Valor da compra com desconto de 2%: R$ $somaF<br>";

				if (!empty($_POST['cpf']))
				{
					$Dcpf = ($somaF * 0.03);
					$DFcpf = $somaF - $Dcpf;
					$DFcpf = number_format($DFcpf, 2);
					echo "Valor Total da Compra com 5% de desconto: R$ $DFcpf";
				}	

			}
				
			elseif ($met == 2) 
			{
				$soma = $result;
				$somaF = $result;
				echo "Valor da compra: R$ $somaF<br>";

				if (!empty($_POST['cpf']))
				{
					$Dcpf = ($somaF * 0.03);
					$DFcpf = $somaF - $Dcpf;
					$DFcpf = number_format($DFcpf, 2);
					echo "Valor Total da Compra com desconto de 3%: R$ $DFcpf";
				}	
			}
				
			elseif ($met == 3) 
			{
				$soma = ($result * 0.02);
				$somaF = $result + $soma;
				echo "Valor da compra com 2% de juros: $somaF<br>";
			}
				
			elseif ($met == 4) 
			{
				$soma = ($result * 0.05);
				$somaF = $result + $soma;
				echo "Valor da compra com 5% de juros: $somaF<br>";
			}
		}
		
	}

	
	?>
</body>
</html>