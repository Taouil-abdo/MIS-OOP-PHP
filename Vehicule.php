<?php

abstract class Vehicule{
    public $id;
    public $immatriculation;
    public $marque;
    public $modele;
    public $prixJour;
    public $disponible;


    public function __construct($id,$immatriculation,$marque,$modele,$prixJour,$disponible){
        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixJour = $prixJour;
        $this->disponible = $disponible;

    }

    public function afficherDetails(){
    	
    	echo "the id is : ".$this->id;
        echo "the immatriculation is : ".$this->immatriculation;
    	echo "the marque is : ".$this->marque;
    	echo "the modele is : ".$this->modele;
    	echo "the prixJour is : ".$this->prixJour;
    	echo "the disponible is : ".$this->disponible;

    }
    public function calculerPrix(int $jours){
    	
    	return $jours * $this->prixJour;
    	
    }
    public function estDisponible(){
    	if($this->disponible) {
    		return true;
    		}else{
    		return false;
    		}
    }
    
    abstract public function getType();

}