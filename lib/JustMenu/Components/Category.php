<?php namespace JustMenu\Components;

class Category extends MenuComponent {

	public function display(){
		echo "===============================================<br>";
		echo "$this->title [" . implode(', ', $this->getAllShortSizes()) . "] <br>";
		echo "$this->description <br>";
		echo "$this->info <br>";
		echo "-----------------------------------------------<br>";
		for($this->components->rewind(); $this->components->valid(); $this->components->next()){
			$component = $this->components->current();
			$component->display();
		}
		echo "===============================================<br>";
	}

	public function getAllSizes(){
		return array_map(function($size) { return $size['size']; }, $this->sizes);
	}

	public function getAllShortSizes(){
		return array_map(function($size) { return $size['size_short']; }, $this->sizes);
	}

}
