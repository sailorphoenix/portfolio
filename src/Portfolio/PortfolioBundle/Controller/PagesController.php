<?php

namespace Portfolio\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortfolioPortfolioBundle:Pages:index.html.twig');
    }
}
