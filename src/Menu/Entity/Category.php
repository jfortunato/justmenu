<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\MenuComponentInterface;

class Category extends Entity implements MenuComponentInterface
{
    protected $id;
    protected $title;
    protected $description;
    protected $info;
    protected $indexed_order;

    protected $sizes = array();
    protected $items = array();

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function addSize(Size $size)
    {
        $this->sizes[] = $size;
    }

    public function getSizes()
    {
        return $this->sizes;
    }

    public function getAllLongSizes()
    {
        $sizes = array();
        foreach ($this->sizes as $size) {
            $sizes[] = $size->size;
        }

        return $sizes;
    }

    public function getAllShortSizes()
    {
        $sizes = array();
        foreach ($this->sizes as $size) {
            $sizes[] = $size->size_short;
        }

        return $sizes;
    }

    public function getChildrenComponents()
    {
        return $this->items;
    }
}
