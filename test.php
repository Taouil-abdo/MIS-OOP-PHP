<?php

interface ReservableInterface{

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours);

}

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
		
	    
		
		
		
	}
	
	public function getType(){
		
		return $this->type;
		
	}
	
	public function afficherDetails(){
		
		echo $this->$nbPortes;
		echo $this->$transmission;
		$this->afficherDetails();
		
	}
	
	
	
}

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

abstract class Personne{
	
	public $nom;
	public $prenom;
	public $email;
	
	public function __construct($nom , $prenom , $email){
		
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->email = $email;
		
	}
	
	abstract public function afficherProfil();
	
}

class Client extends Presonne{
	
	public $numeroClient;
	public $reservations;
	
	public function __construct($numeroClient,$reservations = [],$nom , $prenom ,$email){
		
		$this->numeroClient = $numeroClient;
		$this->reservations = $reservations;
		parent::__construct($nom , $prenom ,$email);
	}
	
	public function ajouterReservation(Reservation $r){
		
		foreach($reservations as $r){
			
			if($r->$this->numeroClient){
				echo "this client already made areservation";
			}else{
				$reservations.array_push($this->numeroClient) ;
			}
			
		}
		
	}
	
	public function afficherProfil(){
		
		echo "this is the clients numero :".$this->numeroClient ." ".$this->$reservations." ".$this->nom ." " .$this->prenom ." ".$this->email;

	}
	
	public function getHistorique(){
		
	}
	
	
}

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
		
		if(){
			
		}
		

	}
	
	public function rechercherVehiculeDisponible(string $type){
		
		$r = array_search()
		
	}
	
	public function enregistrerClient(Client $c){
		
	}
	
	public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours){
		
	}
	
}

class Reservation{
	
	use LoggerTrait;
	
	public $vehicule;
	public $client;
	public $dateDebut;
	public $nbJours;
	public $statut;
	
	public function calculerMontant(){
		
	}
	public function confirmer(){
		
	} 
	public function annuler(){
		
	}

	
}

trait LoggerTrait{
	
	public function logAction(string $message){
		
	}
	
}

class Logger{
	
}


$Paris = new Agence();
$Casablanca = new Agence();

$Paris->ajouterVehicule();
$Paris->ajouterVehicule();
$Paris->ajouterVehicule();

$client1 = new Client();
$client2 = new Client();





?>