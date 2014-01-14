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

		$presenter = new HTMLMenuPresenter($mockItem);
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
		$mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());

		$presenter = new HTMLMenuPresenter($mockCategory);
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
		$mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());

		$presenter = new HTMLMenuPresenter($mockCategory);

		$this->assertNotEmpty($presenter->render());
	}

	public function testCanRenderCategoryWithItems()
	{
		$mockItem = m::mock('JustMenu\Menu\Entity\Item');
		$mockItem->shouldReceive('getAllPrices')->once()->andReturn(['3.00']);
		$mockCategory = m::mock('JustMenu\Menu\Entity\Category[getAllShortSizes]');
		$mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
		$mockCategory->addItem($mockItem);

		$presenter = new HTMLMenuPresenter($mockCategory);

		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-category' => 'category']], $rendered);
		$this->assertTag(['attributes' => ['data-item' => 'item']], $rendered);
	}

	public function testCanProperlyRenderMenuWithAttributes()
	{
		$mockMenu = m::mock('JustMenu\Menu\Menu');
		$mockMenu->shouldReceive('getChildrenComponents')->once()->andReturn(array());
		$presenter = new HTMLMenuPresenter($mockMenu);

		$this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $presenter->render());
	}


	public function testCanRenderMenuWithCategoriesAndItems()
	{
		$mockItem = m::mock('JustMenu\Menu\Entity\Item');
		$mockItem->shouldReceive('getAllPrices')->once()->andReturn(['3.00']);
		$mockCategory = m::mock('JustMenu\Menu\Entity\Category[getAllShortSizes]');
		$mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
		$mockCategory->addItem($mockItem);
		$mockMenu = m::mock('JustMenu\Menu\Menu')->makePartial();
		$mockMenu->addCategory($mockCategory);

		$presenter = new HTMLMenuPresenter($mockMenu);
		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $rendered);
		$this->assertTag(['attributes' => ['data-category' => 'category']], $rendered);
		$this->assertTag(['attributes' => ['data-item' => 'item']], $rendered);
	}


}
