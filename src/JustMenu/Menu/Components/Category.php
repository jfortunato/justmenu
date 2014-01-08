<?php namespace JustMenu\Menu\Components;

class Category extends MenuComponent {

	public function getAllSizes(){
		return array_map(function($size) { return $size['size']; }, $this->sizes);
	}

	public function getAllShortSizes(){
		return array_map(function($size) { return $size['size_short']; }, $this->sizes);
	}

}
