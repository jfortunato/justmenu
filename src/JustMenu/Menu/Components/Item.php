<?php namespace JustMenu\Menu\Components;

class Item extends MenuComponent {

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

		// if we made it here use default category sizes
		foreach($this->category()->getSizes() as $size){
			if($size['size'] === $s)
				return $size['price'];
		}
	}

	public function getAllPrices(){
		$prices = array();
		$sizes = $this->category()->getAllSizes();
		foreach($sizes as $size){
			$prices[$size] = $this->getPrice($size);
		}

		return $prices;
	}

}
