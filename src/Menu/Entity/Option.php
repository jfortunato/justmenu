<?php namespace JustMenu\Menu\Entity;

class Option extends Entity
{
    const CHOICE_MODE_SINGLE = 0;
    const CHOICE_MODE_MULTIPLE = 1;

    protected $id;
    protected $title;
    protected $description;
    protected $info;
    protected $choice_mode;

    protected $categoryOptions = array();
    protected $values = array();
}
