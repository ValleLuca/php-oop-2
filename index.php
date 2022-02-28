<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once __DIR__ .'./classes/Cinema.php';
require_once __DIR__ .'./classes/Sale.php';
require_once __DIR__ .'./classes/Spettacoli.php';
require_once __DIR__ .'./classes/SchedaFilm.php';

$bello = new Cinema;

$ciao = $bello->getNome();
var_dump($ciao);
