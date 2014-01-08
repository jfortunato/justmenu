<?php namespace JustMenu\Menu\Components;

use JustMenu\Support\Abbreviator;

abstract class MenuComponent {
	/**
	 * a composite of MenuComponents
	 *
	 * @var SplObjectStorage
	 */
	public $components;

	/**
	 * reference to the MenuComponent that holds this MenuComponent
	 *
	 * @var MenuComponent
	 */
	public $parent;

	/**
	 * main identifying name
	 *
	 * @var string
	 */
	public $title;

	/**
	 * short message that quickly describes a MenuComponent
	 *
	 * @var string
	 */
	public $description;

	/**
	 * any additional information to describe the MenuComponent
	 *
	 * @var string
	 */
	public $info;

	/**
	 * multidimensional array holding each size/price
	 *
	 * @var array
	 */
	protected $sizes = array();

	public function __construct(){
		$this->components = new \SplObjectStorage();
	}

	public function add(MenuComponent $component){
		$this->components->attach($component);
		$component->parent = $this;
	}

	public function remove(MenuComponent $component){
		$this->components->detach($component);
	}

	public function addSize($price, $size, $size_short = ''){
		// $size_short is not required so attempt to automatically abbreviate if not given
		$size_short = empty($size_short) ? Abbreviator::abbreviate($size):$size_short;
		$this->sizes[] = array('size' => $size, 'size_short' => $size_short, 'price' => $price);
	}

	public function getSizes(){
		return $this->sizes;
	}

	//abstract public function display();
}
