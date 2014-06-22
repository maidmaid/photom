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
}
