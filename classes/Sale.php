<?php
require_once __DIR__ .'./Spettacoli.php';
require_once __DIR__ .'./SchedaFilm.php';


class Sale extends Spettacoli{
    protected $TipoSala;
 

    public function __construct($_TipoSala){
        $this->TipoSala = $_TipoSala;

    }

    public function setTipoSala(){
        if($TipoSala = "normale"){
            $this->TipoSala = $TipoSala;
        }elseif ($TipoSala = "immersive"){
            $this->TipoSala = $TipoSala;
        }
    }

    public function getTipoSala(){
        return "$this->TipoSala <br>";
    }
}

