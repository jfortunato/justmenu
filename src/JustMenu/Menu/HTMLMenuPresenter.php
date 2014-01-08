<?php namespace JustMenu\Menu;

class HTMLMenuPresenter extends MenuPresenter {
	
	protected function renderMenu()
	{
		$categories = $this->renderChildren();

		return $this->fetchView('menu', compact('categories'));
	}

	protected function renderCategory()
	{
		$data = array(
			'title'       => $this->component->title,
			'description' => $this->component->description,
			'info'        => $this->component->info,
			'sizes'       => implode(', ', $this->component->getAllShortSizes()),
			'items'       => $this->renderChildren(),
		);

		return $this->fetchView('category', $data);

	}

	protected function renderItem()
	{
		$data = array(
			'title'       => $this->component->title,
			'description' => $this->component->description,
			'info'        => $this->component->info,
			'prices'      => implode(', ', $this->component->getAllPrices()),
		);

		return $this->fetchView('item', $data);
	}

	private function fetchView($view, $data)
	{
		ob_start();

		extract($data);

		include __DIR__ . "/views/{$view}.html";

		return ltrim(ob_get_clean());
	}

}
