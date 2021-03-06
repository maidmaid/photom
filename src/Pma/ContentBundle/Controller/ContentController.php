<?php

namespace Pma\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContentController extends Controller
{
    public function homePageAction()
    {
        return $this->render('PmaContentBundle:HomePage:index.html.twig');
    }
    
    public function photoPageAction()
    {
        /* @var $items \Maid\LayoutBundle\Data\Items */
        $items = $this->get('items');
        
        return $this->render('PmaContentBundle:PhotoPage:index.html.twig', array(
            'items' => $items->renderViewListRightLeft('photo')
        ));
    }
    
    public function videoPageAction()
    {
        /* @var $items \Maid\LayoutBundle\Data\Items */
        $items = $this->get('items');
        
        return $this->render('PmaContentBundle:VideoPage:index.html.twig', array(
            'items' => $items->renderViewListRightLeft('video')
        ));
    }
    
    public function internetPageAction()
    {
        return $this->render('PmaContentBundle:InternetPage:index.html.twig');
    }
    
    public function mariagePageAction()
    {
        return $this->render('PmaContentBundle:mariagePage:index.html.twig');
    }
    
    public function galeriePageAction()
    {
        return $this->render('PmaContentBundle:GaleriePage:index.html.twig');
    }
    
    public function tarifsPageAction()
    {
        return $this->render('PmaContentBundle:TarifsPage:index.html.twig');
    }
    
    public function contactPageAction()
    {
        return $this->render('PmaContentBundle:ContactPage:index.html.twig');
    }
}

