<?php namespace JustMenu\Components;

class Category extends Component {

	public function display(){
		echo "===============================================<br>";
		echo $this->title . "<br>";
		echo $this->description . "<br>";
		echo $this->info . "<br>";
		echo "-----------------------------------------------<br>";
		for($this->components->rewind(); $this->components->valid(); $this->components->next()){
			$component = $this->components->current();
			$component->display();
		}
		echo "===============================================<br>";
		echo "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>";
		echo "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>";
	}
}
