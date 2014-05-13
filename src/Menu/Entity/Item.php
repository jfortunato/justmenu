<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\Presenter\MenuPresenter;

class Item extends MenuComponent
{
    protected $number;
    protected $category;
    protected $choice;

    public function getSizes()
    {
        if (!empty($this->sizes)) {
            return $this->sizes;
        }

        return $this->category->getSizes();
    }

    public function hasChoice()
    {
        return $this->choice ? true:false;
    }
}
