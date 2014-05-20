<?php namespace JustMenu\Menu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category extends MenuComponent
{
    /**
     * @var integer
     */
    private $indexed_order;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function setItemsAsArray(array $items)
    {
        $this->items = $items;
    }

    /**
     * Set indexed_order
     *
     * @param integer $indexedOrder
     * @return Category
     */
    public function setIndexedOrder($indexedOrder)
    {
        $this->indexed_order = $indexedOrder;

        return $this;
    }

    /**
     * Get indexed_order
     *
     * @return integer 
     */
    public function getIndexedOrder()
    {
        return $this->indexed_order;
    }

    /**
     * Add items
     *
     * @param \JustMenu\Menu\Entity\Item $items
     * @return Category
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
