<?php

use JustMenu\Menu\XMLMenuPresenter;
use JustMenu\Menu\Components\Menu;

class XMLMenuPresenterTest extends TestCase {

	public function setUp()
	{
		$this->category = Mockery::mock('JustMenu\Menu\Components\Category[getSizes]');
		$this->category->title = 'foo';
		$this->category->description = 'bar';
		$this->category->info = 'baz';

		$this->item = Mockery::mock('JustMenu\Menu\Components\Item', array('getSizes' => []));
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

	public function testItemWithSizes()
	{
		$this->item->shouldReceive('getSizes')->once()->andReturn(array(0 => ['size' => 'small', 'size_short' => 'sm', 'price' => '3.00']));
		$presenter = new XMLMenuPresenter($this->item);

		$this->assertTag(['tag' => 'size', 'parent' => ['tag' => 'Item'], 'content' => 'small', 'attributes' => ['price' => '3.00']], $presenter->render());
	}


	public function testCategory()
	{
		$this->category->shouldReceive('getSizes')->once()->andReturn([]);
		$presenter = new XMLMenuPresenter($this->category);
		
		$rendered = $presenter->render();

		$this->assertTag(['tag' => 'Category'], $rendered, '', false);
		$this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Category'], 'content' => 'foo'], $rendered, '', false);
		$this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Category'], 'content' => 'bar'], $rendered, '', false);
		$this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Category'], 'content' => 'baz'], $rendered, '', false);
	}

	public function testCategoryWithDefaultSizes()
	{
		$this->category->shouldReceive('getSizes')->once()->andReturn(array(0 => ['size' => 'small', 'size_short' => 'sm', 'price' => '3.00']));
		$presenter = new XMLMenuPresenter($this->category);

		$this->assertTag(['tag' => 'default-size', 'parent' => ['tag' => 'Category'], 'content' => 'small', 'attributes' => ['price' => '3.00']], $presenter->render());
	}


	public function testCategoryWithItem()
	{
		$this->category->shouldReceive('getSizes')->once()->andReturn([]);
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
		$this->category->shouldReceive('getSizes')->once()->andReturn([]);
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
