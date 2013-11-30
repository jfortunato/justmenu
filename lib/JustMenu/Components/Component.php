<?php namespace JustMenu\Components;

abstract class Component {
	public $components;
	public $title;
	public $description;
	public $info;

	public function __construct(){
		$this->components = new \SplObjectStorage();
	}

	public function add(Component $component){
		$this->components->attach($component);
	}

	public function remove(Component $component){
		$this->components->detach($component);
	}

	abstract public function display();
}
