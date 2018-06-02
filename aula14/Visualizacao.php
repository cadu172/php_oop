<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Video.php';
require_once 'Gafanhoto.php';
/**
 * Description of Visualizacao
 *
 * @author carlos
 */
class Visualizacao {
    //put your code here
    private $expectador;
    private $filme;
    
    public function __construct($expectador, $filme) {
        
        // agregar objetos
        $this->expectador = $expectador;
        $this->filme = $filme;
        
        // usando objetos agregados
        $this->filme->Play();
        $this->filme->setViews($this->filme->getViews()+1);
        $this->expectador->viuMaisUm();
    }
    
    public function avaliarNota($nota_filme){
        $this->filme->setAvaliacao($nota_filme);
    }
    
    public function curtir(){
        $this->filme->Like();
    }
    
}
