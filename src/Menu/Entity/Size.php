<?php namespace JustMenu\Menu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Size
 */
class Size
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $size;

    /**
     * @var string
     */
    private $size_short;

    /**
     * @var string
     */
    private $price;

    /**
     * @var \JustMenu\Menu\Entity\MenuComponent
     */
    private $menu_component;


    public function __construct($price, $size, $size_short = '')
    {
        $this->price = $price;
        $this->size = $size;
        $this->size_short = $size_short ?: Abbr::abbreviate($size);
    }

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
     * Set size
     *
     * @param string $size
     * @return Size
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
     * Set size_short
     *
     * @param string $sizeShort
     * @return Size
     */
    public function setSizeShort($sizeShort)
    {
        $this->size_short = $sizeShort;

        return $this;
    }

    /**
     * Get size_short
     *
     * @return string 
     */
    public function getSizeShort()
    {
        return $this->size_short;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Size
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set menu_component
     *
     * @param \JustMenu\Menu\Entity\MenuComponent $menuComponent
     * @return Size
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
