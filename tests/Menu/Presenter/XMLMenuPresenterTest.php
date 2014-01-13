<?php

use Mockery as m;
use JustMenu\Menu\Presenter\XMLMenuPresenter;
use JustMenu\Menu\Entity\Menu;

class XMLMenuPresenterTest extends TestCase {

	public function setUp()
	{
		$this->mockCategory = m::mock('JustMenu\Menu\Entity\Category[getSizes]');
		$this->mockCategory->title = 'foo';
		$this->mockCategory->description = 'bar';
		$this->mockCategory->info = 'baz';
		$this->mockCategoryComponent = m::mock('JustMenu\Menu\MenuComponent[getEntity]', array($this->mockCategory));
		$this->mockCategoryComponent->shouldReceive('getEntity')->andReturn($this->mockCategory);

		$this->mockItem = m::mock('JustMenu\Menu\Entity\Item', array('getSizes' => []));
		$this->mockItem->title = 'foo';
		$this->mockItem->description = 'bar';
		$this->mockItem->info = 'baz';
		$this->mockItemComponent = m::mock('JustMenu\Menu\MenuComponent', array($this->mockItem));
		$this->mockItemComponent->shouldReceive('getEntity')->andReturn($this->mockItem);
	}

	public function testItem()
	{
		$presenter = new XMLMenuPresenter($this->mockItemComponent);

		$rendered = $presenter->render();

		$this->assertTag(['tag' => 'Item'], $rendered, '', false);
		$this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Item'], 'content' => 'foo'], $rendered, '', false);
		$this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Item'], 'content' => 'bar'], $rendered, '', false);
		$this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Item'], 'content' => 'baz'], $rendered, '', false);
	}

	public function testItemWithSizes()
	{
		$this->mockItem->shouldReceive('getSizes')->once()->andReturn(array(0 => ['size' => 'small', 'size_short' => 'sm', 'price' => '3.00']));
		$presenter = new XMLMenuPresenter($this->mockItemComponent);

		$this->assertTag(['tag' => 'size', 'parent' => ['tag' => 'Item'], 'content' => 'small', 'attributes' => ['price' => '3.00']], $presenter->render());
	}


	public function testCategory()
	{
		$this->mockCategory->shouldReceive('getSizes')->once()->andReturn([]);
		$presenter = new XMLMenuPresenter($this->mockCategoryComponent);
		
		$rendered = $presenter->render();

		$this->assertTag(['tag' => 'Category'], $rendered, '', false);
		$this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Category'], 'content' => 'foo'], $rendered, '', false);
		$this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Category'], 'content' => 'bar'], $rendered, '', false);
		$this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Category'], 'content' => 'baz'], $rendered, '', false);
	}

	public function testCategoryWithDefaultSizes()
	{
		$this->mockCategory->shouldReceive('getSizes')->once()->andReturn(array(0 => ['size' => 'small', 'size_short' => 'sm', 'price' => '3.00']));
		$presenter = new XMLMenuPresenter($this->mockCategoryComponent);

		$this->assertTag(['tag' => 'default-size', 'parent' => ['tag' => 'Category'], 'content' => 'small', 'attributes' => ['price' => '3.00']], $presenter->render());
	}


	public function testCategoryWithItem()
	{
		$this->mockCategory->shouldReceive('getSizes')->once()->andReturn([]);
		$this->mockCategoryComponent->add($this->mockItemComponent);

		$presenter = new XMLMenuPresenter($this->mockCategoryComponent);

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
		$mockMenu = m::mock('JustMenu\Menu\Menu');
		$mockMenuComponent = m::mock('JustMenu\Menu\MenuComponent[getEntity]', array($mockMenu));
		$mockMenuComponent->shouldReceive('getEntity')->andReturn($mockMenu);
		$this->mockCategory->shouldReceive('getSizes')->once()->andReturn([]);
		$this->mockCategoryComponent->add($this->mockItemComponent);
		$mockMenuComponent->add($this->mockCategoryComponent);

		$presenter = new XMLMenuPresenter($mockMenuComponent);

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
