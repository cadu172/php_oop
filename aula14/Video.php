<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'IAcoesVideo.php';
/**
 * Description of Video
 *
 * @author carlos
 */
class Video implements IAcoesVideo{
    //put your code here
    private $titulo;
    private $avaliacao;
    private $somaAvaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 0;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
        $this->somaAvaliacao = 0;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao) {
        $this->somaAvaliacao += $avaliacao;
        $this->avaliacao = $this->somaAvaliacao / $this->views;
    }

    public function Play() {
        $this->reproduzindo = true;
    }
    
    public function Pause() {
        $this->reproduzindo = false;
        
    }
    
    public function Like() {
        $this->curtidas++;
    }
    
}
