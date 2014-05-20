<?php namespace JustMenu\Menu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialTime
 */
class SpecialTime
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $days;

    /**
     * @var string
     */
    private $times;

    /**
     * @var \JustMenu\Menu\Entity\MenuComponent
     */
    private $menu_component;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set days
     *
     * @param string $days
     * @return SpecialTime
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return string 
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set times
     *
     * @param string $times
     * @return SpecialTime
     */
    public function setTimes($times)
    {
        $this->times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return string 
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Set menu_component
     *
     * @param \JustMenu\Menu\Entity\MenuComponent $menuComponent
     * @return SpecialTime
     */
    public function setMenuComponent(\JustMenu\Menu\Entity\MenuComponent $menuComponent = null)
    {
        $this->menu_component = $menuComponent;

        return $this;
    }

    /**
     * Get menu_component
     *
     * @return \JustMenu\Menu\Entity\MenuComponent 
     */
    public function getMenuComponent()
    {
        return $this->menu_component;
    }
}
