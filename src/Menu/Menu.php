<?php namespace JustMenu\Menu;

use JustMenu\Menu\Entity\Category;

class Menu
{
    protected $categories = array();

    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
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
}
