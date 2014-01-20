<?php namespace JustMenu\Menu\Presenter;

class HTMLMenuPresenter extends MenuPresenter
{
    protected $renderedChoiceIds = array();

    public function renderMenu()
    {
        $categories = $this->renderChildren();

        return $this->fetchView('menu.html', compact('categories'));
    }

    public function renderCategory()
    {
        $data = array(
            'id'          => $this->component->id,
            'title'       => $this->component->title,
            'description' => $this->component->description,
            'info'        => $this->component->info,
            'sizes'       => $this->component->getAllShortSizes(),
            'items'       => $this->renderChildren(),
        );

        return $this->fetchView('category.html', $data);
    }

    public function renderItem()
    {
        if ($this->component->hasChoice()) {
            $component = $this->component->choice;

            if (in_array($component->id, $this->renderedChoiceIds)) {
                return;
            }

            $this->renderedChoiceIds[] = $component->id;
        } else {
            $component = $this->component;
        }

        $data = array(
            'id'          => $component->id,
            'title'       => $component->title,
            'description' => $component->description,
            'info'        => $component->info,
            'prices'      => $component->getAllPrices(),
            'isChoice'    => $component === $this->component ? false:true,
        );

        return $this->fetchView('item.html', $data);
    }
}
