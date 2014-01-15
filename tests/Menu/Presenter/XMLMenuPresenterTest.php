<?php

use Mockery as m;
use JustMenu\Menu\Presenter\XMLMenuPresenter;
use JustMenu\Menu\Entity\Menu;

class XMLMenuPresenterTest extends TestCase
{
    public function setUp()
    {
        $this->mockCategory = m::mock('JustMenu\Menu\Entity\Category[getSizes]');
        $this->mockCategory->title = 'foo';
        $this->mockCategory->description = 'bar';
        $this->mockCategory->info = 'baz';

        $this->mockItem = m::mock('JustMenu\Menu\Entity\Item', array('getSizes' => []));
        $this->mockItem->title = 'foo';
        $this->mockItem->description = 'bar';
        $this->mockItem->info = 'baz';
    }

    public function testItem()
    {
        $presenter = new XMLMenuPresenter($this->mockItem);

        $rendered = $presenter->render();

        $this->assertTag(['tag' => 'Item'], $rendered, '', false);
        $this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Item'], 'content' => 'foo'], $rendered, '', false);
        $this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Item'], 'content' => 'bar'], $rendered, '', false);
        $this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Item'], 'content' => 'baz'], $rendered, '', false);
    }

    public function testItemWithSizes()
    {
        $this->mockItem->shouldReceive('getSizes')->once()->andReturn(array($mockSize = m::mock('JustMenu\Menu\Entity\Size')));
        $mockSize->size = 'small';
        $mockSize->size_short = 'sm';
        $mockSize->price = '3.00';
        $presenter = new XMLMenuPresenter($this->mockItem);

        $this->assertTag(['tag' => 'size', 'parent' => ['tag' => 'Item'], 'content' => 'small', 'attributes' => ['price' => '3.00']], $presenter->render());
    }

    public function testCategory()
    {
        $this->mockCategory->shouldReceive('getSizes')->once()->andReturn([]);
        $presenter = new XMLMenuPresenter($this->mockCategory);

        $rendered = $presenter->render();

        $this->assertTag(['tag' => 'Category'], $rendered, '', false);
        $this->assertTag(['tag' => 'title', 'parent' => ['tag' => 'Category'], 'content' => 'foo'], $rendered, '', false);
        $this->assertTag(['tag' => 'description', 'parent' => ['tag' => 'Category'], 'content' => 'bar'], $rendered, '', false);
        $this->assertTag(['tag' => 'info', 'parent' => ['tag' => 'Category'], 'content' => 'baz'], $rendered, '', false);
    }

    public function testCategoryWithDefaultSizes()
    {
        $this->mockCategory->shouldReceive('getSizes')->once()->andReturn(array($mockSize = m::mock('JustMenu\Menu\Entity\Size')));
        $mockSize->size = 'small';
        $mockSize->size_short = 'sm';
        $mockSize->price = '3.00';
        $presenter = new XMLMenuPresenter($this->mockCategory);

        $this->assertTag(['tag' => 'default-size', 'parent' => ['tag' => 'Category'], 'content' => 'small', 'attributes' => ['price' => '3.00']], $presenter->render());
    }

    public function testCategoryWithItem()
    {
        $this->mockCategory->shouldReceive('getSizes')->once()->andReturn([]);
        $this->mockCategory->addItem($this->mockItem);

        $presenter = new XMLMenuPresenter($this->mockCategory);

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
        $mockMenu = m::mock('JustMenu\Menu\Menu')->makePartial();
        $this->mockCategory->shouldReceive('getSizes')->once()->andReturn([]);
        $this->mockCategory->addItem($this->mockItem);
        $mockMenu->addCategory($this->mockCategory);

        $presenter = new XMLMenuPresenter($mockMenu);

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
