<?php

// ### implementação da superclasse pessoa

class Pessoa {

    // atributos
    private $nome; //string
    private $idade; //smallint;
    private $sexo; //string

    // construtor
    function __construct($_nome, $_idade, $_sexo)
    {
        $this->setNome($_nome);
        $this->setIdade($_idade);
        $this->setSexo($_sexo);
    }

    // destruct
    function __destruct()
    {
        echo "metodo Destruct executado na classe Pessoa";
    }

    // metodos especiais (GET)
    public function getNome() {
        return($this->nome);
    }

    public function getIdade() {
        return($this->idade);
    }

    public function getSexo() {
        return($this->sexo);
    }

    // metodos especiais (SET)
    public function setNome($_nome) {
        $this->nome = $_nome;
    }

    public function setIdade($_idade) {
        $this->idade = $_idade;
    }

    public function setSexo($_sexo) {
        $this->sexo = $_sexo;
    } //string

    // metodos privados
    // metodos protegidos

    // metodos publicos
    public function fazerAniv() {
        $this->setIdade($this->getIdade()+1);
    }

} // fim da classe pessoa

?>