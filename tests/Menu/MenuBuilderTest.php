<?php

use Mockery as m;
use JustMenu\Menu\SimpleMenuBuilder;

class MenuBuilderTest extends TestCase {

	public function setUp()
	{
		$this->builder = m::mock('JustMenu\Menu\MenuBuilder[assembleMenu]', array(m::mock('JustMenu\Menu\MenuPresenter')));
	}

	public function testBuildReturnsMenuWrappedWithPresenter()
	{
		$this->builder
			->shouldReceive('assembleMenu')
			->once()
			->andReturn(m::mock('JustMenu\Menu\Components\Menu'));

		$this->builder->getMenuPresenter()
			->shouldReceive('setComponent')
			->once()
			->with('JustMenu\Menu\Components\Menu')
			->andReturn('wrapped_menu');

		$this->assertSame('wrapped_menu', $this->builder->build());
	}


}
