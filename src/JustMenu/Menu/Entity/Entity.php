<?php namespace JustMenu\Menu\Entity;

class Entity
{
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if ($property !== 'id' && property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}
