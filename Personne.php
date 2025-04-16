<?php

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