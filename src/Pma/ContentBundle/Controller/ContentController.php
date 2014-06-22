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
            'items' => $this->getItems('photopage.items.ids', 'photopage')
        ));
    }
    
    private function getItems($ids, $domaine)
    {
        /* @var $translator \Symfony\Component\Translation\Translator */
        $translator = $this->get('translator');
        $ids = $this->container->getParameter($ids);
        $items = array();
        
        foreach ($ids as $i => $id)
        {
            $items[$i]['id'] = $translator->trans("item.video.$id.id", array(), $domaine);
            $items[$i]['title'] = $translator->trans("item.video.$id.title", array(), $domaine);
            $items[$i]['description'] = $translator->trans("item.video.$id.description", array(), $domaine);
            $items[$i]['image'] = $translator->trans("item.video.$id.image", array(), $domaine);
            $items[$i]['right'] = $i % 2 == 0;
        }
        
        return $items;
    }
    
    public function videoPageAction()
    {
        return $this->render('PmaContentBundle:VideoPage:index.html.twig', array(
            'items' => $this->getItems('videopage.items.ids', 'videopage')
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

