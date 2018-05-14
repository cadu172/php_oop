<?PHP

require_once 'Pessoa.php';

class Aluno extends Pessoa {

    // atributos
    private $matr; // boolean
    private $curso; // string

    // construtor
    // construtor
    function __construct($_nome, $_idade, $_sexo, $_matr, $_curso) {

        // carregando as variáveis da classe
        $this->setMatr($_matr);
        $this->setCurso($_curso);

        // carregando as variáveis na superclasse
        parent::__construct($_nome, $_idade, $_sexo);

    }


    // destruct
    function __destruct()
    {
        parent::__destruct();
    }

    // metodos especiais (GET)
    public function getMatr()
    {
        return($this->matr);
    }

    public function getCurso()
    {
        return($this->curso);
    }

    // metodos especiais (SET)
    public function setMatr($_matr)
    {
        $this->matr = $_matr;
    }

    public function setCurso($_curso)
    {
        $this->curso = $_curso;
    }

    // metodos privados
    // metodos protegidos
    // metodos publicos
    public function cancelarMatr()
    {
        $this->setMatr(!$this->getMatr());
    }

}

?>