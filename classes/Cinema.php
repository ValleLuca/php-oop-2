<?php
require_once __DIR__ .'./Sale.php';
require_once __DIR__ .'./Spettacoli.php';
require_once __DIR__ .'./SchedaFilm.php';

class Cinema extends Sale{
    protected $nome = "the space";
    protected $indirizzo = "Via Giovanni Falcone, 10092 Beinasco TO";
    protected $nsale;

    public function __construct(){
        $this->nsale = 5;
    }

    public function getInfoCinema(){
        return "{$this->nome} <br> {$this->indirizzo} <br> {$this->nsale} <br>";
    }

    public function getNome(){
        return "$this->nome";
    }
    public function getIndirizzo(){
        return "$this->indirizzo";
    }
    public function getnSale(){
        return "$this->nsale";
    }

}