<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once __DIR__ .'./classes/Cinema.php';
require_once __DIR__ .'./classes/Sale.php';
require_once __DIR__ .'./classes/Spettacoli.php';
require_once __DIR__ .'./classes/SchedaFilm.php';

$cinemaselezionato = new Cinema;
$selezionesala = new Sale("normale");
$orarispettacoli = new Spettacoli(15, 2);
$schedafilm = new SchedaFilm("UNCHARTED", 2022, "Avventura Azione", "Ruben Fleischer", "116 min");


echo $cinemaselezionato->getInfoCinema();
echo $selezionesala->getTipoSala();
echo $orarispettacoli->getInfoSpettacoli();
echo $schedafilm->getInfoFilm();


