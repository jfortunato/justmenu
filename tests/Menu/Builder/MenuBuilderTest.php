<?php

use Mockery as m;

class MenuBuilderTest extends TestCase
{
    public function setUp()
    {
        $this->builder = m::mock('JustMenu\Menu\Builder\MenuBuilder[assembleMenu]', array(m::mock('JustMenu\Menu\Presenter\MenuPresenter')));
    }

    public function testBuildReturnsMenuWrappedWithPresenter()
    {
        $this->builder
            ->shouldReceive('assembleMenu')
            ->once()
            ->andReturn(m::mock('JustMenu\Menu\MenuComponentInterface'));

        $this->builder->getMenuPresenter()
            ->shouldReceive('setComponent')
            ->once()
            ->with('JustMenu\Menu\MenuComponentInterface')
            ->andReturn('wrapped_menu');

        $this->assertSame('wrapped_menu', $this->builder->build());
    }
}
