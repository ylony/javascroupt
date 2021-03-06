<?php

namespace App\modele;

use App\metier\Validate;
	
class heroesModele{

	private $sql;

	public function __construct(){
		global $config;
		$this->sql = new SQL($config["host"], $config["username"], $config["password"], $config["database"]);
	}

	public function getAll(){
		return $this->sql->getAll("SELECT * FROM heroes");
	}

	public function getOne($nom){
		$nom = Validate::clean($nom);
		return $this->sql->get("SELECT * FROM heroes where nom = '{$nom}'");
	}

	public function addOne($heroes){
		$nom = Validate::clean($heroes->getNom());
		$pv = Validate::toInt($heroes->getPv());
		$description = Validate::clean($heroes->getDesc());
		$this->sql->query("INSERT INTO heroes (nom,pv,description) VALUES ('{$nom}', '{$pv}', '{$description}')");
	}

	public function deleteOne($id){
		$this->sql->query("DELETE FROM heroes WHERE id = '{$id}'");
	}

	public function editOne($heroes, $newHeroes){
		$oldNom = Validate::clean($heroes->getNom());
		$newNom = Validate::clean($newHeroes->getNom());
		$newPv = Validate::toInt($newHeroes->getPv());
		$newDescription = Validate::clean($newHeroes->getDesc());		
		$this->sql->query("UPDATE heroes SET nom = '{$newNom}', pv = '{$newPv}', description = '{$newDescription}' WHERE nom = '{$oldNom}'");
	}
}


?>