<?php

namespace Maid\LayoutBundle\Data;

class ItemBasic implements ItemInterface
{
    public $id;
    public $title;
    public $description;
    public $image;
    
    public function load($translator, $id, $domaine)
    {
        $this->id = $translator->trans("$id.id", array(), 'items-' . $domaine);
        $this->title = $translator->trans("$id.title", array(), 'items-' . $domaine);
        $this->description = $translator->trans("$id.description", array(), 'items-' . $domaine);
        $this->image = $translator->trans("$id.image", array(), 'items-' . $domaine);
    }
}