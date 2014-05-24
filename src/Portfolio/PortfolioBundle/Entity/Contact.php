<?php
// src/Portfolio/PortfolioBundle/Entity/Contact.php

/**
 * Classe Entité Contact qui permet de créer les attributs nécessaires pour le formulaire de contact
 *
 */

namespace Portfolio\PortfolioBundle\Entity;

class Contact {

	protected $nom;

	protected $prenom;

	protected $mail;

	protected $objet;

	protected $message;
	
	public function getNom() {
		return $this->nom;
	}

	public function setNom($nom) {
		$this->nom = $nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function getMail() {
		return $this->mail;
	}

	public function setMail($mail) {
		$this->mail = $mail;
	}

	public function getObjet() {
		return $this->objet;
	}

	public function setObjet($objet) {
		$this->objet = $objet;
	}

	public function getMessage() {
		return $this->message;
	}

	public function setMessage($message) {
		$this->message = $message;
	}

}
