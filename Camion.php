<?php

class Camion extends Vehicule implements ReservableInterface {
	
	public $capaciteTonnage;
	public $type;
	
	public function __construct($capaciteTonnage,$type,$id,$immatriculation,$marque,$modele,$prixJour,$disponible){
		
		$this->capaciteTonnage = $capaciteTonnage;
		$this->type = $type;
		parent::__construct($id,$immatriculation,$marque,$modele,$prixJour,$disponible);

		
	}
	public function reserver(Client $client, DateTime $dateDebut, int $nbJours){
		
	}
	
	public function getType(){
		return $this->type;
		
	}
	
	public function afficherDetails(){
		
		echo $this->$capaciteTonnage;
		$this->afficherDetails();
		
	}
	
}