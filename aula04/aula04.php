<?
require_once 'Class_Caneta.php';
?>
<DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Curso em Video - Programação Orientada à Objetos com PHP</title>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5">
	<meta name="description" content="Curso PHP OOP - www.cursoemvideo.com">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Carlos Eduardo dos Santos Roberto">		
</head>
<body>
	<div id="interface">
		<header>
			<h2>Curso em Video - Programação Orientada à Objetos com PHP</h2>			
			<nav>
				<ul>
					<li><a href="/cursoemvideo/php_oop/index.php">Home</a></li>
					<li><a href="/cursoemvideo/php_oop/index.php">Voltar</a></li>
				</ul>				
			</nav>
		</header>

		<section>
			<article>
				<header>
					<h3>Header ARTICLE</h3>					
				</header>
				<pre>
				<?php

				/*
					cria uma instancia da classe e inicializa os atributos
				*/
				$caneta_azul = new Caneta;
				$caneta_azul->modelo = "BIC";
				$caneta_azul->cor = "AZUL";
				//$caneta_azul->ponta = 0.5;
				//$caneta_azul->carga = "25%";
				//$caneta_azul->tampada = true;

				echo "<h2>Estrutura da Classe CANETA (Public/Private/Protected)</h2><hr />";
				print_r($caneta_azul);


				?>
				</pre>
				<footer>
					<small>Footer Article</small>		
				</footer>
			</article>
		</section>

		<footer>			
			<small>Programação Orientada a Objetos com PHP</small>
		</footer>
	</div>
</body>
</html>