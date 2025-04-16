<?php

class Agence{
	
	use LoggerTrait;
	
	public $nom; 
	public $ville; 
	public $vehicules; 
	public $clients;
	
	public function __construct($nom,$ville,$vehicule = [],$clients = []){
		
		$this->nom = $nom;
		$this->ville = $ville;
		$this->vehicule = $vehicule;
		$this->clients = $clients;
		
	}
	
    public function ajouterVehicule(Vehicule $v){

        foreach ($this->vehicule as $existV) {
            if ($existingVehicule === $v) {
                echo "Vehicule already exists in the agency.";
            }
        }
        $this->vehicule[] = $v;
        return true;
    }
    
    public function rechercherVehiculeDisponible(string $type){
        $disponibles = array_filter($this->vehicule, function ($v) use ($type) {
            return $v->getType() === $type && $v->isDisponible();
        });
        
        if (empty($disponibles)) {
            echo "No available vehicles with this: $type.";
            return null;
        }
        return $disponibles;
    }
	
	public function enregistrerClient(Client $c){
		
	}
	
	public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours){
		
	}
	
}