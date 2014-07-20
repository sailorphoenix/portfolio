<?php
// src/Portfolio/PortfolioBundle/Form/Type/SearchTownType.php

namespace Portfolio\PortfolioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchTownType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('search','text', array('attr' => array(
            'id' => 'search'
        )));
  }
  
  public function getName()
  {
    return 'searchtown';
  }
}