<?php namespace JustMenu\Menu\Entity;

class MenuComponentOption extends Entity
{
    protected $id;
    protected $required;
    protected $size;

    protected $menu_component = array();
    protected $option = array();
}
