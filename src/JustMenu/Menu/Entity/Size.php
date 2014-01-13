<?php namespace JustMenu\Menu\Entity;

class Size extends Entity {

	protected $id;
	protected $size;
	protected $size_short;
	protected $price;

	public function __construct($price, $size, $size_short = '')
	{
		$this->price = $price;
		$this->size = $size;
		$this->size_short = $size_short ?: Abbreviator::abbreviate($size);
	}
	
}
