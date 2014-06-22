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
        return $this->render('PmaContentBundle:PhotoPage:index.html.twig', array(
            'items' => $this->getItems('photo')
        ));
    }
    
    private function getItems($domaine)
    {
        /* @var $translator \Symfony\Component\Translation\Translator */
        $translator = $this->get('translator');
        $parameters = $this->container->getParameter('items');
        $ids = $parameters[$domaine]; 
        $items = array();
        
        foreach($ids as $i => $id)
        {
            $items[$i]['id'] = $translator->trans("$id.id", array(), 'items-' . $domaine);
            $items[$i]['title'] = $translator->trans("$id.title", array(), 'items-' . $domaine);
            $items[$i]['description'] = $translator->trans("$id.description", array(), 'items-' . $domaine);
            $items[$i]['image'] = $translator->trans("$id.image", array(), 'items-' . $domaine);
        }
        
        return $items;
    }
    
    public function videoPageAction()
    {
        return $this->render('PmaContentBundle:VideoPage:index.html.twig', array(
            'items' => $this->getItems('video')
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

