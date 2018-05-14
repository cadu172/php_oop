<?php

require_once 'Funcionario.php';

class Professor extends Funcionario {

    // atributos
    private $especialidade;

    // construtor
    function __construct($_nome, $_idade, $_sexo, $_setor, $_trabalhando, $_salario, $_especialidade)
    {

        // atributos locais
        $this->setEspecialidade($_especialidade);

        // chamar superclasse
        parent::__construct($_nome, $_idade, $_sexo, $_setor, $_trabalhando, $_salario);
    }

    // destruct
    function __destruct()
    {
        parent::__destruct();
    }

    // metodos especiais (GET)
    public function getEspecialidade()
    {
        return($this->especialidade);
    }

    // metodos especiais (SET)
    public function setEspecialidade($_especialidade)
    {
        $this->especialidade = $_especialidade;
    }

    // metodos privados
    // metodos protegidos
    // metodos publicos

}


?>