<?php

use Mockery as m;
use JustMenu\Menu\MenuBuilder;

class MenuBuilderTest extends TestCase
{
    public function setUp()
    {
        $this->builder = new MenuBuilder(m::mock('JustMenu\Menu\ManagerInterface'), m::mock('JustMenu\Menu\Presenter\MenuPresenter'), m::mock('JustMenu\Menu\Menu'));
    }

    public function testBuildReturnsMenuWrappedWithPresenter()
    {
        $this->builder->getManager()
            ->shouldReceive('assembleCategories')
            ->once()
            ->andReturn(array(m::mock('JustMenu\Menu\Entity\Category'), m::mock('JustMenu\Menu\Entity\Category')));

        $this->builder->getMenu()
            ->shouldReceive('addCategory')
            ->twice();

        $this->builder->getMenuPresenter()
            ->shouldReceive('setComponent')
            ->once()
            ->with($this->builder->getMenu())
            ->andReturn('wrapped_menu');

        $this->assertSame('wrapped_menu', $this->builder->build());
    }
}
