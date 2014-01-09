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

		$components = $this->component->components ?: new \SplObjectStorage;

		for($components->rewind(); $components->valid(); $components->next()){
			$component = $components->current();
			$this->component = $component;
			$rendered .= $this->render();
		}

		return $rendered;
	}

	protected function fetchView($view, $data)
	{
		ob_start();

		extract($data);

		include __DIR__ . "/views/{$view}";

		return ltrim(ob_get_clean());
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

	abstract protected function renderMenu();
	abstract protected function renderCategory();
	abstract protected function renderItem();
}
