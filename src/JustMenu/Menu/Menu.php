<?php namespace JustMenu\Menu;

use JustMenu\Menu\Entity\Category;

class Menu implements MenuComponentInterface {

	protected $categories = array();

	public function addCategory(Category $category)
	{
		$this->categories[] = $category;
	}

	public function getChildrenComponents()
	{
		return $this->categories;
	}
}