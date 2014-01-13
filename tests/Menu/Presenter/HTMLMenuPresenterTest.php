<?php

use Mockery as m;
use JustMenu\Menu\Presenter\HTMLMenuPresenter;

class HTMLMenuPresenterTest extends TestCase {

	public function testRenderProperlyRendersItemWithAttributes()
	{
		$mockItem = m::mock('JustMenu\Menu\Entity\Item');
		$mockItem->title = 'foo';
		$mockItem->description = 'bar';
		$mockItem->info = 'baz';
		$mockItem->shouldReceive('getAllPrices')->once()->andReturn([3.00]);
		$mockComponent = m::mock('JustMenu\Menu\MenuComponent', array($mockItem));
		$mockComponent->shouldReceive('getEntity')->andReturn($mockItem);

		$presenter = new HTMLMenuPresenter($mockComponent);
		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-item' => 'item']], $rendered);
		$this->assertTag(['attributes' => ['data-title' => 'foo']], $rendered);
		$this->assertTag(['attributes' => ['data-description' => 'bar']], $rendered);
		$this->assertTag(['attributes' => ['data-info' => 'baz']], $rendered);
		$this->assertTag(['attributes' => ['data-price' => '3.00']], $rendered);
	}

	public function testRenderProperlyRendersCategoryWithAttributes()
	{
		$mockCategory = m::mock('JustMenu\Menu\Entity\Category');
		$mockCategory->title = 'foo';
		$mockCategory->description = 'bar';
		$mockCategory->info = 'baz';
		$mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
		$mockComponent = m::mock('JustMenu\Menu\MenuComponent', array($mockCategory));
		$mockComponent->shouldReceive('getEntity')->andReturn($mockCategory);

		$presenter = new HTMLMenuPresenter($mockComponent);
		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-category' => 'category']], $rendered);
		$this->assertTag(['attributes' => ['data-title' => 'foo']], $rendered);
		$this->assertTag(['attributes' => ['data-description' => 'bar']], $rendered);
		$this->assertTag(['attributes' => ['data-info' => 'baz']], $rendered);
		$this->assertTag(['attributes' => ['data-size' => 'lg.']], $rendered);
	}

	public function testCanRenderCategoryWithNoItems()
	{
		$mockCategory = m::mock('JustMenu\Menu\Entity\Category');
		$mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
		$mockComponent = m::mock('JustMenu\Menu\MenuComponent');
		$mockComponent->shouldReceive('getEntity')->andReturn($mockCategory);

		$presenter = new HTMLMenuPresenter($mockComponent);

		$this->assertNotEmpty($presenter->render());
	}

	public function testCanRenderCategoryWithItems()
	{
		$mockItem = m::mock('JustMenu\Menu\Entity\Item');
		$mockItem->shouldReceive('getAllPrices')->once()->andReturn(['3.00']);
		$mockItemComponent = m::mock('JustMenu\Menu\MenuComponent', array($mockItem));
		$mockItemComponent->shouldReceive('getEntity')->andReturn($mockItem);
		$mockCategory = m::mock('JustMenu\Menu\Entity\Category');
		$mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
		$mockCategoryComponent = m::mock('JustMenu\Menu\MenuComponent[getEntity]', array($mockCategory));
		$mockCategoryComponent->shouldReceive('getEntity')->andReturn($mockCategory);
		$mockCategoryComponent->add($mockItemComponent);

		$presenter = new HTMLMenuPresenter($mockCategoryComponent);

		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-category' => 'category']], $rendered);
		$this->assertTag(['attributes' => ['data-item' => 'item']], $rendered);
	}

	public function testCanProperlyRenderMenuWithAttributes()
	{
		$mockMenu = m::mock('JustMenu\Menu\Menu');
		$mockComponent = m::mock('JustMenu\Menu\MenuComponent', array($mockMenu));
		$mockComponent->shouldReceive('getEntity')->andReturn($mockMenu);
		$presenter = new HTMLMenuPresenter($mockComponent);

		$this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $presenter->render());
	}


	public function testCanRenderMenuWithCategoriesAndItems()
	{
		$mockItem = m::mock('JustMenu\Menu\Entity\Item');
		$mockItem->shouldReceive('getAllPrices')->once()->andReturn(['3.00']);
		$mockItemComponent = m::mock('JustMenu\Menu\MenuComponent', array($mockItem));
		$mockItemComponent->shouldReceive('getEntity')->andReturn($mockItem);
		$mockCategory = m::mock('JustMenu\Menu\Entity\Category');
		$mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
		$mockCategoryComponent = m::mock('JustMenu\Menu\MenuComponent[getEntity]', array($mockCategory));
		$mockCategoryComponent->shouldReceive('getEntity')->andReturn($mockCategory);
		$mockCategoryComponent->add($mockItemComponent);
		$mockMenu = m::mock('JustMenu\Menu\Menu');
		$mockMenuComponent = m::mock('JustMenu\Menu\MenuComponent[getEntity]', array($mockMenu));
		$mockMenuComponent->shouldReceive('getEntity')->andReturn($mockMenu);
		$mockMenuComponent->add($mockCategoryComponent);

		$presenter = new HTMLMenuPresenter($mockMenuComponent);
		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $rendered);
		$this->assertTag(['attributes' => ['data-category' => 'category']], $rendered);
		$this->assertTag(['attributes' => ['data-item' => 'item']], $rendered);
	}


}
