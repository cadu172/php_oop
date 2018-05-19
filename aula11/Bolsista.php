<?PHP

require_once 'Aluno.php';

class Bolsista extends Aluno {

    // atributos
    private $valorBolsa; // valor da bolsa

    function __construct($_nome, $_idade, $_sexo, $_matr, $_curso, $_valorBolsa)
    {

		$this->setValorBolsa($_valorBolsa);

		// passar os parametros de construηγo da super classe
		parent::__construct($_nome, $_idade, $_sexo, $_matr, $_curso);

	}

    // metodos privados
    public function setValorBolsa($_valorBolsa)
    {
		$this->valorBolsa = $_valorBolsa;
	}

    // destruct
    function __destruct()
    {
        parent::__destruct();
    }

    public function getValorBolsa()
    {
		return($this->valorBolsa);
	}

    // metodos protegidos
    // metodos publicos
    public final function renovarBolsa()
    {
        echo "Renovando Bolsa";
    }

    /* Overide DO METODO Aluno->pagarMensalidade() */
    public function pagarMensalidade()
    {
		echo "(Overide)BOLSISTA PAGANDO MENSALIDADE....";
    }

}

?>