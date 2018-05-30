<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Animal.php';

/**
 * Description of Mamifero
 *
 * @author carlos
 */
class Mamifero extends Animal
{
    
    protected $corPelo;
    
    public function emitirSom()
    {
        return("Som de Mamifero");
    }
    
}
