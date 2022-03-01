<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once __DIR__ .'./classes/Cinema.php';
require_once __DIR__ .'./classes/Sale.php';
require_once __DIR__ .'./classes/Spettacoli.php';
require_once __DIR__ .'./classes/SchedaFilm.php';
require_once __DIR__ .'./classes/Attori.php';


$cinemaselezionato = new Cinema;
$selezionesala = new Sale("normale");
$orarispettacoli = new Spettacoli(15, 2);
$schedafilm = new SchedaFilm("UNCHARTED", 2022, "Avventura Azione", "Ruben Fleischer", "116 min");

//lista delle sale
$listaAttori = [];
$listaAttori = new Attori();


//lista delle sale
$listaSale = [];
$listaSale = new Spettacoli();



//Lista dei film nelle sale
$listaFilm = [];
$listaFilm = new SchedaFilm("UNCHARTED", 2022, "Tom Holland, Mark Wahlberg, Antonio Banderas, Sophia Ally, Tati Gabrielle", 116);
$listaFilm = new SchedaFilm("SPIDER-MAN - NO WAY HOME", 2021, "Tom Holland, Zendaya, Marisa Tomei, Benedict Cumberbatch, Jamie Foxx, Alfred Molina", 159);
$listaFilm = new SchedaFilm("ASSASSINIO SUL NILO", 2022, "Jodie Comer, Gal Gadot, Armie Hammer, Kenneth Branagh, Tom Bateman, Annette Bening", 134);
$listaFilm = new SchedaFilm("IL PADRINO - 50ESIMO ANNIVERSARIO", 2022, "Marlon Brando, James Caan, Al Pacino, Robert Duvall, Diane Keaton", 175);
$listaFilm = new SchedaFilm("THE BATMAN", 2022, "Robert Pattinson, Zoë Kravitz, Jeffrey Wright, Paul Dano, Andy Serkis", 175);

var_dump($listaFilm);






echo $cinemaselezionato->getInfoCinema();
echo $selezionesala->getTipoSala();
echo $orarispettacoli->getInfoSpettacoli();
echo $schedafilm->getInfoFilm();