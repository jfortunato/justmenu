<?php namespace JustMenu\Menu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuComponentOption
 */
class MenuComponentOption
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $required;

    /**
     * @var string
     */
    private $size;

    /**
     * @var \JustMenu\Menu\Entity\MenuComponent
     */
    private $menu_component;

    /**
     * @var \JustMenu\Menu\Entity\Option
     */
    private $option;


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
     * Set required
     *
     * @param boolean $required
     * @return MenuComponentOption
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean 
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return MenuComponentOption
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set menu_component
     *
     * @param \JustMenu\Menu\Entity\MenuComponent $menuComponent
     * @return MenuComponentOption
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

    /**
     * Set option
     *
     * @param \JustMenu\Menu\Entity\Option $option
     * @return MenuComponentOption
     */
    public function setOption(\JustMenu\Menu\Entity\Option $option = null)
    {
        $this->option = $option;

        return $this;
    }

    /**
     * Get option
     *
     * @return \JustMenu\Menu\Entity\Option 
     */
    public function getOption()
    {
        return $this->option;
    }
}
