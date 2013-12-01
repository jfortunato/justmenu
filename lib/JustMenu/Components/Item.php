<?php namespace JustMenu\Components;

class Item extends MenuComponent {

	public function display(){
		echo "$this->title [" . implode(', ', array_map(function($size) { return $size['price']; }, $this->category()->getSizes())) . "] <br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp; $this->description <br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp; $this->info <br>";
	}

	public function category(){
		return $this->parent;
	}

	public function getPrice($size){
		$s = $size;

		// first check if we have overriden the category size
		foreach($this->sizes as $size){
			if($size['size'] === $s)
				return $size['price'];
		}

		// if we made it here use default cateogry sizes
		foreach($this->category()->getSizes() as $size){
			if($size['size'] === $s)
				return $size['price'];
		}
	}
}
