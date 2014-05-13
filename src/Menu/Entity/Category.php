<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\Presenter\MenuPresenter;

class Category extends MenuComponent
{
    protected $indexed_order;
    protected $items = array();
}
