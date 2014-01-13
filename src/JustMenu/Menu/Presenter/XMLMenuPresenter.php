<?php namespace JustMenu\Menu\Presenter;

class XMLMenuPresenter extends MenuPresenter {
	
	protected function renderMenu()
	{
		$categories = $this->renderChildren();

		return $this->fetchView('menu.xml', compact('categories'));
	}

	protected function renderCategory()
	{
		$data = array(
			'title'       => $this->component->getEntity()->title,
			'description' => $this->component->getEntity()->description,
			'info'        => $this->component->getEntity()->info,
			'sizes'        => $this->component->getEntity()->getSizes(),
			'items'        => $this->renderChildren(),
		);

		return $this->fetchView('category.xml', $data);
	}

	protected function renderItem()
	{
		$data = array(
			'title'       => $this->component->getEntity()->title,
			'description' => $this->component->getEntity()->description,
			'info'        => $this->component->getEntity()->info,
			'sizes'        => $this->component->getEntity()->getSizes(),
		);

		return $this->fetchView('item.xml', $data);
	}

}
