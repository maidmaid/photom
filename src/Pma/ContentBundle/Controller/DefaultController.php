<?php

namespace Pma\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PmaContentBundle:Default:index.html.twig');
    }
}
