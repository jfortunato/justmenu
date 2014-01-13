<?php namespace JustMenu\Menu\Presenter;

class HTMLMenuPresenter extends MenuPresenter {
	
	protected function renderMenu()
	{
		$categories = $this->renderChildren();

		return $this->fetchView('menu.html', compact('categories'));
	}

	protected function renderCategory()
	{
		$data = array(
			'title'       => $this->component->getEntity()->title,
			'description' => $this->component->getEntity()->description,
			'info'        => $this->component->getEntity()->info,
			'sizes'       => $this->component->getEntity()->getAllShortSizes(),
			'items'       => $this->renderChildren(),
		);

		return $this->fetchView('category.html', $data);
	}

	protected function renderItem()
	{
		$data = array(
			'title'       => $this->component->getEntity()->title,
			'description' => $this->component->getEntity()->description,
			'info'        => $this->component->getEntity()->info,
			'prices'      => $this->component->getEntity()->getAllPrices(),
		);

		return $this->fetchView('item.html', $data);
	}


}
