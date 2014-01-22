<?php namespace JustMenu\Menu\Presenter;

class XMLMenuPresenter extends MenuPresenter
{
    public function renderMenu()
    {
        $categories = $this->renderChildren();

        return $this->viewFinder->fetch(PROJECT_ROOT.'views/html/menu.xml', compact('categories'));
    }

    public function renderCategory()
    {
        $data = array(
            'id'          => $this->component->id,
            'title'       => $this->component->title,
            'description' => $this->component->description,
            'info'        => $this->component->info,
            'sizes'       => $this->component->getSizes(),
            'items'       => $this->renderChildren(),
        );

        return $this->viewFinder->fetch(PROJECT_ROOT.'views/html/category.xml', $data);
    }

    public function renderItem()
    {
        $data = array(
            'id'          => $this->component->id,
            'title'       => $this->component->title,
            'description' => $this->component->description,
            'info'        => $this->component->info,
            'sizes'       => $this->component->getSizes(),
        );

        return $this->viewFinder->fetch(PROJECT_ROOT.'views/html/item.xml', $data);
    }
}
