<?php

use Mockery as m;
use JustMenu\Menu\Builder\SimpleMenuBuilder;
use JustMenu\Menu\Presenter\MenuPresenter;

class SimpleMenuBuilderTest extends TestCase
{
    public function testCanAssembleMenu()
    {
        $builder = new SimpleMenuBuilder(m::mock('JustMenu\Menu\Presenter\MenuPresenter'));

        $menu = $builder->assembleMenu();

        $this->assertInstanceOf('JustMenu\Menu\MenuComponentInterface', $menu);
        $this->assertInstanceOf('JustMenu\Menu\Menu', $menu);
    }
}
