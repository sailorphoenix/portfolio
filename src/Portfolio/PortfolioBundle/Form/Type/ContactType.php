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
    $builder->add('nom','text', array(
      'attr' => array(
        'placeholder' => 'Nom:'
      ),
      'label' => 'Nom:'));

    $builder->add('prenom','text', array(
      'attr' => array(
        'placeholder' => 'Prénom:'
      ),
      'label' => 'Prénom:'));

    $builder->add('mail','email', array(
      'attr' => array(
        'placeholder' => 'Adresse mail:'
      ),
      'label' => 'Adresse mail:'));

    $builder->add('objet','text', array(
      'attr' => array(
        'placeholder' => 'Objet:'
      ),
      'label' => 'Objet:'));

    $builder->add('message','textarea', array(
      'attr' => array(
        'placeholder' => 'Message:'
      ),
      'label' => 'Message:'));

    $builder->add('captcha', 'captcha');
  }
  
  public function getName()
  {
    return 'contact';
  }
}