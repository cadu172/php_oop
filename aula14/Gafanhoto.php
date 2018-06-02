<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Pessoa.php';

/**
 * Description of Gafanhoto
 *
 * @author carlos
 */
class Gafanhoto extends Pessoa{
    
//put your code here
    private $login;
    private $totAssistido;
    
    public function __construct($nome, $idade, $sexo, $login) {
        $this->login = $login;
        $this->totAssistido = 0;
        parent::__construct($nome, $idade, $sexo);
    }

    
    public function viuMaisUm() {
        $this->totAssistido++;
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }


}
