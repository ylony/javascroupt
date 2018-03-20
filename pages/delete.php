<?php

namespace App;

use App\Includes\Autoloader;

use App\metier\Heroes;

use App\modele\heroesModele;


require_once("./includes/Autoloader.php");
require_once("./includes/config.php");

Autoloader::register();

$heroesModele = new heroesModele();



$heroesModele->deleteOne($_POST["id"]);
