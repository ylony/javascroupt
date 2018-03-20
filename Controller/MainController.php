<?php

namespace App\Controller;

use App\Metier\Validate;

class MainController{

	public function __construct(){

		$action = null;

		if(isset($_GET["action"])){
			$action = Validate::clean($_GET["action"]);
		}
		switch($action){
			case "getAll" :
				require_once("./pages/getAll.php");
			break;
			case "addHeroes" :
				require_once("./pages/addHeroes.php");
			break;
			case "delete" :
				require_once("./pages/delete.php");
			break;
			default :
				require_once("./pages/vue.php");
			break;
		}
	}

}





