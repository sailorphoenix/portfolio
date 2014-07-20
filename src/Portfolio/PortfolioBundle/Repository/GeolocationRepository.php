<?php
 // src/Portfolio/PortfolioBundle/Repository/GeolocationRepository.php

namespace Portfolio\PortfolioBundle\Repository; 

use Doctrine\ORM\EntityRepository;

class GeolocationRepository extends EntityRepository {
  public function getAddresswithScale($longitude, $latitude){
    $formule = "(6366*acos(cos(radians($latitude))*cos(radians(g.latitude))*cos(radians(g.longitude)-radians($longitude))+sin(radians($latitude))*sin(radians(g.latitude))))";
    $query = "SELECT g.titreGeolocation, g.latitude, g.longitude,g.adresse,g.type1, g.type2, g.telGeoloc, $formule AS dist 
          FROM PortfolioPortfolioBundle:Geolocation g 
          WHERE $formule<='30' 
          ORDER by dist ASC";
    return $this->getEntityManager()->createQuery($query)->getResult();;
  }
}