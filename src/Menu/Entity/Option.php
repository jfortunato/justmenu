<?php namespace JustMenu\Menu\Entity;

class Option extends Entity
{
    protected $id;
    protected $title;
    protected $description;
    protected $info;
    protected $choice_mode;
    protected $menuComponentOptions = array();
    protected $values = array();
}
