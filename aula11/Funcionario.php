<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa {

    // atributos
    private $setor;
    private $trabalhando;
    private $salario;

    // construtor
    function __construct($_nome, $_idade, $_sexo, $_setor, $_trabalhando, $_salario) {

        // carregando as variáveis da classe
        $this->setSetor($_setor);
        $this->setTrabalhando($_trabalhando);
        $this->setSalario($_salario);

        // carregando as variáveis na superclasse
        parent::__construct($_nome, $_idade, $_sexo);

    }

    // destruct
    function __destruct()
    {
        parent::__destruct();
    }

    // metodos especiais (SET)
    public function setSetor($_setor) {
        $this->setor = $_setor;
    }

    public function getSetor() {
        return($this->setor);
    }

    public function setTrabalhando($_trabalhando) {
        $this->trabalhando = $_trabalhando;
    }

    public function getTrabalhando() {
        return($this->trabalhando);
    }

    private function getSalario()
    {
        return($this->salario);
    }

    private function setSalario($_salario)
    {
        $this->salario = $_salario;
    }

    // metodos privados
    // metodos protegidos

    // metodos publicos
    public function mudarTrabalho()
    {
        $this->trabalhando = !$this->trabalhando;
    }

    public final function receberAum($_valorAumento) {
        $this->setSalario($this->getSalario()+$_valorAumento);
    }


}

?>