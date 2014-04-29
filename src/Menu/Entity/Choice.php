<?php namespace JustMenu\Menu\Entity;

class Choice extends Entity
{
    protected $id;
    protected $title;
    protected $description;
    protected $info;

    protected $items = array();

    protected $sizes;

    public function getAllPrices()
    {
        return $this->items[0]->getAllPrices();
    }

    public function getJsonChoices()
    {
        $json = array();

        foreach ($this->items as $item) {
            $json[] = $item->toJson();
        }

        return '[' . implode(',', $json) . ']';
    }

    public function getSizes()
    {
        return $this->items[0]->getSizes();
    }

    public function setSizes()
    {
        $this->sizes = $this->getSizes();
    }
}
