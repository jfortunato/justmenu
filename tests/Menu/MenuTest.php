<?php namespace JustMenu\Tests\Menu;

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Menu\Menu;

class MenuTest extends TestCase
{
    public function setUp()
    {
        $this->menu = new Menu;
    }

    public function testCanAddCategory()
    {
        $this->assertCount(0, $this->menu->getCategories());

        $this->menu->addCategory(m::mock('JustMenu\Menu\Entity\Category'));

        $this->assertCount(1, $this->menu->getCategories());
    }

    public function testCanGetChildrenComponents()
    {
        $this->assertSame($this->menu->getCategories(), $this->menu->getChildrenComponents());
    }

    public function testCanRenderMenu()
    {
        $mockPresenter = m::mock('JustMenu\Menu\Presenter\MenuPresenter');
        $mockPresenter->shouldReceive('renderMenu')->once();

        $this->menu->render($mockPresenter);
    }


}
