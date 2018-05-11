<?php

class Luta
{

    // atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // construtor
    function __construct($_desafiado,$_desafiante)
    {
        // inicializar variáveis
        $this->desafiado = null;
        $this->desafiante = null;
        $this->rounds = 3;
        $this->aprovada = false;

        // associar os objetos (agregação)
        $this->setDesafiado($_desafiado);
        $this->setDesafiante($_desafiante);
    }

    public function setDesafiado($_desafiado)
    {
        // atribuir desafiado
        $this->desafiado = $_desafiado;
    }

    public function setDesafiante($_desafiante)
    {
        // atribuir desafiado
        $this->desafiante = $_desafiante;
    }

    public function getDesafiado()
    {
        return($this->desafiado);
    }

    public function getDesafiante()
    {
        return($this->desafiante);
    }

    // métodos
    public function marcarLuta()
    {

        // verificar se o desafiante e o desafiado não é o mesmo lutador
        if ( $this->desafiante->getNome() == $this->desafiado->getNome() )
        {
            throw new Exception("O Desafiante e o Desafiado não pode ser o mesmo Lutador");
        }
        // verificar se os participantes sao da mesma categoria
        else if ( $this->desafiante->getCategoria() != $this->desafiado->getCategoria() )
        {
            throw new Exception("A luta só pode ser realizada por dois lutadores da mesma categoria");
        }
        else
        {
            $this->aprovada = true;
        }
    }

    public function lutar()
    {
        if ( ! $this->aprovada )
        {
            throw new Exception("Esta luta não foi aprovada!");
        }
        else
        {

            // apresentar os lutadores
            $this->getDesafiante()->apresentar();
            $this->getDesafiado()->apresentar();

            // verificar quem é o lutador
            // obs.: colocamos como base o numero de vitorias, mas pode ser alterado o critério
            if ( $this->getDesafiante()->getVitorias() > $this->getDesafiado()->getVitorias()  )
            {
                echo "<hr />O Lutador " . $this->getDesafiante()->getNome() . " é o Vencedor da Luta";

                // alterar o cartel dos lutadores
                $this->getDesafiante()->ganharLuta(); // vencedor
                $this->getDesafiado()->perderLuta();  // perdedor

            }
            else
            {
                echo "<hr />O Lutador " . $this->getDesafiado()->getVitorias() . " é o Vencedor da Luta";

                // alterar o cartel dos lutadores
                $this->getDesafiado()->ganharLuta();  // vencedor
                $this->getDesafiante()->perderLuta(); // perdedor

            }

            //*** somente para depuração dos objetos após a atualização
            // apresentar novamente
            // apresentar os lutadores
            $this->getDesafiante()->status();
            $this->getDesafiado()->status();

        }

    }

}

?>