<?php namespace JustMenu\Menu;

class SimpleMenuPresenter extends MenuPresenter {
	
	protected function renderMenu()
	{
		$this->showChildren();
	}

	protected function renderCategory()
	{
		$this->output .= "===============================================<br>";
		$this->output .= "{$this->component->title} [" . implode(', ', $this->component->getAllShortSizes()) . "] <br>";
		$this->output .= "{$this->component->description} <br>";
		$this->output .= "{$this->component->info} <br>";
		$this->output .= "-----------------------------------------------<br>";

		$this->showChildren();

		$this->output .= "===============================================<br>";
	}

	protected function renderItem()
	{
		$this->output .= "{$this->component->title} [" . implode(', ', $this->component->getAllPrices()) . "] <br>";
		$this->output .= "&nbsp;&nbsp;&nbsp;&nbsp; {$this->component->description} <br>";
		$this->output .= "&nbsp;&nbsp;&nbsp;&nbsp; {$this->component->info} <br>";
	}

}
