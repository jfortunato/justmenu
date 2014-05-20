<?php namespace JustMenu\Menu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OptionValue
 */
class OptionValue
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var float
     */
    private $default_price;

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
     * Set title
     *
     * @param string $title
     * @return OptionValue
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set default_price
     *
     * @param float $defaultPrice
     * @return OptionValue
     */
    public function setDefaultPrice($defaultPrice)
    {
        $this->default_price = $defaultPrice;

        return $this;
    }

    /**
     * Get default_price
     *
     * @return float 
     */
    public function getDefaultPrice()
    {
        return $this->default_price;
    }

    /**
     * Set option
     *
     * @param \JustMenu\Menu\Entity\Option $option
     * @return OptionValue
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
