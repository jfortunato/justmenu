<?php namespace JustMenu\Menu\Presenter;

class HTMLMenuPresenter extends MenuPresenter
{
    protected function renderMenu()
    {
        $categories = $this->renderChildren();

        return $this->fetchView('menu.html', compact('categories'));
    }

    protected function renderCategory()
    {
        $data = array(
            'title'       => $this->component->title,
            'description' => $this->component->description,
            'info'        => $this->component->info,
            'sizes'       => $this->component->getAllShortSizes(),
            'items'       => $this->renderChildren(),
        );

        return $this->fetchView('category.html', $data);
    }

    protected function renderItem()
    {
        $data = array(
            'title'       => $this->component->title,
            'description' => $this->component->description,
            'info'        => $this->component->info,
            'prices'      => $this->component->getAllPrices(),
        );

        return $this->fetchView('item.html', $data);
    }
}
