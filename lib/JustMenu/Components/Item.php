<?php namespace JustMenu\Components;

class Item extends Component {

	public function display(){
		echo "$this->title | " . implode(', ', $this->category()->sizes) . " <br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp; $this->description <br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp; $this->info <br>";
	}

	public function category(){
		return $this->parent;
	}
}
