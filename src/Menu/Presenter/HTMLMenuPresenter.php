<?php namespace JustMenu\Menu\Presenter;

use Carbon\Carbon;
use JustMenu\Support\TimeHelper;

class HTMLMenuPresenter extends MenuPresenter
{
    protected $renderedChoiceIds = array();

    public function renderMenu()
    {
        $data = array(
            'options' => $this->entityManager->getOptionsAsJson(),
            'categories' => $this->renderChildren(),
        );

        return $this->viewFinder->fetch(PROJECT_ROOT.'views/html/menu.html', $data);
    }

    public function renderCategory()
    {
        $data = array(
            'id'            => $this->component->id,
            'title'         => $this->component->title,
            'description'   => $this->component->description,
            'special_times' => $this->component->hasSpecialTime() ? TimeHelper::convertSpecialTimes($this->component->special_time):'',
            'info'          => $this->component->info,
            'sizes'         => $this->component->getAllShortSizes(),
            'options'       => $this->component->getJsonOptionIds(),
            'items'         => $this->renderChildren(),
        );

        return $this->viewFinder->fetch(PROJECT_ROOT.'views/html/category.html', $data);
    }

    public function renderItem()
    {
        if ($this->component->hasChoice()) {
            $component = $this->component->choice;

            if (in_array($component->id, $this->renderedChoiceIds)) {
                return;
            }

            $this->renderedChoiceIds[] = $component->id;
            $options = '';
        } else {
            $component = $this->component;
            $options = $component->getJsonOptionIds();
        }

        $data = array(
            'id'           => $component->id,
            'title'        => $component->title,
            'description'  => $component->description,
            'info'         => $component->info,
            'availability' => 'available',
            'prices'       => $component->getAllPrices(),
            'isChoice'     => $component === $this->component ? false:true,
            'options'      => $options,
        );

        if ($data['isChoice']) {
            $data['choices'] = $component->getJsonChoices();
        }

        return $this->viewFinder->fetch(PROJECT_ROOT.'views/html/item.html', $data);
    }
}
