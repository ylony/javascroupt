<?php

namespace App;

use App\Includes\Autoloader;

use App\Controller\MainController;

require_once("./includes/Autoloader.php");
require_once("./includes/config.php");

Autoloader::register();

$mainController = new MainController();