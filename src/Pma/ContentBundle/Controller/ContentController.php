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
            'services' => $this->getPhotoServices()
        ));
    }
    
    private function getPhotoServices()
    {
        /* @var $translator \Symfony\Component\Translation\Translator */
        $translator = $this->get('translator');
        $ids = $this->container->getParameter('photopage.services.ids');
        
        foreach ($ids as $i => $id)
        {
            $services[] = $this->renderView('PmaContentBundle:Service:service.html.twig', array(
                'id' => $translator->trans("service.$id.id", array(), 'photopage'),
                'title' => $translator->trans("service.$id.title", array(), 'photopage'),
                'description' => $translator->trans("service.$id.description", array(), 'photopage'),
                'image' => $translator->trans("service.$id.image", array(), 'photopage'),
                'right' => $i % 2 == 0
            ));   
        }
        
        return $services;
    }
}
