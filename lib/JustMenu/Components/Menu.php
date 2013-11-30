<?php namespace JustMenu\Components;

class Menu extends Component {

	public function display(){
		for($this->components->rewind(); $this->components->valid(); $this->components->next()){
			$component = $this->components->current();
			$component->display();
		}
	}
}
