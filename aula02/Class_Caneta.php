<?php

/**
*
	implementacao da classe, aula 1 do curso de php OOP 
*/
class Caneta
{

	var $modelo;
	var $cor;
	var $ponta;
	var $carga;
	var $tampada;

	function rabiscar() {
		if ( $this->tampada == true )
		{
			echo "<p>Impossivel rabiscar, caneta tampada</p>";
		}
		else {
			echo "<p>Rabiscando....</p>";
		}
	}

	function tampar() {
		$this->tampada = true;
	}

	function destampar() {
		$this->tampada = false;
	}	

}


?>