<?php

/**
*
	implementacao da classe, aula 1 do curso de php OOP 
*/
class Caneta
{

	// atributos da classe
	private $modelo;	
	private $ponta;
	private $tampada;
	private $cor;

	// construtor
	public function __construct($p_Modelo,$p_Ponta,$p_Cor)
	{		
		$this->setModelo($p_Modelo);
		$this->setPonta($p_Ponta);
		$this->setCor($p_Cor);
		$this->tampar();
	}

	// métodos getter/setters
	public function tampar(){
		$this->tampada = true;
	}

	public function getCor(){
		return $this->modelo;
	}
	
	public function setCor($p_Cor){
		$this->cor = $p_Cor;
	}


	public function getModelo(){
		return $this->modelo;
	}
	
	public function setModelo($p_Modelo){
		$this->modelo = $p_Modelo;
	}
	
	public function getPonta(){
		return $this->ponta;
	}
	
	public function setPonta($p_Ponta){
		$this->ponta = $p_Ponta;
	}
}


?>