<?php namespace JustMenu\Tests\Menu\Entity;

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Menu\Entity\Category;

class CategoryTest extends TestCase
{
    public function setUp()
    {
        $this->category = new Category;
        $this->mockSizeSmall = m::mock('JustMenu\Menu\Entity\Size', array('2.55', 'small', 'Sm.'));
        $this->mockSizeLarge = m::mock('JustMenu\Menu\Entity\Size', array('5.00', 'large', 'Lg.'));
    }

    public function testCanAddItem()
    {
        $this->assertCount(0, $this->category->items);

        $this->category->addItem(m::mock('JustMenu\Menu\Entity\Item'));

        $this->assertCount(1, $this->category->items);
    }

    public function testCanAddSize()
    {
        $this->assertCount(0, $this->category->sizes);

        $this->category->addSize(m::mock('JustMenu\Menu\Entity\Size'));

        $this->assertCount(1, $this->category->sizes);
    }

    public function testGetAllLongSizes()
    {
        $this->category->addSize($this->mockSizeSmall);
        $this->category->addSize($this->mockSizeLarge);

        $this->assertSame(array('small', 'large'), $this->category->getAllLongSizes());
    }

    public function testGetAllShortSizes()
    {
        $this->category->addSize($this->mockSizeSmall);
        $this->category->addSize($this->mockSizeLarge);

        $this->assertSame(array('Sm.', 'Lg.'), $this->category->getAllShortSizes());
    }

    public function testCanGetChildrenComponents()
    {
        $this->assertSame($this->category->items, $this->category->getChildrenComponents());
    }

    public function testCanRenderCategory()
    {
        $mockPresenter = m::mock('JustMenu\Menu\Presenter\MenuPresenter');
        $mockPresenter->shouldReceive('renderCategory')->once();

        $this->category->render($mockPresenter);
    }

    public function testCanGetJsonOptionIds()
    {
        $this->category->menuComponentOptions = array($mockMCO1 = m::mock('JustMenu\Menu\Entity\MenuComponentOption'), $mockMCO2 = m::mock('JustMenu\Menu\Entity\MenuComponentOption'));
        $mockMCO1->option = m::mock('JustMenu\Menu\Entity\Option');
        $mockMCO1->option->id = 1;
        $mockMCO2->option = m::mock('JustMenu\Menu\Entity\Option');
        $mockMCO2->option->id = 3;

        $this->assertJsonStringEqualsJsonString('[1, 3]', $this->category->getJsonOptionIds());
    }
}
