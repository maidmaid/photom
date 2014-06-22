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
            'items' => $this->getItemsPhoto()
        ));
    }
    
    private function getItemsPhoto()
    {
        /* @var $translator \Symfony\Component\Translation\Translator */
        $translator = $this->get('translator');
        $ids = $this->container->getParameter('photopage.items.ids');
        $items = array();
        
        foreach ($ids as $i => $id)
        {
            $items[$i]['id'] = $translator->trans("item.photo.$id.id", array(), 'photopage');
            $items[$i]['title'] = $translator->trans("item.photo.$id.title", array(), 'photopage');
            $items[$i]['description'] = $translator->trans("item.photo.$id.description", array(), 'photopage');
            $items[$i]['image'] = $translator->trans("item.photo.$id.image", array(), 'photopage');
            $items[$i]['right'] = $i % 2 == 0;
        }
        
        return $items;
    }
    
    private function getItemsVideo()
    {
        /* @var $translator \Symfony\Component\Translation\Translator */
        $translator = $this->get('translator');
        $ids = $this->container->getParameter('videopage.items.ids');
        $items = array();
        
        foreach ($ids as $i => $id)
        {
            $items[$i]['id'] = $translator->trans("item.video.$id.id", array(), 'videopage');
            $items[$i]['title'] = $translator->trans("item.video.$id.title", array(), 'videopage');
            $items[$i]['description'] = $translator->trans("item.video.$id.description", array(), 'videopage');
            $items[$i]['image'] = $translator->trans("item.video.$id.image", array(), 'videopage');
            $items[$i]['right'] = $i % 2 == 0;
        }
        
        return $items;
    }
    
    public function videoPageAction()
    {
        return $this->render('PmaContentBundle:VideoPage:index.html.twig', array(
            'items' => $this->getItemsVideo()
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
