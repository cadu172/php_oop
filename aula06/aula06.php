<?
require_once 'ControleRemoto.php';
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
	<title>Aula 06 - Implementando encapsulamento e Interface</title>
	<meta charset="utf-8">
</head>
<body>	
<pre>	
<?php

$controle = new ControleRemoto();
$controle->ligar();
$controle->play();
$controle->pause();
$controle->maisVolume();
$controle->maisVolume();
$controle->maisVolume();
$controle->maisVolume();
$controle->maisVolume();
$controle->maisVolume();
$controle->abrirMenu();

echo "<hr />";

print_r($controle);

?>
</pre>
</body>
</html>