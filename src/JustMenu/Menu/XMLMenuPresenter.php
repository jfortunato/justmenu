<?php namespace JustMenu\Menu;

class XMLMenuPresenter extends MenuPresenter {
	
	protected function renderMenu()
	{
		$output = "
		<JustMenu>";
		$output .= $this->renderChildren();
		$output .= "
		</JustMenu>";

		return $output;
	}

	protected function renderCategory()
	{
		$output = "
		<Category>
			<title>{$this->component->title}</title>
			<description>{$this->component->description}</description>
			<info>{$this->component->info}</info>";

		$output .= $this->renderChildren();

		$output .= "
		</Category>";

		return $output;
	}

	protected function renderItem()
	{
		$output = "
		<Item>
			<title>{$this->component->title}</title>
			<description>{$this->component->description}</description>
			<info>{$this->component->info}</info>
		</Item>";

		return $output;
	}

}
