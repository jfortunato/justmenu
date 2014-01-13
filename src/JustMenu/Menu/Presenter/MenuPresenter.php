<?php namespace	JustMenu\Menu\Presenter;

use JustMenu\Menu\MenuComponent;

abstract class MenuPresenter {
	protected $component;

	public function __construct(MenuComponent $component = null)
	{
		$this->component = $component;
	}

	public function render()
	{
		$entity = $this->component->getEntity();

		if ($entity instanceof \JustMenu\Menu\Entity\Category) {
			return $this->renderCategory();
		} else if($entity instanceof \JustMenu\Menu\Entity\Item) {
			return $this->renderItem();
		} else if($entity instanceof \JustMenu\Menu\Menu) {
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

		$type = $this->determineFileType($view);

		include __DIR__ . "/../views/{$type}/{$view}";

		return ltrim(ob_get_clean());
	}

	protected function determineFileType($view)
	{
		return pathinfo($view, PATHINFO_EXTENSION);
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
	 * @param MenuComponent $component description
	 *
	 * @return MenuPresenter
	 */
	public function setComponent(MenuComponent $component)
	{
		$this->component = $component;
		return $this;
	}

	abstract protected function renderMenu();
	abstract protected function renderCategory();
	abstract protected function renderItem();
}
