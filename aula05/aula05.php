<?
require_once 'ContaBanco.php';
?>
<DOCTYPE html>
<html lang="pt_br">
<head>
	<title>Curso em Video - Programação Orientada à Objetos com PHP</title>
	<meta charset="utf-8">
	<meta name="keywords" content="PHP OOP">
	<meta name="description" content="Curso PHP OOP - www.cursoemvideo.com">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Carlos Eduardo dos Santos Roberto">		
</head>
<body>
	<pre>
	<?php

	try
	{
		$conta = new ContaBanco();
		// definir o tipo de conta
		$conta->abrirConta("CP");		
		$conta->setDono("CARLOS EDUARDO DOS SANTOS ROBERTO");		
		echo "Saldo atual: " . $conta->getSaldo();
		
		echo "<hr /><br />Depositar R$ 300,00";
		$conta->depositar(150);		
		echo "<br />Saldo atual: " . $conta->getSaldo();

		echo "<hr /><br />Sacar R$ 300,00";
		$conta->sacar(300);		
		echo "<br />Saldo atual: " . $conta->getSaldo();

		echo "<hr /><br />Pagar Mensalidade";
		$conta->depositar(15);
		$conta->pagarMensalidade();		
		echo "<br />Saldo atual: " . $conta->getSaldo();		

		echo "<hr /><br />Fechar Conta";
		$conta->fecharConta();		
		echo "<br />Saldo atual: " . $conta->getSaldo();	
		echo "<br />Status da Conta: " . ($conta->getStatus()?"Conta Aberta":"Conta Encerrada");	
	}
	catch( Exception $e )
	{
		echo "Ocorreu o seguinte erro: $e ";
	}

	echo "<hr />";
	print_r($conta);


	?>
	</pre>
</body>
</html>