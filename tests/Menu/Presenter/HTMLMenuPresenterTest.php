<?php

use Mockery as m;
use JustMenu\Menu\Presenter\HTMLMenuPresenter;

class HTMLMenuPresenterTest extends TestCase
{
    public function setUp()
    {
        $this->mockItem = m::mock('JustMenu\Menu\Entity\Item');
        $this->mockItem->id = '1';
        $this->mockItem->title = 'foo';
        $this->mockItem->description = 'bar';
        $this->mockItem->info = 'baz';

        $this->mockCategory = m::mock('JustMenu\Menu\Entity\Category');
        $this->mockCategory->id = '1';
        $this->mockCategory->title = 'foo';
        $this->mockCategory->description = 'bar';
        $this->mockCategory->info = 'baz';

        $this->mockMenu = m::mock('JustMenu\Menu\Menu')->makePartial();
    }

    public function testRenderProperlyRendersItemWithAttributes()
    {
        $this->mockItem->shouldReceive('getAllPrices')->once()->andReturn([3.00]);

        $presenter = new HTMLMenuPresenter($this->mockItem);
        $rendered = $presenter->render();

        $this->assertTag(['attributes' => ['data-item' => '1']], $rendered);
        $this->assertTag(['attributes' => ['data-title' => 'foo']], $rendered);
        $this->assertTag(['attributes' => ['data-description' => 'bar']], $rendered);
        $this->assertTag(['attributes' => ['data-info' => 'baz']], $rendered);
        $this->assertTag(['attributes' => ['data-price' => '3.00']], $rendered);
    }

    public function testRenderProperlyRendersCategoryWithAttributes()
    {
        $this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
        $this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());

        $presenter = new HTMLMenuPresenter($this->mockCategory);
        $rendered = $presenter->render();

        $this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        $this->assertTag(['attributes' => ['data-title' => 'foo']], $rendered);
        $this->assertTag(['attributes' => ['data-description' => 'bar']], $rendered);
        $this->assertTag(['attributes' => ['data-info' => 'baz']], $rendered);
        $this->assertTag(['attributes' => ['data-size' => 'lg.']], $rendered);
    }

    public function testCanRenderCategoryWithNoItems()
    {
        $this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
        $this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());

        $presenter = new HTMLMenuPresenter($this->mockCategory);

        $this->assertNotEmpty($presenter->render());
    }

    public function testCanRenderCategoryWithItems()
    {
        $this->mockItem->shouldReceive('getAllPrices')->once()->andReturn(['3.00']);
        $this->mockCategory = m::mock('JustMenu\Menu\Entity\Category[getAllShortSizes]');
        $this->mockCategory->id = '1';
        $this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
        $this->mockCategory->addItem($this->mockItem);

        $presenter = new HTMLMenuPresenter($this->mockCategory);

        $rendered = $presenter->render();

        $this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        $this->assertTag(['attributes' => ['data-item' => '1']], $rendered);
    }

    public function testCanProperlyRenderMenuWithAttributes()
    {
        $this->mockMenu->shouldReceive('getChildrenComponents')->once()->andReturn(array());
        $presenter = new HTMLMenuPresenter($this->mockMenu);

        $this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $presenter->render());
    }

    public function testCanRenderMenuWithCategoriesAndItems()
    {
        $this->mockItem->shouldReceive('getAllPrices')->once()->andReturn(['3.00']);
        $this->mockCategory = m::mock('JustMenu\Menu\Entity\Category[getAllShortSizes]');
        $this->mockCategory->id = '1';
        $this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
        $this->mockCategory->addItem($this->mockItem);
        $this->mockMenu->addCategory($this->mockCategory);

        $presenter = new HTMLMenuPresenter($this->mockMenu);
        $rendered = $presenter->render();

        $this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $rendered);
        $this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        $this->assertTag(['attributes' => ['data-item' => '1']], $rendered);
    }
}
