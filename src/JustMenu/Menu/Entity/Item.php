<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\MenuComponentInterface;

class Item extends Entity implements MenuComponentInterface
{
    protected $id;
    protected $title;
    protected $description;
    protected $info;

    protected $category;
    protected $sizes = array();

    public function category()
    {
        return $this->category;
    }

    public function addSize(Size $size)
    {
        $this->sizes[] = $size;
    }

    public function getSizes()
    {
        if (!empty($this->sizes)) {
            return $this->sizes;
        }

        return $this->category->getSizes();
    }

    public function getPrice($size)
    {
        $s = $size;

        // first check if we have overriden the category size
        foreach ($this->sizes as $size) {
            if ($size->size === $s) {
                return $size->price;
            }
        }

        // if we made it here use default category sizes
        foreach ($this->category()->getSizes() as $size) {
            if ($size->size === $s) {
                return $size->price;
            }
        }
    }

    public function getAllPrices()
    {
        $prices = array();
        $sizes = $this->category()->getAllLongSizes();
        foreach ($sizes as $size) {
            $prices[$size] = $this->getPrice($size);
        }

        return $prices;
    }

    public function getChildrenComponents()
    {
        return array();
    }
}
