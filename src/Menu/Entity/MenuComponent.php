<?php namespace JustMenu\Menu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuComponent
 */
class MenuComponent
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
     * @var \JustMenu\Menu\Entity\SpecialTime
     */
    private $special_time;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sizes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $menuComponentOptions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sizes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menuComponentOptions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return MenuComponent
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
     * @return MenuComponent
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
     * @return MenuComponent
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
     * Set special_time
     *
     * @param \JustMenu\Menu\Entity\SpecialTime $specialTime
     * @return MenuComponent
     */
    public function setSpecialTime(\JustMenu\Menu\Entity\SpecialTime $specialTime = null)
    {
        $this->special_time = $specialTime;

        return $this;
    }

    /**
     * Get special_time
     *
     * @return \JustMenu\Menu\Entity\SpecialTime 
     */
    public function getSpecialTime()
    {
        return $this->special_time;
    }

    /**
     * Add sizes
     *
     * @param \JustMenu\Menu\Entity\Size $sizes
     * @return MenuComponent
     */
    public function addSize(\JustMenu\Menu\Entity\Size $sizes)
    {
        $this->sizes[] = $sizes;

        return $this;
    }

    /**
     * Remove sizes
     *
     * @param \JustMenu\Menu\Entity\Size $sizes
     */
    public function removeSize(\JustMenu\Menu\Entity\Size $sizes)
    {
        $this->sizes->removeElement($sizes);
    }

    /**
     * Get sizes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSizes()
    {
        return $this->sizes;
    }

    /**
     * Add menuComponentOptions
     *
     * @param \JustMenu\Menu\Entity\MenuComponentOption $menuComponentOptions
     * @return MenuComponent
     */
    public function addMenuComponentOption(\JustMenu\Menu\Entity\MenuComponentOption $menuComponentOptions)
    {
        $this->menuComponentOptions[] = $menuComponentOptions;

        return $this;
    }

    /**
     * Remove menuComponentOptions
     *
     * @param \JustMenu\Menu\Entity\MenuComponentOption $menuComponentOptions
     */
    public function removeMenuComponentOption(\JustMenu\Menu\Entity\MenuComponentOption $menuComponentOptions)
    {
        $this->menuComponentOptions->removeElement($menuComponentOptions);
    }

    /**
     * Get menuComponentOptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMenuComponentOptions()
    {
        return $this->menuComponentOptions;
    }
}
