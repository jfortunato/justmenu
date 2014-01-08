<?php namespace	JustMenu\Menu;

use JustMenu\Menu\Components\MenuComponent;

abstract class MenuPresenter {
	protected $component;

	public function __construct(MenuComponent $component)
	{
		$this->component = $component;
	}

	public function render()
	{
		if ($this->component instanceof \JustMenu\Menu\Components\Category) {
			return $this->renderCategory();
		} else if($this->component instanceof \JustMenu\Menu\Components\Item) {
			return $this->renderItem();
		} else if($this->component instanceof \JustMenu\Menu\Components\Menu) {
			return $this->renderMenu();
		}

		throw new \Exception;
	}

	protected function renderChildren()
	{
		$rendered = '';

		$components = $this->component->components;

		for($components->rewind(); $components->valid(); $components->next()){
			$component = $components->current();
			$this->component = $component;
			$rendered .= $this->render();
		}

		return $rendered;
	}

	abstract protected function renderMenu();
	abstract protected function renderCategory();
	abstract protected function renderItem();
}
