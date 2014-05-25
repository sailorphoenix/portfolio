<?php

namespace Portfolio\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Portfolio\PortfolioBundle\Entity\Contact;
use Portfolio\PortfolioBundle\Form\Type\ContactType;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{
    public function indexAction()
    {
      $request = $this->getRequest();
      $session = $request->getSession();
      $message = '';

      $form = $this->contactForm();
      // récupère des messages
      foreach ($session->getFlashBag()->get('message', array()) as $mess) {
        $message = $mess;
      }
      return $this->render('PortfolioPortfolioBundle:Pages:index.html.twig', array('message' => $message, 'form' => $form->createView()));
    }
    
    public function contactForm() 
    {
      //Récupération des informations du formulaire
      $request = $this->getRequest();
      $session = $request->getSession();
      $contact = new Contact();
      //Création du formulaire
      $form = $this->createForm(new ContactType(), $contact);
      //Après l'envoi du formulaire on associe les informations du request avec les attributs de contact
      if('POST' == $request->getMethod()){
        $form->bind($request);
        //Passage à la validation du formulaire et envoie du mail si le test est réussi avec redirection sur une page de succès
        if($form->isValid())
        {
          $this->envoiMail($contact);
          $message = 'Votre message a été envoyé';
          $session->getFlashBag()->add('message', $message);
        }
      }
      return $form;
    }
    
    /**
     * Fonction qui permet d'envoyer un mail avec SwiftMailer de Symfony2
     * @param Contact $contact variable qui contient toutes les informations contenues dans le formulaire
     */
    public function envoiMail($contact)
    {
      $mail = $this->container->getParameter('mail_receiver');
      $message = \Swift_Message::newInstance()
      ->setSubject($contact->getObjet())
      ->setFrom($contact->getMail())
      ->setTo($mail)
      ->setBody($contact->getMessage());
      $this->get('mailer')->send($message);
    }
}
