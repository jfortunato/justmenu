<?php namespace JustMenu\Components;

class Item extends MenuComponent {

	public function display(){
		echo "$this->title [" . implode(', ', $this->getAllPrices()) . "] <br>";
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

	private function getAllPrices(){
		$prices = array();
		$sizes = $this->category()->getAllSizes();
		foreach($sizes as $size){
			$prices[$size] = $this->getPrice($size);
		}

		return $prices;
	}

}
