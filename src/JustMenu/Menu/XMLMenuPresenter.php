<?php namespace JustMenu\Menu;

class XMLMenuPresenter extends MenuPresenter {
	
	protected function renderMenu()
	{
		$this->output .= "
		<JustMenu>";
		$this->renderChildren();
		$this->output .= "
		</JustMenu>";
	}

	protected function renderCategory()
	{
		$this->output .= "
		<Category>
			<title>{$this->component->title}</title>
			<description>{$this->component->description}</description>
			<info>{$this->component->info}</info>";

		$this->renderChildren();

		$this->output .= "
		</Category>";
	}

	protected function renderItem()
	{
		$this->output .= "
		<Item>
			<title>{$this->component->title}</title>
			<description>{$this->component->description}</description>
			<info>{$this->component->info}</info>
		</Item>";
	}

}
