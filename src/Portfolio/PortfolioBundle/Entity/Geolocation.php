<?php
// src/Portfolio/PortfolioBundle/Entity/Geolocation.php

namespace Portfolio\PortfolioBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Portfolio\PortfolioBundle\Repository\GeolocationRepository")
 * @ORM\Table(name="Geolocation")
 */

class Geolocation {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */

	protected $numGeoloc;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(100) NOT NULL")
	 */

	protected $titreGeolocation;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(15)")
	 */

	protected $telGeoloc;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(100) NOT NULL")
	 */

	protected $longitude;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(100) NOT NULL")
	 */

	protected $latitude;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(100) NOT NULL")
	 */

	protected $adresse;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(100) NOT NULL")
	 */

	protected $type1;

	/**
	 * @ORM\Column(type="string", columnDefinition="VARCHAR(100) NOT NULL")
	 */

	protected $type2;

	public function __construct() {
	}

	public function getNumGeoloc() {
		return $this->numGeoloc;
	}

	public function setNumGeoloc($numGeoloc) {
		$this->numGeoloc = $numGeoloc;
	}

	public function getTitreGeolocation() {
		return $this->titreGeolocation;
	}

	public function setTitreGeolocation($titreGeolocation) {
		$this->titreGeolocation = $titreGeolocation;
	}

	public function getTelGeoloc() {
		return $this->telGeoloc;
	}

	public function setTelGeoloc($telGeoloc) {
		$this->telGeoloc = $telGeoloc;
	}

	public function getLongitude() {
		return $this->longitude;
	}

	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	public function getLatitude() {
		return $this->latitude;
	}

	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	public function getAdresse() {
		return $this->adresse;
	}

	public function setAdresse($adresse) {
		$this->adresse = $adresse;
	}

	public function getType1() {
		return $this->type1;
	}

	public function setType1($type1) {
		$this->type1 = $type1;
	}

	public function getType2() {
		return $this->type2;
	}

	public function setType2($type2) {
		$this->type2 = $type2;
	}

}
