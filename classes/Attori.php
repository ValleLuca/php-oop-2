<?php
require_once __DIR__ .'./SchedaFilm.php';


class Spettacoli extends SchedaFilm{
    
    protected $nome;
    protected $cognome;
    protected $anno;

    public function __construct($_nome, $_cognome, $_anno){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->anno = $_anno;
    }

}