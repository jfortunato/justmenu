<?php

use Mockery as m;
use JustMenu\Menu\SimpleMenuBuilder;

class SimpleMenuBuilderTest extends TestCase {


	public function testCanAssembleMenu()
	{
		$builder = new SimpleMenuBuilder(m::mock('JustMenu\Menu\MenuPresenter'));

		$this->assertInstanceOf('JustMenu\Menu\Components\Menu', $builder->assembleMenu());
	}

}
