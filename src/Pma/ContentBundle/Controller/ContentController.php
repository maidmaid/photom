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

        for ($i = 1; $i <= 2; $i++)
        {
            $services[] = $this->renderView('PmaContentBundle:Service:service.html.twig', array(
                'id' => $translator->trans("photo.service$i.id"),
                'title' => $translator->trans("photo.service$i.title"),
                'description' => $translator->trans("photo.service$i.description"),
                'image' => $translator->trans("photo.service$i.image"),
                'right' => $i % 2 == 0
            ));   
        }
        
        return $services;
    }
}
