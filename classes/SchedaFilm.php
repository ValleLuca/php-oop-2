<?php

class SchedaFilm{
    protected $titolo;
    protected $anno;
    protected $attori;
    protected $durata;

    public function __construct($_titolo, $_anno, $_attori, $_durata){
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->attori = $_attori;
        $this->durata = $_durata;
    }

    public function getInfoFilm(){
        return "{$this->titolo} <br> {$this->anno} <br> {$this->attori} <br> {$this->durata}";
    }

    public function getTitolo(){
        return "$this->titolo";
    }
    public function getAnno(){
        return "$this->anno";
    }
    public function getAttori(){
        return "$this->attori";
    }
    public function getDurata(){
        return "$this->durata";
    }
}