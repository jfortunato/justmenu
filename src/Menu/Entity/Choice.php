<?php namespace JustMenu\Menu\Entity;

class Choice extends Entity
{
    protected $id;
    protected $title;
    protected $description;
    protected $info;

    protected $items = array();

    public function getAllPrices()
    {
        return $this->items[0]->getAllPrices();
    }
}