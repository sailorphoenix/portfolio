<?php
// src/Portfolio/PortfolioBundle/Entity/FiltreSearch.php

/**
 * Classe Entité Contact qui permet de créer les attributs nécessaires pour le formulaire de contact
 *
 */

namespace Portfolio\PortfolioBundle\Entity;

class FiltreSearch {

	protected $search;

	public function getSearch() {
		return $this->search;
	}

	public function setSearch($search) {
		$this->search = $search;
	}

}
