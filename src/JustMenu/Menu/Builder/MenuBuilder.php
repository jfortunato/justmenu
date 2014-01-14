<?php namespace JustMenu\Menu\Builder;

use JustMenu\Menu\Presenter\MenuPresenter;

abstract class MenuBuilder
{
    protected $presenter;

    public function __construct(MenuPresenter $presenter)
    {
        $this->presenter = $presenter;
    }

    public function build()
    {
        $menu = $this->assembleMenu();

        return $this->presenter->setComponent($menu);
    }

    /**
     * Gets the value of presenter
     *
     * @return MenuPresenter
     */
    public function getMenuPresenter()
    {
        return $this->presenter;
    }

    abstract public function assembleMenu();
}
