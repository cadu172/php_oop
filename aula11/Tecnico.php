<?PHP

require_once 'Aluno.php';

class Tecnico extends Aluno {

    // atributos
    private $registroPro; // valor da bolsa

    function __construct($_nome, $_idade, $_sexo, $_matr, $_curso, $_registroPro)
    {
		// setar o valor da bolsa
		$this->setRegistroPro($_registroPro);

		// passar os parametros de construção da super classe
		parent::__construct($_nome, $_idade, $_sexo, $_matr, $_curso);
	}


	public function getRegistroPro()
	{
		return($this->registroPro);
	}

	private function setRegistroPro($_registroPro)
	{
		$this->registroPro = $_registroPro;
	}

    // destruct
    function __destruct()
    {
        parent::__destruct();
    }

    // metodos privados
    // metodos protegidos
    // metodos publicos
    public final function praticar()
    {
        echo "<p>Praticando ????</p>";
    }

}

?>