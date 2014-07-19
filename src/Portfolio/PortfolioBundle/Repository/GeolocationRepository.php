<?php
 // src/Portfolio/PortfolioBundle/Repository/GeolocationRepository.php

namespace Portfolio\PortfolioBundle\Repository; 

use Doctrine\ORM\EntityRepository;

class GeolocationRepository extends EntityRepository {
  public function getAddresswithScale(){
    $formule = "(6366*acos(cos(radians(43.6318986))*cos(radians(g.latitude))*cos(radians(g.longitude)-radians(3.908467))+sin(radians(43.6318986))*sin(radians(g.latitude))))";
    $query = "SELECT g.titreGeolocation, g.latitude, g.longitude,g.adresse,g.type1, g.type2, g.telGeoloc, $formule AS dist 
          FROM PortfolioPortfolioBundle:Geolocation g 
          WHERE $formule<='30' 
          ORDER by dist ASC";
    return $this->getEntityManager()->createQuery($query)->getResult();;
  }
}