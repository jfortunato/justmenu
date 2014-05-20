<?php namespace JustMenu\Menu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Choice
 */
class Choice
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
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $info;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $items;

    protected $sizes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getAllPrices()
    {
        return $this->items[0]->getAllPrices();
    }

    public function getSizes()
    {
        return $this->items[0]->getSizes();
    }

    public function setSizes()
    {
        $this->sizes = $this->getSizes();
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
     * Set title
     *
     * @param string $title
     * @return Choice
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
     * Set description
     *
     * @param string $description
     * @return Choice
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return Choice
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Add items
     *
     * @param \JustMenu\Menu\Entity\Item $items
     * @return Choice
     */
    public function addItem(\JustMenu\Menu\Entity\Item $items)
    {
        $this->items[] = $items;

        return $this;
    }

    /**
     * Remove items
     *
     * @param \JustMenu\Menu\Entity\Item $items
     */
    public function removeItem(\JustMenu\Menu\Entity\Item $items)
    {
        $this->items->removeElement($items);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItems()
    {
        return $this->items;
    }
}
