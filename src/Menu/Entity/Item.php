<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\Presenter\MenuPresenter;

class Item extends MenuComponent
{
    protected $number;

    protected $category;
    protected $choice;

    public function category()
    {
        return $this->category;
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

    public function hasChoice()
    {
        return $this->choice ? true:false;
    }

    public function render(MenuPresenter $presenter)
    {
        return $presenter->renderItem();
    }

    public function toJson()
    {
        return json_encode(array(
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'info' => $this->info,
        ));
    }

}
