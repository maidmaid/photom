<?php

namespace Maid\LayoutBundle\Data;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Items
{
    protected $container;
    
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    
    public function get($domaine)
    {
        /* @var $translator \Symfony\Component\Translation\Translator */
        $translator = $this->container->get('translator');
        $parameters = $this->container->getParameter('items');
        $ids = $parameters[$domaine]; 
        $items = array();
        
        foreach($ids as $id)
        {
            $item = new ItemBasic();
            $item->load($translator, $id, $domaine);
            $items[] = $item;
        }
        
        return $items;
    }
    
    public function renderView($view, $domaine)
    {
        $items = $this->get($domaine);
        return $this->container->get('templating')->render($view, array('items' => $items));
    }
    
    public function renderViewListRightLeft($domaine)
    {
        $view = 'MaidLayoutBundle:List:right-left.items.html.twig';
        return $this->renderView($view, $domaine);
    }
    
    public function renderViewCarouselMain($domaine)
    {
        $view = 'MaidLayoutBundle:Carousel:main.html.twig';
        return $this->renderView($view, $domaine);
    }
}
