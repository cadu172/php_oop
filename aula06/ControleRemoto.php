<?php
require_once 'IControlador.php';

class ControleRemoto implements IControlador 
{

	// atributos
	private $ligado;
	private $volume;
	private $tocando;
	private $volumeMaximo;

	// construtor
	public function __construct() 
	{
		$this->setLigado(false);
		$this->setVolume(0);
		$this->setTocando(false);

		// volume máximo
		$this->volumeMaximo = 100;
	}

	// getter and setters
	private function getLigado()
	{
	    return $this->ligado;
	}
	
	private function setLigado($ligado)
	{
		$this->ligado = $ligado;
	}
	
	private function getVolume()
	{
	    return $this->volume;
	}
	
	private function setVolume($volume)
	{
		if ( $this->getLigado() )
		{
			if ( $volume < 0 )
			{
				$this->volume = 0;
			}
			elseif ( $volume > $this->volumeMaximo )
			{
				$this->volume = $this->volumeMaximo;
			}
			else
			{
				$this->volume = $volume;
			}			
		}
	}
	
	private function getTocando()
	{
	    return $this->tocando;
	}
	
	private function setTocando($tocando)
	{
	    return $this->tocando = $tocando;
	}

	// implementações.
	public function ligar()
	{
		if ( ! $this->getLigado() )
		{
			$this->setLigado(true);
		}
	}
	
	public function desligar()
	{
		$this->setLigado(false);
	}
	
	public function abrirMenu()
	{
		
		echo "<p>#### Menu Controle ####</p>";
		echo "<p>Está Ligado: " . ($this->getLigado()?"SIM":"NÃO" . "</p>");
		echo "<p>Está Tocando: " . ($this->getTocando()?"SIM":"NÃO" . "</p>");
		echo "<p>Volume: (".$this->getVolume().") ";

		for ( $i=0; $i<$this->volumeMaximo; $i+=5 )  
		{
			if ( $i < $this->getVolume() )
			{
				echo "#";
			}
			else
			{
				echo ".";
			}
		}

		echo "</p>";

	}
	
	public function fecharMenu()
	{
		echo "Menu fechando...";
	}
	
	public function maisVolume() 
	{
		if($this->getLigado()) 
		{
			$this->setVolume($this->getVolume()+5);
		}
		else
		{
			throw new Exception("Não é possível AUMENTAR o volume com o aparelho DESLIGADO");
		}
	}

	public function menosVolume() 
	{
		if ( $this->getLigado() )
		{
			if ( $this->getVolume()>0 )			
			{
				$this->setVolume($this->getVolume()-5);
			}
		}
		else
		{
			throw new Exception("Não é possível DIMIMUIR o volume com o aparelho DESLIGADO");
		}

	}

	public function ligarMudo() 
	{
		if ( $this->getLigado() )
		{
			if ( $this->getVolume() > 0 )			
			{
				$this->setVolume(0);
			}
		}
	}
	
	public function desligarMudo()
	{
		if (  $this->getLigado() )
		{
			if (  $this->getVolume() == 0 )
			{
				$this->setVolume(50);
			}
		}
	}
	
	public function play()
	{
		if ( $this->getLigado() && ! $this->getTocando()  )
		{
			$this->setTocando(true);
		}
		else
		{
			throw new Exception("Impossível executar Play, aparelho DESLIGADO");
		}
	}
	
	public function pause()
	{
		if ( $this->getLigado() && $this->getTocando()  )
		{
			$this->setTocando(false);
		}
		else
		{
			throw new Exception("Impossível executar Play, aparelho DESLIGADO");
		}		
	}	

}
	

?>