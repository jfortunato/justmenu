<?php namespace JustMenu\Menu;

use JustMenu\Menu\Entity\Category;
use JustMenu\Menu\Presenter\MenuPresenter;

class Menu implements MenuComponentInterface
{
    protected $categories = array();

    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
    }

    public function getChildrenComponents()
    {
        return $this->categories;
    }

    /**
     * Gets the value of $categories
     *
     * @return Category
     */
    public function getCategories()
    {
        return $this->categories;
    }

    public function render(MenuPresenter $presenter)
    {
        return $presenter->renderMenu();
    }
}
