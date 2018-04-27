<?php

/**
*
	implementacao da classe, aula 1 do curso de php OOP 
*/
class Caneta
{

	public $modelo;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;

	public function rabiscar() {
		if ( $this->tampada == true )
		{
			echo "<p>Impossivel rabiscar, caneta tampada</p>";
		}
		else {
			echo "<p>Rabiscando....</p>";
		}
	}

	public function tampar() {
		$this->tampada = true;
	}

	public function destampar() {
		$this->tampada = false;
	}	

}


?>