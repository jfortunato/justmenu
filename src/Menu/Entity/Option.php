<?php namespace JustMenu\Menu\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Option
 */
class Option
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
     * @var integer
     */
    private $choice_mode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $menuComponentOptions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $values;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->menuComponentOptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->values = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Option
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
     * @return Option
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
     * @return Option
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
     * Set choice_mode
     *
     * @param integer $choiceMode
     * @return Option
     */
    public function setChoiceMode($choiceMode)
    {
        $this->choice_mode = $choiceMode;

        return $this;
    }

    /**
     * Get choice_mode
     *
     * @return integer 
     */
    public function getChoiceMode()
    {
        return $this->choice_mode;
    }

    /**
     * Add menuComponentOptions
     *
     * @param \JustMenu\Menu\Entity\MenuComponentOption $menuComponentOptions
     * @return Option
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

    /**
     * Add values
     *
     * @param \JustMenu\Menu\Entity\OptionValue $values
     * @return Option
     */
    public function addValue(\JustMenu\Menu\Entity\OptionValue $values)
    {
        $this->values[] = $values;

        return $this;
    }

    /**
     * Remove values
     *
     * @param \JustMenu\Menu\Entity\OptionValue $values
     */
    public function removeValue(\JustMenu\Menu\Entity\OptionValue $values)
    {
        $this->values->removeElement($values);
    }

    /**
     * Get values
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getValues()
    {
        return $this->values;
    }
}
