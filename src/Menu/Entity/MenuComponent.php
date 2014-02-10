<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\MenuComponentInterface;

abstract class MenuComponent extends Entity implements MenuComponentInterface
{
    protected $id;
    protected $component_type;
    protected $title;
    protected $description;
    protected $info;

    protected $sizes = array();
    protected $special_time;
    protected $menuComponentOptions = array();

    public function addSize(Size $size)
    {
        $this->sizes[] = $size;
    }

    public function hasSpecialTime()
    {
        return $this->special_time ? true:false;
    }

    public function getJsonOptionIds()
    {
        $optionIds = array();

        foreach ($this->menuComponentOptions as $menuComponentOption) {
            $optionIds[] = array('id' => $menuComponentOption->option->id, 'required' => $menuComponentOption->required, 'size' => $menuComponentOption->size);
        }

        return json_encode($optionIds);
    }
}
