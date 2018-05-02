<?php


class ContaBanco
{

	// atributos	
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;
	private $valorMinDEPOSITO;
	private $valorMinSAQUE;
	private $valorMensalidade;

	// métodos
	
	// ############## construtor #################################
	public function ContaBanco()
	{
		$this->saldo  = 0;
		$this->status = false;
		$this->valorMinDEPOSITO = 10;
		$this->valorMinSAQUE = 10;
		$this->valorMensalidade = 15;
	}

	// ############## getters ans setters #################################
	public function getNumConta()
	{
		return( $this->numConta );
	}

	public function setNumConta($p_numConta)
	{
		$this->numConta = $p_numConta;
	}

	public function getTipo()
	{
		return( $this->tipo );
	}

	public function setTipo($p_tipo)
	{
		if ( $p_tipo == "CP" )
		{
			$this->tipo = $p_tipo;
			$this->depositar(150);
		}
		elseif ( $p_tipo == "CC" )
		{
			$this->tipo = $p_tipo;
			$this->depositar(50);
		}
		else
		{
			throw new Exception("Atenção! Tipo de conta informado é inválido, informe apenas CC (conta-corrente) ou CP (conta-poupanca)");			
		}
	}

	public function getDono()
	{
		return( $this->dono );
	}

	public function setDono($p_dono)
	{
		$this->dono = $p_dono;
	}

	public function getSaldo()
	{
		return( $this->saldo );
	}

	public function setSaldo($p_saldo)
	{
		$this->saldo = $p_saldo;
	}

	public function getStatus()
	{
		return( $this->status );
	}

	public function setStatus($p_status)
	{		
		$this->status = $p_status;
	}	


	// ############## métodos locais #############################			
	public function abrirConta($p_TipoConta)
	{		
		if ( $this->getStatus() )
		{
			throw new Exception("Esta conta já está aberta!");
		}
		else
		{
			$this->setStatus(true);
			$this->setTipo($p_TipoConta);		
		}
	}

	public function fecharConta()
	{		

		if (  ! $this->getStatus() )
		{
			throw new Exception("Esta conta já está fechada!");
		}		
		elseif (  $this->getSaldo() == 0 )
		{
			$this->setStatus(false);
		}
		else
		{
			throw new Exception("Sua conta não pode ser encerrada porque seu saldo atual é de $this->saldo ");			
		}

	}

	public function depositar($p_Valor)
	{

		if (  ! $this->getStatus() )
		{
			throw new Exception("Impossivel Depositar, CONTA FECHADA!");
		}
		elseif (  $p_Valor >= $this->valorMinDEPOSITO )
		{
			$this->setSaldo($this->getSaldo()+$p_Valor);
		}
		else
		{
			throw new Exception("Atenção! Valor para depósito deve ser de pelo menos R$ $this->valorMinDEPOSITO, você está tentando depositar $p_Valor ");
		}

	}

	public function sacar($p_Valor){

		if (  ! $this->getStatus() )
		{
			throw new Exception("Impossivel Sacar, CONTA FECHADA!");
		}      
      elseif ( $p_Valor >= $this->valorMinSAQUE )
		{
			if ( $this->getSaldo() >= $p_Valor )
			{
				$this->setSaldo($this->getSaldo()-$p_Valor);
			}
			else
			{
				throw new Exception("Saldo Insuficiente, Impossível Sacar");
			}
		}
		else
		{
			throw new Exception("Valor mínimo para saque R$ $this->valorMinSAQUE ");
		}		

	}

	public function pagarMensalidade(){

		$valorTarifa = 0;

		if (  $this->getTipo() == "CC" )
		{
			$valorTarifa = 10;
		}
		elseif (  $this->getTipo() == "CP" )
		{
			$valorTarifa = 15;
		};

		try
		{
			if ( ! $this->getStatus() )
			{
				throw new Exception("Impossivel realizar operação de cobranca de tarifa, conta fechada ou não aberta");
			}
			else
			{
				$this->sacar($valorTarifa);	
			}			
		} 
		catch (  Exception $e ) {
			throw new Exception($e);
		}
		
	}

}

?>