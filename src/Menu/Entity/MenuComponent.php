<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\MenuComponentInterface;

abstract class MenuComponent extends Entity implements MenuComponentInterface
{
    protected $id;
    protected $component_type;
    protected $title;
    protected $description;
    protected $info;

    protected $sizes = array();
    protected $special_time;

    public function addSize(Size $size)
    {
        $this->sizes[] = $size;
    }

    public function hasSpecialTime()
    {
        return $this->special_time ? true:false;
    }
}