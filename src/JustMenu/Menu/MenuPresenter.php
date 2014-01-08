<?php namespace	JustMenu\Menu;

use JustMenu\Menu\Components\MenuComponent;

abstract class MenuPresenter {
	protected $component;

	protected $output = '';

	public function __construct(MenuComponent $component)
	{
		$this->component = $component;
	}

	public function show()
	{
		if ($this->component instanceof \JustMenu\Menu\Components\Category) {
			$this->renderCategory();
		} else if($this->component instanceof \JustMenu\Menu\Components\Item) {
			$this->renderItem();
		} else if($this->component instanceof \JustMenu\Menu\Components\Menu) {
			$this->renderMenu();
		} else {
			throw new \Exception;
		}

		return $this->output;

	}

	protected function renderChildren()
	{
		$components = $this->component->components;

		for($components->rewind(); $components->valid(); $components->next()){
			$component = $components->current();
			$this->component = $component;
			$this->show();
		}
	}

	abstract protected function renderMenu();
	abstract protected function renderCategory();
	abstract protected function renderItem();
}
