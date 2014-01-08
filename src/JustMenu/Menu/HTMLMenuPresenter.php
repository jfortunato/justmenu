<?php namespace JustMenu\Menu;

class HTMLMenuPresenter extends MenuPresenter {
	
	protected function renderMenu()
	{
		$this->output .= "
		<hr>
		<div>";
		$this->renderChildren();
		$this->output .= "
		</div>";
	}

	protected function renderCategory()
	{
		$this->output .="
		<div>
			<h1>{$this->component->title} [" . implode(', ', $this->component->getAllShortSizes()) . "]</h1>
			<p>{$this->component->description}</p>
			<p>{$this->component->info}</p>";

			$this->renderChildren();

		$this->output .=
		"</div>
		<hr>";
	}

	protected function renderItem()
	{
		$this->output .= "
		<div>
			<h2>{$this->component->title} [" . implode(', ', $this->component->getAllPrices()) . "]</h2>
			<p>{$this->component->description}</p>
			<p>{$this->component->info}</p>
		</div>
		";
	}

}
