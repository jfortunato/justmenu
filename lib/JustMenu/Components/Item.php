<?php namespace JustMenu\Components;

class Item extends Component {

	public function display(){
		echo "$this->title | [SELECT] <br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp; $this->description <br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp; $this->info <br>";
	}
}
