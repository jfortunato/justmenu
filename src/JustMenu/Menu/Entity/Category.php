<?php namespace JustMenu\Menu\Entity;

use JustMenu\Menu\Entity\Size;

class Category extends Entity {

	protected $id;
	protected $title;
	protected $description;
	protected $info;

	protected $sizes = array();

	public function addSize(Size $size){
		$this->sizes[] = $size;
	}

	public function getSizes(){
		return $this->sizes;
	}

	public function getAllLongSizes(){
		$sizes = array();
		foreach ($this->sizes as $size) {
			$sizes[] = $size->size;
		}

		return $sizes;
	}

	public function getAllShortSizes(){
		$sizes = array();
		foreach ($this->sizes as $size) {
			$sizes[] = $size->size_short;
		}

		return $sizes;
	}

}
