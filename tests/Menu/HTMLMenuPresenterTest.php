<?php

use Mockery as m;
use JustMenu\Menu\HTMLMenuPresenter;

class HTMLMenuPresenterTest extends TestCase {

	public function testRenderProperlyRendersItemWithAttributes()
	{
		$presenter = new HTMLMenuPresenter(m::mock('JustMenu\Menu\Components\Item'));
		$presenter->getComponent()->title = 'foo';
		$presenter->getComponent()->description = 'bar';
		$presenter->getComponent()->info = 'baz';
		$presenter->getComponent()->shouldReceive('getAllPrices')->once()->andReturn([3.00]);

		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-item' => 'item']], $rendered);
		$this->assertTag(['attributes' => ['data-title' => 'foo']], $rendered);
		$this->assertTag(['attributes' => ['data-description' => 'bar']], $rendered);
		$this->assertTag(['attributes' => ['data-info' => 'baz']], $rendered);
		$this->assertTag(['attributes' => ['data-prices' => '3.00']], $rendered);
	}

	public function testRenderProperlyRendersCategoryWithAttributes()
	{
		$presenter = new HTMLMenuPresenter(m::mock('JustMenu\Menu\Components\Category'));
		$presenter->getComponent()->title = 'foo';
		$presenter->getComponent()->description = 'bar';
		$presenter->getComponent()->info = 'baz';
		$presenter->getComponent()->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);

		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-category' => 'category']], $rendered);
		$this->assertTag(['attributes' => ['data-title' => 'foo']], $rendered);
		$this->assertTag(['attributes' => ['data-description' => 'bar']], $rendered);
		$this->assertTag(['attributes' => ['data-info' => 'baz']], $rendered);
		$this->assertTag(['attributes' => ['data-sizes' => 'lg.']], $rendered);
	}

	public function testCanRenderCategoryWithNoItems()
	{
		$presenter = new HTMLMenuPresenter(m::mock('JustMenu\Menu\Components\Category'));
		$presenter->getComponent()->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);

		$this->assertNotEmpty($presenter->render());
	}

	public function testCanRenderCategoryWithItems()
	{
		$mockCategory = m::mock('JustMenu\Menu\Components\Category[getAllShortSizes]');
		$mockItem = m::mock('JustMenu\Menu\Components\Item');
		$mockCategory->add($mockItem);

		$presenter = new HTMLMenuPresenter($mockCategory);
		$presenter->getComponent()->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
		$mockItem->shouldReceive('getAllPrices')->once()->andReturn(['3.00']);

		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-category' => 'category']], $rendered);
		$this->assertTag(['attributes' => ['data-item' => 'item']], $rendered);
	}

	public function testCanProperlyRenderMenuWithAttributes()
	{
		$presenter = new HTMLMenuPresenter(m::mock('JustMenu\Menu\Components\Menu'));

		$this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $presenter->render());
	}


	public function testCanRenderMenuWithCategoriesAndItems()
	{
		$mockMenu = new JustMenu\Menu\Components\Menu;
		$mockCategory = m::mock('JustMenu\Menu\Components\Category[getAllShortSizes]');
		$mockItem = m::mock('JustMenu\Menu\Components\Item');

		$mockCategory->add($mockItem);
		$mockMenu->add($mockCategory);

		$presenter = new HTMLMenuPresenter($mockMenu);
		$mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
		$mockItem->shouldReceive('getAllPrices')->once()->andReturn(['3.00']);

		$rendered = $presenter->render();

		$this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $rendered);
		$this->assertTag(['attributes' => ['data-category' => 'category']], $rendered);
		$this->assertTag(['attributes' => ['data-item' => 'item']], $rendered);
	}


}
