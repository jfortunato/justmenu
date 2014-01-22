<?php namespace JustMenu\Menu\Presenter;

use JustMenu\Menu\MenuComponentInterface;
use JustMenu\View\ViewFinder;

abstract class MenuPresenter
{
    protected $component;

    protected $viewFinder;

    public function __construct(ViewFinder $viewFinder, MenuComponentInterface $component = null)
    {
        $this->viewFinder = $viewFinder;
        $this->component = $component;
    }

    public function render()
    {
        return $this->component->render($this);
    }

    protected function renderChildren()
    {
        $rendered = '';

        foreach ($this->component->getChildrenComponents() as $component) {
            $this->component = $component;
            $rendered .= $this->render();
        }

        return $rendered;
    }

    /**
     * Gets the value of $component
     *
     * @return Component
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets the value of component
     *
     * @param MenuComponentInterface $component description
     *
     * @return MenuPresenter
     */
    public function setComponent(MenuComponentInterface $component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * Gets the value of ViewFinder
     *
     * @return ViewFinder
     */
    public function getViewFinder()
    {
        return $this->viewFinder;
    }

    abstract public function renderMenu();
    abstract public function renderCategory();
    abstract public function renderItem();
}
