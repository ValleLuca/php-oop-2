<?php
require_once __DIR__ .'./SchedaFilm.php';


class Spettacoli extends SchedaFilm{
    
    protected $orari;
    protected $sala;

    public function __construct($_orari, $_sala){
        $this->orari = $_orari;
        $this->sala = $_sala;

    }

    public function getInfoSpettacoli(){
        return "{$this->orari} <br> {$this->sala} <br>";
    }

    public function getOrari(){
        return "$this->orari";
    }
    public function getSala(){
        return "$this->sala";
    }
}