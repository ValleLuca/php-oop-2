<?php

class Cinema extends Sale{
    private $nome = "the space";
    private $indirizzo = "Via Giovanni Falcone, 10092 Beinasco TO";
    private $nsale;

    public function __construct(){
        $this->nsale = 5;
    }

    public function getNome(){
        return "$this->nome";
    }
    public function getIndirizzo(){
        return "$this->indirizzo";
    }
    public function getSale(){
        return "$this->nsale";
    }

}