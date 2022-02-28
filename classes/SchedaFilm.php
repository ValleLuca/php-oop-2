<?php

class SchedaFilm{
    protected $nome;
    protected $anno;
    protected $genere;
    protected $regia;
    protected $durata;

    public function __construct($_nome, $_anno, $_genere, $_regia, $_durata){
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->genere = $_genere;
        $this->regia = $_regia;
        $this->durata = $_durata;
    }
    public function getInfoFilm(){
        return "{$this->nome} <br> {$this->anno} <br> {$this->genere} <br> {$this->regia} <br> {$this->durata}";
    }

    public function getNome(){
        return "$this->nome";
    }
    public function getAnno(){
        return "$this->anno";
    }
    public function getGenere(){
        return "$this->genere";
    }
    public function getRegia(){
        return "$this->regia";
    }
    public function getDurata(){
        return "$this->durata";
    }
}