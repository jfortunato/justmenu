<?php namespace JustMenu\Menu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 */
class Item extends MenuComponent
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var \JustMenu\Menu\Entity\Category
     */
    private $category;

    /**
     * @var \JustMenu\Menu\Entity\Choice
     */
    private $choice;


    public function getSizes()
    {
        if (!empty($this->sizes)) {
            return $this->sizes;
        }

        return $this->category->getSizes();
    }

    public function hasChoice()
    {
        return $this->choice ? true:false;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Item
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set category
     *
     * @param \JustMenu\Menu\Entity\Category $category
     * @return Item
     */
    public function setCategory(\JustMenu\Menu\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \JustMenu\Menu\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set choice
     *
     * @param \JustMenu\Menu\Entity\Choice $choice
     * @return Item
     */
    public function setChoice(\JustMenu\Menu\Entity\Choice $choice = null)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return \JustMenu\Menu\Entity\Choice 
     */
    public function getChoice()
    {
        return $this->choice;
    }
}
