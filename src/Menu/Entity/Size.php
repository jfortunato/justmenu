<?php namespace JustMenu\Menu\Entity;

use JustMenu\Support\Abbreviator as Abbr;

class Size extends Entity
{
    protected $id;
    protected $size;
    protected $size_short;
    protected $price;

    protected $menu_component;

    public function __construct($price, $size, $size_short = '')
    {
        $this->price = $price;
        $this->size = $size;
        $this->size_short = $size_short ?: Abbr::abbreviate($size);
    }
}
