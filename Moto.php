<?php

class Moto extends Vehicule implements ReservableInterface{
	
	public $cylindree;
	public $type;
	
	public function __construct($cylindree,$type,$id,$immatriculation,$marque,$modele,$prixJour,$disponible){
		
		$this->cylindree = $cylindree;
		$this->type = $type;
		parent::__construct($id,$immatriculation,$marque,$modele,$prixJour,$disponible);
		
	}
	
	public function reserver(Client $client, DateTime $dateDebut, int $nbJours){
		  
		  
		  
	}
	
	public function getType(){
		return $this->type;
		
	}
	
	public function afficherDetails(){
		
		echo $this->$cylindree;
		$this->afficherDetails();
		
	}
	
	
}