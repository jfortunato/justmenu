<?php namespace JustMenu\Menu;

use \SplObjectStorage;
use JustMenu\Support\Abbreviator;

class MenuComponent extends SplObjectStorage {
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
	protected $parent;

	/**
	 * multidimensional array holding each size/price
	 *
	 * @var array
	 */
	protected $sizes = array();

	protected $entity;

	public function __construct($entity, SplObjectStorage $components = null){
		$this->entity = $entity;
		$this->components = $components ?: new SplObjectStorage;
	}

	public function add(MenuComponent $component){
		$this->components->attach($component);
		$component->parent = $this;
	}

	public function remove(MenuComponent $component){
		$this->components->detach($component);
	}

	public function getEntity()
	{
		return $this->entity;
	}

	public function __call($method, $args)
	{
		if(method_exists($this->entity, $method)){
			switch (count($args)){
			case 0:
				return $this->entity->$method();
			case 1:
				return $this->entity->$method($args[0]);
			case 2:
				return $this->entity->$method($args[0], $args[1]);
			case 3:
				return $this->entity->$method($args[0], $args[1], $args[2]);
			default:
				return call_user_func_array(array($$this->entity, $method), $args);
			}
		}

		throw new \BadMethodCallException;
	}

	public function __set($property, $value)
	{
		if(property_exists($this->entity, $property))
			$this->entity->$property = $value;
	}

}
