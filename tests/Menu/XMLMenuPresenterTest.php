<?php

use JustMenu\Menu\Components\Category;
use JustMenu\Menu\XMLMenuPresenter;
use JustMenu\Menu\Components\Item;
use JustMenu\Menu\Components\Menu;

class XMLMenuPresenterTest extends TestCase {

	public function setUp()
	{
		$this->menu = new Menu;

		$this->category = new Category;
		$this->category->title = 'foo';
		$this->category->description = 'bar';
		$this->category->info = 'baz';

		$this->item = new Item;
		$this->item->title = 'foo';
		$this->item->description = 'bar';
		$this->item->info = 'baz';
	}

	public function testItem()
	{
		$presenter = new XMLMenuPresenter($this->item);

		$rendered = $presenter->render();

		$this->assertTag(['tag' => 'Item'], $rendered, '', false);
		$this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Item'], 'content' => 'foo'], $rendered, '', false);
		$this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Item'], 'content' => 'bar'], $rendered, '', false);
		$this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Item'], 'content' => 'baz'], $rendered, '', false);
	}

	public function testCategory()
	{
		$presenter = new XMLMenuPresenter($this->category);
		
		$rendered = $presenter->render();

		$this->assertTag(['tag' => 'Category'], $rendered, '', false);
		$this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Category'], 'content' => 'foo'], $rendered, '', false);
		$this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Category'], 'content' => 'bar'], $rendered, '', false);
		$this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Category'], 'content' => 'baz'], $rendered, '', false);
	}

	public function testCategoryWithItem()
	{
		$this->category->add($this->item);

		$presenter = new XMLMenuPresenter($this->category);

		$rendered = $presenter->render();

		$this->assertTag(['tag' => 'Category'], $rendered, '', false);
		$this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Category'], 'content' => 'foo'], $rendered, '', false);
		$this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Category'], 'content' => 'bar'], $rendered, '', false);
		$this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Category'], 'content' => 'baz'], $rendered, '', false);
		$this->assertTag(['tag' => 'Item', 'parent' => ['tag' => 'Category']], $rendered, '', false);
		$this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Item'], 'content' => 'foo'], $rendered, '', false);
		$this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Item'], 'content' => 'bar'], $rendered, '', false);
		$this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Item'], 'content' => 'baz'], $rendered, '', false);
	}

	public function testMenu()
	{
		$menu = new Menu;
		$this->category->add($this->item);
		$menu->add($this->category);

		$presenter = new XMLMenuPresenter($menu);

		$rendered = $presenter->render();

		$this->assertTag(['tag' => 'JustMenu'], $rendered, '', false);
		$this->assertTag(['tag' => 'Category', 'parent' => ['tag' => 'JustMenu']], $rendered, '', false);
		$this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Category'], 'content' => 'foo'], $rendered, '', false);
		$this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Category'], 'content' => 'bar'], $rendered, '', false);
		$this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Category'], 'content' => 'baz'], $rendered, '', false);
		$this->assertTag(['tag' => 'Item', 'parent' => ['tag' => 'Category']], $rendered, '', false);
		$this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Item'], 'content' => 'foo'], $rendered, '', false);
		$this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Item'], 'content' => 'bar'], $rendered, '', false);
		$this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Item'], 'content' => 'baz'], $rendered, '', false);
	}

}
