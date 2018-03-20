<?php

namespace App\Controller;

use App\Modele\Validate;

class MainController{

	public function __construct(){

		$action = null;

		if(isset($_GET["action"])){
			$action = Validate::clean($_GET["action"]);
		}

		switch($action){
			case "getAll" :
				require_once("./getAll.php");
			break;
			case "addHeroes" :
				require_once("./addHeroes.php");
			break;
			case "delete" :
				require_once("./delete.php");
			break;
			default :
				require_once("./vue.php");
			break;
		}
	}

}





