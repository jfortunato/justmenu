<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\MenuComponentInterface;

abstract class MenuComponent extends Entity
{
    protected $id;
    protected $component_type;
    protected $title;
    protected $description;
    protected $info;
    protected $sizes = array();
    protected $special_time;
    protected $menuComponentOptions = array();
}
