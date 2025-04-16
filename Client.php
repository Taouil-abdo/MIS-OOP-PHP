<?php

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