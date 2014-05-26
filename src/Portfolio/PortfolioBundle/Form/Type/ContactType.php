<?php
// src/Portfolio/PortfolioBundle/Form/Type/ContactType.php

/**
 * Classe permettant de créer le formulaire de contact avec les champs adéquats
 *
 */
namespace Portfolio\PortfolioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('nom','text');
    $builder->add('prenom','text');
    $builder->add('mail','email');
    $builder->add('objet','text');
    $builder->add('message','textarea');
    $builder->add('captcha', 'captcha');
  }
  
  public function getName()
  {
    return 'contact';
  }
}