<?php

namespace App;

use App\Includes\Autoloader;

use App\metier\Heroes;

use App\modele\heroesModele;


require_once("./includes/Autoloader.php");
require_once("./includes/config.php");

Autoloader::register();

$heroesModele = new heroesModele();

$heroes = new Heroes($_POST["nom"], $_POST["pv"], $_POST["description"]);



$heroesModele->addOne($heroes);
