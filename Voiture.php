<?php

class Voiture extends Vehicule implements ReservableInterface{
	
	
	public $nbPortes;
	public $transmission;
	public $type;
	
	public function __construct($nbPortes , $transmission,$type,$id,$immatriculation,$marque,$modele,$prixJour,$disponible){
		
		$this->nbPortes = $nbPortes;
		$this->transmission = $transmission;
		$this->type = $type;
		parent::__construct($id,$immatriculation,$marque,$modele,$prixJour,$disponible);
		
	}
	
    public function reserver(Client $client, DateTime $dateDebut, int $nbJours){
        
		if(!$this->disponible){
			echo ("La voiture n'est pas disponible pour réservation.");
		}
        $this->disponible = false;

        $dateFin = clone $dateDebut;
        $dateFin->modify("+$nbJours days");

        echo "Réservation effectuée pour le client " . $client->nom . " du " . $dateDebut->format('Y-m-d') . " au " . $dateFin->format('Y-m-d') . ".";
    }
	
	public function getType(){
		
		return $this->type;
		
	}
	
	public function afficherDetails(){
		
		echo $this->nbPortes;
		echo $this->transmission;
		parent::afficherDetails();
		
	}
	
	
	
}