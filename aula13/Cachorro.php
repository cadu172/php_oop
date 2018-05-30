<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Lobo.php';
/**
 * Description of Cachorro
 *
 * @author carlos
 */
class Cachorro extends Lobo {
    //put your code here
    
    public function emitirSom()
    {
        return("au au au...");
    }     
    
    public function reagirFrase($_frase)
    {
       if ( $_frase == "Corre Rex" ) 
       {
           return("Corre atras do dono");
       }
       else
       {
           return("Rosnar");
       }
    }
    
    public function reagirHoraMin($hora, $minuto)
    {
        if ( $hora < 12 )
        {
            return ("Abanar Rabo");
        }
        else if ( $hora >= 18 )
        {
            return("Ignorar Dono");
        }
        else
        {
            return("Abanar Rabo e Latir");
        }
        
    }
    
    public function reagirDono($_isDono)
    {
        if ( $_isDono )
        {
            return("Abanar");
        }
        else
        {
            return("Rosnar e Latir");
        }
    }
}
