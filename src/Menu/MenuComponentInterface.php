<?php namespace JustMenu\Menu;

use JustMenu\Menu\Presenter\MenuPresenter;

interface MenuComponentInterface
{
    public function getChildrenComponents();
    public function render(MenuPresenter $presenter);
}
