<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\Presenter\MenuPresenter;

class Category extends MenuComponent
{
    protected $indexed_order;

    protected $items = array();
    protected $categoryOptions = array();

    public function addItem(Item $item)
    {
        $this->items[] = $item;
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

    public function render(MenuPresenter $presenter)
    {
        return $presenter->renderCategory();
    }
}
