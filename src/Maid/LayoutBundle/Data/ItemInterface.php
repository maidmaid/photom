<?php

namespace Maid\LayoutBundle\Data;

interface ItemInterface
{
    public function load($translator, $id, $domaine);
}