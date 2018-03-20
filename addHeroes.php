<?php

namespace App;


use App\metier\Heroes;

use App\modele\heroesModele;


$heroesModele = new heroesModele();

$heroes = new Heroes($_POST["nom"], $_POST["pv"], $_POST["description"]);



$heroesModele->addOne($heroes);
