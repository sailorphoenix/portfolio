<?php
// src/Portfolio/PortfolioBundle/Entity/Search.php

/**
 * Classe Entité Contact qui permet de créer les attributs nécessaires pour le formulaire de contact
 *
 */

namespace Portfolio\PortfolioBundle\Entity;

class Search {

	protected $search;

	public function getSearch() {
		return $this->search;
	}

	public function setSearch($search) {
		$this->search = $search;
	}

}
