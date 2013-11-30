<?php namespace JustMenu\Components;

class Category extends Component {
	public $sizes = array();

	public function display(){
		echo "===============================================<br>";
		echo "$this->title [" . implode(', ', array_keys($this->sizes)) . "] <br>";
		echo "$this->description <br>";
		echo "$this->info <br>";
		echo "-----------------------------------------------<br>";
		for($this->components->rewind(); $this->components->valid(); $this->components->next()){
			$component = $this->components->current();
			$component->display();
		}
		echo "===============================================<br>";
	}
}
