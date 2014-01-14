<?php namespace JustMenu\Menu\Presenter;

class XMLMenuPresenter extends MenuPresenter
{
    protected function renderMenu()
    {
        $categories = $this->renderChildren();

        return $this->fetchView('menu.xml', compact('categories'));
    }

    protected function renderCategory()
    {
        $data = array(
            'title'       => $this->component->title,
            'description' => $this->component->description,
            'info'        => $this->component->info,
            'sizes'       => $this->component->getSizes(),
            'items'       => $this->renderChildren(),
        );

        return $this->fetchView('category.xml', $data);
    }

    protected function renderItem()
    {
        $data = array(
            'title'       => $this->component->title,
            'description' => $this->component->description,
            'info'        => $this->component->info,
            'sizes'       => $this->component->getSizes(),
        );

        return $this->fetchView('item.xml', $data);
    }
}
