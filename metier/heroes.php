<?php


namespace App\metier;

class Heroes{
	
	private $nom, $pv, $desc;

    /**
     * Heroes constructor.
     * @param $nom
     * @param $pv
     * @param $desc
     */
    public function __construct($nom, $pv, $desc)
    {
        $this->nom = $nom;
        $this->pv = $pv;
        $this->desc = $desc;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * @param mixed $pv
     */
    public function setPv($pv)
    {
        $this->pv = $pv;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }


    public function toArray(){
    	return array('nom' => $this->getNom(),
    				 'pv' => $this->getPv(),
    				 'desc' => $this->getDesc());
    }

}